<?php

namespace Database\Seeders;

use App\Models\Nucleo;
use Illuminate\Database\Seeder;

class NucleoSeeder extends Seeder
{
    public function run(): void
    {
        $nucleos = [
            [
                'nombre' => 'NT1 - Introducción a Laravel',
                'descripcion' => 'Fundamentos del framework Laravel, arquitectura MVC, Composer, Artisan y estructura del proyecto.',
            ],
            [
                'nombre' => 'NT2 - Rutas y Controladores',
                'descripcion' => 'Uso de rutas HTTP, parámetros, controladores, métodos RESTful y middleware.',
            ],
            [
                'nombre' => 'NT3 - Blade Templates',
                'descripcion' => 'Uso de vistas Blade, directivas, layouts, componentes y paso de variables.',
            ],
            [
                'nombre' => 'NT4 - Modelos y Base de Datos',
                'descripcion' => 'Migraciones, modelos Eloquent, relaciones, seeders, factories y consultas.',
            ],
            [
                'nombre' => 'NT5 - Formularios y Validaciones',
                'descripcion' => 'Formularios HTML en Blade, CSRF, validaciones, Form Request y mensajes de error.',
            ],
        ];

        foreach ($nucleos as $nucleo) {
            Nucleo::create($nucleo);
        }
    }
}