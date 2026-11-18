# RITUAL — E-Commerce de Cuidado Personal Botánico

Aplicación web de comercio electrónico y contenido editorial desarrollada con el framework **Laravel** bajo el patrón de arquitectura **Modelo-Vista-Controlador (MVC)**. El proyecto ofrece un catálogo de cajas temáticas de cuidado personal (*boxes*), un blog editorial (*Grimorio Botánico & Novedades*) y un panel de administración para la gestión de contenidos.

---

## Arquitectura y Funcionalidades Principales

* **Página de Inicio (`/`):** Presentación de la propuesta de valor y exhibición dinámica de los productos destacados.
* **Catálogo de Productos (`/boxes` y `/boxes/{id}`):** Listado completo de cajas botánicas y vista de detalle individual con descripción, contenido y precio formateado.
* **Blog Editorial (`/blog` y `/blog/{slug}`):** Publicaciones sobre herbolaria, fases lunares y guías de uso con navegación mediante *slugs* amigables.
* **Panel de Administración (`/admin/blog`):** Operaciones CRUD (creación, lectura, actualización y eliminación) para los artículos del blog, con validación de datos del lado del servidor y mensajes de confirmación de sesión.

---

## Stack Tecnológico

* **Backend:** PHP 8.3+ / Laravel 13
* **Base de Datos:** MySQL / MariaDB (gestionado mediante Eloquent ORM, Migraciones y Seeders)
* **Frontend:** Motor de plantillas Blade, componentes reutilizables y hojas de estilo CSS3 (`public/css/app.css`)
* **Gestión de Dependencias:** Composer

---

## Requisitos Previos

Antes de instalar y ejecutar el proyecto, asegúrese de contar con las siguientes herramientas en su entorno local (Laragon, XAMPP o similar):

1. **PHP** >= 8.2 con las extensiones `pdo_mysql`, `mbstring`, `openssl`, `tokenizer`, `xml`, `ctype`, `json` y `zip` habilitadas.
2. **Composer** instalado y accesible desde la terminal.
3. **Servidor de Base de Datos** MySQL o MariaDB en ejecución.

---

## Guía de Instalación y Puesta en Marcha

Siga estos pasos en orden desde la terminal ubicada en la carpeta raíz del proyecto:

### 1. Clonar o descomprimir el repositorio
Sitúese dentro del directorio raíz del proyecto:

```bash
cd ritual
```

### 2. Instalar las dependencias de PHP
Ejecute Composer para descargar el núcleo de Laravel y los paquetes definidos en `composer.json`:

```bash
composer install
```

### 3. Configurar las variables de entorno
Copie el archivo de plantilla `.env.example` para generar su archivo de configuración local `.env`:

```bash
cp .env.example .env
```

*(En Windows CMD puede utilizar `copy .env.example .env`).*

### 4. Generar la clave de seguridad de la aplicación
Ejecute el comando de Artisan para asignar la clave `APP_KEY` dentro del archivo `.env`:

```bash
php artisan key:generate
```

### 5. Configurar la conexión a la base de datos
Abra el archivo `.env` y ajuste los parámetros de conexión según las credenciales de su servidor local MySQL o MariaDB:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ritual_db
DB_USERNAME=root
DB_PASSWORD=
```

### 6. Ejecutar las migraciones y cargar los datos iniciales
Corra las migraciones junto con los *seeders* (`BoxSeeder` y `PostSeeder`) para crear la estructura de tablas y poblar la base de datos con registros de prueba:

```bash
php artisan migrate --seed
```

*(Si la base de datos `ritual_db` aún no existe en su gestor local, Laravel solicitará confirmación en la consola para crearla automáticamente).*

### 7. Iniciar el servidor de desarrollo
Levante el servidor local integrado de Artisan:

```bash
php artisan serve
```

Una vez iniciado, acceda desde su navegador web a la siguiente dirección:

```text
http://127.0.0.1:8000
```

---

## Estructura de Directorios Relevantes

* `app/Http/Controllers/` — Controladores (`HomeController`, `BoxesController`, `PostController`).
* `app/Models/` — Modelos Eloquent (`Box`, `Post`, `User`).
* `database/migrations/` — Definición esquemática de las tablas de la base de datos.
* `database/seeders/` — Clases para la carga inicial de productos y artículos.
* `resources/views/` — Vistas Blade públicas, vistas del panel administrativo (`admin/posts/`) y componentes (`components/layout.blade.php`).
* `routes/web.php` — Definición de rutas web públicas y administrativas.
* `public/css/app.css` — Hojas de estilo globales de la aplicación.

---

## Rutas Principales

| Método | URI | Acción | Descripción |
| :--- | :--- | :--- | :--- |
| `GET` | `/` | `HomeController@index` | Página principal con productos destacados |
| `GET` | `/boxes` | `BoxesController@index` | Catálogo completo de boxes |
| `GET` | `/boxes/{id}` | `BoxesController@show` | Detalle individual de una box |
| `GET` | `/blog` | `PostController@index` | Listado público de artículos del blog |
| `GET` | `/blog/{slug}` | `PostController@show` | Lectura completa de un artículo |
| `GET` | `/admin/blog` | `PostController@adminIndex` | Panel de administración de entradas |
| `GET` | `/admin/blog/crear` | `PostController@create` | Formulario de creación de entrada |
| `POST` | `/admin/blog` | `PostController@store` | Almacenamiento de nueva entrada |
| `GET` | `/admin/blog/{id}/editar` | `PostController@edit` | Formulario de edición de entrada |
| `PUT` | `/admin/blog/{id}` | `PostController@update` | Actualización de entrada existente |
| `DELETE` | `/admin/blog/{id}` | `PostController@destroy` | Eliminación de entrada |