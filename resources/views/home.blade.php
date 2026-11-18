<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RITUAL — Cosmetica Natural</title>
    <style>
        :root {
            --bg-dark: #130d1d;        /* Violeta noche profundo */
            --card-bg: #1e152d;        /* Amatista oscuro */
            --violet-accent: #9d65ff;  /* Violeta místico */
            --green-sage: #4e8c6f;     /* Verde bosque / salvia */
            --green-glow: #73c69d;     /* Verde hierba claro */
            --text-light: #f3eef8;
            --text-muted: #b8adc9;
        }

        body {
            margin: 0;
            font-family: 'Georgia', serif;
            background-color: var(--bg-dark);
            color: var(--text-light);
        }

        header {
            background: linear-gradient(135deg, #1b112c 0%, #152922 100%);
            border-bottom: 1px solid var(--green-sage);
            padding: 3rem 1.5rem;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2.8rem;
            letter-spacing: 6px;
            color: var(--violet-accent);
        }

        header p {
            color: var(--green-glow);
            font-style: italic;
            margin-top: 0.5rem;
        }

        .container {
            max-width: 1050px;
            margin: 3rem auto;
            padding: 0 1.5rem;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.8rem;
        }

        .card {
            background-color: var(--card-bg);
            border: 1px solid rgba(157, 101, 255, 0.25);
            border-top: 3px solid var(--green-sage);
            border-radius: 12px;
            padding: 1.8rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .badge {
            display: inline-block;
            background-color: rgba(78, 140, 111, 0.2);
            color: var(--green-glow);
            border: 1px solid var(--green-sage);
            padding: 0.25rem 0.7rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-family: sans-serif;
            margin-bottom: 1rem;
            width: fit-content;
        }

        .card h2 {
            margin: 0 0 0.75rem 0;
            font-size: 1.35rem;
            color: var(--text-light);
        }

        .card p {
            color: var(--text-muted);
            line-height: 1.6;
            font-size: 0.95rem;
        }

        .price {
            font-size: 1.3rem;
            font-weight: bold;
            color: var(--violet-accent);
            margin-top: 1.2rem;
        }
    </style>
</head>
<body>

<x-layout>
    <x-slot:title>RITUAL — Cosmetica Natural</x-slot:title>

    {{-- 1. Presentación real de la marca y propuesta --}}
    <section class="card-ritual section" style="text-align: center; padding: 3rem 1.5rem;">
        <div>
            <span class="badge-category">Botánica & Autocuidado </span>
            <h1>Transformá tu rutina diaria en un ritual sagrado</h1>
            <p style="max-width: 680px; margin-inline: auto;">
                En <strong>RITUAL</strong> creamos boxes mensuales de <strong>skincare, cuidado corporal y capilar</strong> elaboradas con extractos herbales, aceites esenciales puros, inspirada en la naturaleza y la magia lunar.
            </p>
            <div style="margin-top: 1.5rem; display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="{{ route('boxes.index') }}" class="btn btn-primary">Ver Boxes</a>
                <a href="{{ route('posts.index') }}" class="btn btn-outline-green">Blog</a>
            </div>
        </div>
    </section>

    {{-- 2. Sección Productos Destacados --}}
    <section class="section">
        <div style="display: flex; justify-content: space-between; align-items: baseline; flex-wrap: wrap; gap: 1rem; margin-bottom: 1.5rem;">
            <h2>Boxes Destacadas</h2>
            <a href="{{ route('boxes.index') }}">Ver catálogo completo →</a>
        </div>

        <div class="grid-boxes">
            @foreach ($boxesDestacadas as $box)
                <article class="card-ritual">
                    <div>
                        <span class="badge-category">{{ $box->categoria }}</span>
                        <h3>{{ $box->nombre }}</h3>
                        <p>{{ $box->descripcion }}</p>
                    </div>
                    <div>
                        <div class="price-tag">${{ number_format($box->precio, 0, ',', '.') }}</div>
                        <a href="{{ route('boxes.show', $box->id) }}" class="btn btn-outline-green">Ver detalle de la box</a>
                    </div>
                </article>
            @endforeach
        </div>
    </section>

    {{-- 3. Sección Blog / Novedades dinámicas desde BD --}}
    <section class="section">
        <div style="display: flex; justify-content: space-between; align-items: baseline; flex-wrap: wrap; gap: 1rem; margin-bottom: 1.5rem;">
            <h2>Novedades del Grimorio</h2>
            <a href="{{ route('posts.index') }}">Ver todos los artículos →</a>
        </div>

        <div class="grid-boxes">
            @foreach ($ultimosPosts as $post)
                <article class="card-ritual">
                    <div>
                        <span class="badge-category">{{ $post->categoria }}</span>
                        <h3>
                            <a href="{{ route('posts.show', $post->slug) }}">{{ $post->titulo }}</a>
                        </h3>
                        <p style="font-size: 0.85rem; color: var(--color-text-muted);">
                            Por {{ $post->autor }} • {{ $post->created_at->format('d/m/Y') }}
                        </p>
                        <p>{{ $post->resumen }}</p>
                    </div>
                    <a href="{{ route('posts.show', $post->slug) }}" class="btn btn-outline-green">Leer nota completa</a>
                </article>
            @endforeach
        </div>
    </section>
</x-layout>

</body>
</html>