<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::create([
            'titulo' => 'Cómo armar tu ritual nocturno de skincare según la fase lunar',
            'slug' => 'ritual-nocturno-skincare-fase-lunar',
            'categoria' => 'Fases Lunares',
            'resumen' => 'Descubrí qué activos botánicos potenciar en Luna Nueva para limpiar y en Luna Llena para nutrir tu piel.',
            'contenido' => 'La piel responde a los ciclos naturales del descanso y la regeneración. Durante la Luna Menguante y Nueva, priorizá limpiezas suaves con agua micelar de lavanda y arcillas purificantes. En Luna Creciente y Llena, la absorción celular alcanza su punto máximo: es el momento ideal para aplicar sérums de bakuchiol, aceite de jojoba y brumas de verbena.',
            'autor' => 'Selene — Herborista de RITUAL',
        ]);

        Post::create([
            'titulo' => 'Propiedades de la ortiga y el romero para fortalecer el cuero cabelludo',
            'slug' => 'propiedades-ortiga-romero-cabello',
            'categoria' => 'Herbolaria Capilar',
            'resumen' => 'Dos hierbas ancestrales del bosque que estimulan la circulación y devuelven el brillo natural.',
            'contenido' => 'El romero silvestre y la hoja de ortiga han sido utilizados durante siglos en infusiones capilares. Su combinación aporta minerales esenciales, equilibra el sebo de la raíz y fortalece el folículo sin necesidad de siliconas ni sulfatos agresivos.',
            'autor' => 'Morgana — Formulación Botánica',
        ]);

        Post::create([
            'titulo' => 'Baños herbales de descarga: salvia blanca, sal marina y lavanda',
            'slug' => 'banos-herbales-descarga-salvia-lavanda',
            'categoria' => 'Cuidado Corporal',
            'resumen' => 'Convertí tu ducha diaria en un espacio de renovación energética y exfoliación profunda.',
            'contenido' => 'Exfoliar el cuerpo con sal marina gruesa macerada en aceites esenciales de salvia y lavanda no solo remueve células muertas y suaviza la piel, sino que ayuda a liberar la tensión acumulada del día mediante aromaterapia botánica.',
            'autor' => 'Selene — Herborista de RITUAL',
        ]);
    }
}
