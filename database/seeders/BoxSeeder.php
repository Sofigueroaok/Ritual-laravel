<?php

namespace Database\Seeders;

use App\Models\Box;
use Illuminate\Database\Seeder;

class BoxSeeder extends Seeder
{
    public function run(): void
    {
        $boxes = [
            [
                'nombre' => 'Box Ritual Lunar',
                'categoria' => 'Skincare',
                'descripcion' => 'Ritual nocturno de limpieza y calma profunda con botánica lunar.',
                'contenido' => 'Agua micelar de lavanda, sérum de amatista y bakuchiol, crema nocturna de manzanilla.',
                'precio' => 28500.00,
            ],
            [
                'nombre' => 'Box Bosque Sagrado',
                'categoria' => 'Cuidado Corporal',
                'descripcion' => 'Purificación y nutrición corporal con hierbas silvestres del bosque.',
                'contenido' => 'Exfoliante de salvia y sal marina, manteca corporal de karité, aceite de romero.',
                'precio' => 31000.00,
            ],
            [
                'nombre' => 'Box Raíces & Éter',
                'categoria' => 'Cuidado del Cabello',
                'descripcion' => 'Fortalecimiento capilar desde la raíz con extractos herbales ancestrales.',
                'contenido' => 'Tónico de ortiga y romero, mascarilla de arcilla verde, peine de madera de sándalo.',
                'precio' => 26900.00,
            ],
            [
                'nombre' => 'Box Solsticio de Verbena',
                'categoria' => 'Skincare',
                'descripcion' => 'Luminosidad y frescura herbal para revitalizar la piel apagada.',
                'contenido' => 'Bruma facial de verbena, gel limpiador de té verde, contorno de ojos de caléndula.',
                'precio' => 29800.00,
            ],
        ];

        foreach ($boxes as $box) {
            Box::create($box);
        }
    }
}
