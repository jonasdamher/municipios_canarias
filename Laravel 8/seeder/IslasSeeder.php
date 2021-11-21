<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IslasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $islas = [
            ['provincias_id' => 1, 'nombre' => 'Palmas, Las'],
            ['provincias_id' => 2, 'nombre' => 'Santa Cruz de Tenerife'],
            ['provincias_id' => 2, 'nombre' => 'La Palma'],
            ['provincias_id' => 2, 'nombre' => 'La Gomera'],
            ['provincias_id' => 2, 'nombre' => 'El Hierro'],
            ['provincias_id' => 1, 'nombre' => 'Lanzarote'],
            ['provincias_id' => 1, 'nombre' => 'Fuerteventura']
        ];
        $islas = array_map(function ($isla) {
            return array_merge($isla, ['created_at' => date("Y-m-d"), 'updated_at' => date("Y-m-d")]);
        }, $islas);
        DB::table('islas')->insert($islas);
    }
}
