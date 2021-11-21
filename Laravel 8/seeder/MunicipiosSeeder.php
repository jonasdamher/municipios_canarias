<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $municipios = [
            ['islas_id' => 1, 'codigo_municipio' => 1, 'dc' =>  7, 'nombre' => 'Agaete'],
            ['islas_id' => 2, 'codigo_municipio' => 1, 'dc' =>  2, 'nombre' => 'Adeje'],
            ['islas_id' => 1, 'codigo_municipio' => 2, 'dc' =>  2, 'nombre' => 'Agüimes'],
            ['islas_id' => 4, 'codigo_municipio' => 2, 'dc' =>  7, 'nombre' => 'Agulo'],
            ['islas_id' => 7, 'codigo_municipio' => 3, 'dc' => 8, 'nombre' => 'Antigua'],
            ['islas_id' => 4, 'codigo_municipio' => 3, 'dc' =>  3, 'nombre' => 'Alajeró'],
            ['islas_id' => 6, 'codigo_municipio' => 4, 'dc' =>  3, 'nombre' => 'Arrecife'],
            ['islas_id' => 2, 'codigo_municipio' => 4, 'dc' =>  8, 'nombre' => 'Arafo'],
            ['islas_id' => 1, 'codigo_municipio' => 5, 'dc' =>  6, 'nombre' => 'Artenara'],
            ['islas_id' => 2, 'codigo_municipio' => 5, 'dc' =>  1, 'nombre' => 'Arico'],
            ['islas_id' => 1, 'codigo_municipio' => 6, 'dc' =>  9, 'nombre' => 'Arucas'],
            ['islas_id' => 2, 'codigo_municipio' => 6, 'dc' =>  4, 'nombre' => 'Arona'],
            ['islas_id' => 7, 'codigo_municipio' => 7, 'dc' =>  5, 'nombre' => 'Betancuria'],
            ['islas_id' => 3, 'codigo_municipio' => 7, 'dc' =>  0, 'nombre' => 'Barlovento'],
            ['islas_id' => 1, 'codigo_municipio' => 8, 'dc' =>  1, 'nombre' =>  'Firgas'],
            ['islas_id' => 3, 'codigo_municipio' => 8, 'dc' =>  6, 'nombre' => 'Breña Alta'],
            ['islas_id' => 1, 'codigo_municipio' => 9, 'dc' =>  4, 'nombre' => 'Gáldar'],
            ['islas_id' => 3, 'codigo_municipio' => 9, 'dc' =>  9, 'nombre' => 'Breña Baja'],
            ['islas_id' => 6, 'codigo_municipio' => 10, 'dc' =>  8, 'nombre' => 'Haría'],
            ['islas_id' => 2, 'codigo_municipio' => 10, 'dc' =>  3, 'nombre' => 'Buenavista del Norte'],
            ['islas_id' => 1, 'codigo_municipio' => 11, 'dc' =>  5, 'nombre' => 'Ingenio'],
            ['islas_id' => 2, 'codigo_municipio' => 11, 'dc' =>  0, 'nombre' => 'Candelaria'],
            ['islas_id' => 1, 'codigo_municipio' => 12, 'dc' =>  0, 'nombre' => 'Mogán'],
            ['islas_id' => 2, 'codigo_municipio' => 12, 'dc' =>  5, 'nombre' => 'Fasnia'],
            ['islas_id' => 1, 'codigo_municipio' => 13, 'dc' =>  6, 'nombre' => 'Moya'],
            ['islas_id' => 5, 'codigo_municipio' => 13, 'dc' =>  1, 'nombre' => 'Frontera'],
            ['islas_id' => 7, 'codigo_municipio' => 14, 'dc' =>  1, 'nombre' => 'Oliva, La'],
            ['islas_id' => 3, 'codigo_municipio' => 14, 'dc' =>  6, 'nombre' => 'Fuencaliente de la Palma'],
            ['islas_id' => 7, 'codigo_municipio' => 15, 'dc' =>  4, 'nombre' => 'Pájara'],
            ['islas_id' => 2, 'codigo_municipio' => 15, 'dc' =>  9, 'nombre' => 'Garachico'],
            ['islas_id' => 1, 'codigo_municipio' => 16, 'dc' => 7, 'nombre' => 'Palmas de Gran Canaria, Las'],
            ['islas_id' => 3, 'codigo_municipio' => 16, 'dc' =>  2, 'nombre' => 'Garafía'],
            ['islas_id' => 7, 'codigo_municipio' => 17, 'dc' =>  3, 'nombre' => 'Puerto del Rosario'],
            ['islas_id' => 2, 'codigo_municipio' => 17, 'dc' =>  8, 'nombre' => 'Granadilla de Abona'],
            ['islas_id' => 6, 'codigo_municipio' => 18, 'dc' =>  9, 'nombre' => 'San Bartolomé'],
            ['islas_id' => 2, 'codigo_municipio' => 18, 'dc' =>  4, 'nombre' => 'Guancha, La'],
            ['islas_id' => 1, 'codigo_municipio' => 19, 'dc' =>  2, 'nombre' => 'San Bartolomé de Tirajana'],
            ['islas_id' => 2, 'codigo_municipio' => 19, 'dc' =>  7, 'nombre' => 'Guía de Isora'],
            ['islas_id' => 1, 'codigo_municipio' => 20, 'dc' =>  6, 'nombre' => 'Aldea de San Nicolás, La'],
            ['islas_id' => 2, 'codigo_municipio' => 20, 'dc' => 1, 'nombre' => 'Güímar'],
            ['islas_id' => 1, 'codigo_municipio' => 21, 'dc' =>  3, 'nombre' => 'Santa Brígida'],
            ['islas_id' => 4, 'codigo_municipio' => 21, 'dc' =>  8, 'nombre' => 'Hermigua'],
            ['islas_id' => 1, 'codigo_municipio' => 22, 'dc' =>  8, 'nombre' => 'Santa Lucía de Tirajana'],
            ['islas_id' => 2, 'codigo_municipio' => 22, 'dc' =>  3, 'nombre' => 'Icod de los Vinos'],
            ['islas_id' => 1, 'codigo_municipio' => 23, 'dc' =>  4, 'nombre' => 'Santa María de Guía de Gran Canaria'],
            ['islas_id' => 2, 'codigo_municipio' => 23, 'dc' =>  9, 'nombre' => 'San Cristóbal de La Laguna'],
            ['islas_id' => 6, 'codigo_municipio' => 24, 'dc' =>  9, 'nombre' => 'Teguise'],
            ['islas_id' => 3, 'codigo_municipio' => 24, 'dc' =>  4, 'nombre' => 'Llanos de Aridane, Los'],
            ['islas_id' => 1, 'codigo_municipio' => 25, 'dc' =>  2, 'nombre' => 'Tejeda'],
            ['islas_id' => 2, 'codigo_municipio' => 25, 'dc' =>  7, 'nombre' => 'Matanza de Acentejo, La'],
            ['islas_id' => 1, 'codigo_municipio' => 26, 'dc' =>  5, 'nombre' => 'Telde'],
            ['islas_id' => 2, 'codigo_municipio' => 26, 'dc' =>  0, 'nombre' => 'Orotava, La'],
            ['islas_id' => 1, 'codigo_municipio' => 27, 'dc' =>  1, 'nombre' => 'Teror'],
            ['islas_id' => 3, 'codigo_municipio' => 27, 'dc' =>  6, 'nombre' => 'Paso, El'],
            ['islas_id' => 6, 'codigo_municipio' => 28, 'dc' =>  7, 'nombre' => 'Tías'],
            ['islas_id' => 2, 'codigo_municipio' => 28, 'dc' => 2, 'nombre' => 'Puerto de la Cruz'],
            ['islas_id' => 6, 'codigo_municipio' => 29, 'dc' => 0, 'nombre' => 'Tinajo'],
            ['islas_id' => 3, 'codigo_municipio' => 29, 'dc' =>  5, 'nombre' => 'Puntagorda'],
            ['islas_id' => 7, 'codigo_municipio' => 30, 'dc' =>  4, 'nombre' => 'Tuineje'],
            ['islas_id' => 3, 'codigo_municipio' => 30, 'dc' =>  9, 'nombre' => 'Puntallana'],
            ['islas_id' => 1, 'codigo_municipio' => 31, 'dc' => 1, 'nombre' => 'Valsequillo de Gran Canaria'],
            ['islas_id' => 2, 'codigo_municipio' => 31, 'dc' => 6, 'nombre' => 'Realejos, Los'],
            ['islas_id' => 1, 'codigo_municipio' => 32, 'dc' =>  6, 'nombre' => 'Valleseco'],
            ['islas_id' => 2, 'codigo_municipio' => 32, 'dc' =>  1, 'nombre' => 'Rosario, El'],
            ['islas_id' => 1, 'codigo_municipio' => 33, 'dc' =>  2, 'nombre' => 'Vega de San Mateo'],
            ['islas_id' => 3, 'codigo_municipio' => 33, 'dc' =>  7, 'nombre' => 'San Andrés y Sauces'],
            ['islas_id' => 6, 'codigo_municipio' => 34, 'dc' =>  7, 'nombre' => 'Yaiza'],
            ['islas_id' => 2, 'codigo_municipio' => 34, 'dc' =>  2, 'nombre' => 'San Juan de la Rambla'],
            ['islas_id' => 2, 'codigo_municipio' => 35, 'dc' =>  5, 'nombre' => 'San Miguel de Abona'],
            ['islas_id' => 4, 'codigo_municipio' => 36, 'dc' => 8, 'nombre' => 'San Sebastián de la Gomera'],
            ['islas_id' => 3, 'codigo_municipio' => 37, 'dc' =>  4, 'nombre' => 'Santa Cruz de la Palma'],
            ['islas_id' => 2, 'codigo_municipio' => 38, 'dc' =>  0, 'nombre' => 'Santa Cruz de Tenerife'],
            ['islas_id' => 2, 'codigo_municipio' => 39, 'dc' =>  3, 'nombre' => 'Santa Úrsula'],
            ['islas_id' => 2, 'codigo_municipio' => 40, 'dc' =>  7, 'nombre' => 'Santiago del Teide'],
            ['islas_id' => 2, 'codigo_municipio' => 41, 'dc' => 4, 'nombre' => 'Sauzal, El'],
            ['islas_id' => 2, 'codigo_municipio' => 42, 'dc' =>  9, 'nombre' => 'Silos, Los'],
            ['islas_id' => 2, 'codigo_municipio' => 43, 'dc' =>  5, 'nombre' => 'Tacoronte'],
            ['islas_id' => 2, 'codigo_municipio' => 44, 'dc' =>  0, 'nombre' => 'Tanque, El'],
            ['islas_id' => 3, 'codigo_municipio' => 45, 'dc' =>  3, 'nombre' => 'Tazacorte'],
            ['islas_id' => 2, 'codigo_municipio' => 46, 'dc' =>  6, 'nombre' => 'Tegueste'],
            ['islas_id' => 3, 'codigo_municipio' => 47, 'dc' =>  2, 'nombre' => 'Tijarafe'],
            ['islas_id' => 5, 'codigo_municipio' => 48, 'dc' =>  8, 'nombre' => 'Valverde'],
            ['islas_id' => 4, 'codigo_municipio' => 49, 'dc' =>  1, 'nombre' => 'Valle Gran Rey'],
            ['islas_id' => 4, 'codigo_municipio' => 50, 'dc' =>  4, 'nombre' => 'Vallehermoso'],
            ['islas_id' => 2, 'codigo_municipio' => 51, 'dc' =>  1, 'nombre' => 'Victoria de Acentejo, La'],
            ['islas_id' => 2, 'codigo_municipio' => 52, 'dc' =>  6, 'nombre' => 'Vilaflor'],
            ['islas_id' => 3, 'codigo_municipio' => 53, 'dc' =>  2, 'nombre' => 'Villa de Mazo'],
            ['islas_id' => 5, 'codigo_municipio' => 901, 'dc' => 3, 'nombre' => 'Pinar de El Hierro, El']
        ];
        $municipios = array_map(function ($municipio) {
            return array_merge($municipio, ['created_at' => date("Y-m-d"), 'updated_at' => date("Y-m-d")]);
        }, $municipios);
        DB::table('municipios')->insert($municipios);
    }
}
