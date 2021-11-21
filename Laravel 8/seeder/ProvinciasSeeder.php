<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provincias = [
            ['nombre' => 'Palmas, Las'],
            ['nombre' => 'Santa Cruz de Tenerife']
        ];
        $provincias = array_map(function ($provincia) {
            return array_merge($provincia, ['created_at' => date("Y-m-d"), 'updated_at' => date("Y-m-d")]);
        }, $provincias);
        DB::table('provincias')->insert($provincias);
    }
}
