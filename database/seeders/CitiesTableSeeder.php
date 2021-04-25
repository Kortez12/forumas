<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class CitiesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('cities')->insert(array(
            [
                'id'         => 1,
                'name'       => 'Akmenė',
                'short_code' => 'ak',
            ],
            [
                'id'         => 2,
                'name'       => 'Alytus',
                'short_code' => 'al',
            ],
            [
                'id'         => 3,
                'name'       => 'Anykščiai',
                'short_code' => 'an',
            ],
            [
                'id'         => 4,
                'name'       => 'Ariogala',
                'short_code' => 'ar',
            ],
            [
                'id'         => 5,
                'name'       => 'Baltoji Vokė',
                'short_code' => 'bv',
            ],
            [
                'id'         => 6,
                'name'       => 'Birštonas',
                'short_code' => 'bš',
            ],
            [
                'id'         => 7,
                'name'       => 'Biržai',
                'short_code' => 'br',
            ],
            [
                'id'         => 8,
                'name'       => 'Daugai',
                'short_code' => 'dg',
            ],
            [
                'id'         => 9,
                'name'       => 'Druskininkai',
                'short_code' => 'dr',
            ],
            [
                'id'         => 10,
                'name'       => 'Dūkštas',
                'short_code' => 'dk',
            ],
            [
                'id'         => 11,
                'name'       => 'Dusetos',
                'short_code' => 'ds',
            ],
            [
                'id'         => 12,
                'name'       => 'Eišiškės',
                'short_code' => 'eš',
            ],
            [
                'id'         => 13,
                'name'       => 'Elektrėnai',
                'short_code' => 'el',
            ],
            [
                'id'         => 14,
                'name'       => 'Ežerėlis',
                'short_code' => 'ež',
            ],
            [
                'id'         => 15,
                'name'       => 'Gargždai',
                'short_code' => 'gž',
            ],
            [
                'id'         => 16,
                'name'       => 'Garliava',
                'short_code' => 'ga',
            ],
            [
                'id'         => 17,
                'name'       => 'Gelgaudiškis',
                'short_code' => 'gl',
            ],
            [
                'id'         => 18,
                'name'       => 'Grigiškės',
                'short_code' => 'gr',
            ],
            [
                'id'         => 19,
                'name'       => 'Ignalina',
                'short_code' => 'ig',
            ],
            [
                'id'         => 20,
                'name'       => 'Jieznas',
                'short_code' => 'jz',
            ],
            [
                'id'         => 21,
                'name'       => 'Jonava',
                'short_code' => 'jn',
            ],
            [
                'id'         => 22,
                'name'       => 'Joniškėlis',
                'short_code' => 'jk',
            ],
            [
                'id'         => 23,
                'name'       => 'Joniškis',
                'short_code' => 'jo',
            ],
            [
                'id'         => 24,
                'name'       => 'Jurbarkas',
                'short_code' => 'jr',
            ],
            [
                'id'         => 25,
                'name'       => 'Kaišiadorys',
                'short_code' => 'ka',
            ],
            [
                'id'         => 26,
                'name'       => 'Kalvarija',
                'short_code' => 'kl',
            ],
            [
                'id'         => 27,
                'name'       => 'Kaunas',
                'short_code' => 'kn',
            ],
            [
                'id'         => 28,
                'name'       => 'Kavarskas',
                'short_code' => 'kv',
            ],
            [
                'id'         => 29,
                'name'       => 'Kazlų Rūda',
                'short_code' => 'kr',
            ],
            [
                'id'         => 30,
                'name'       => 'Kėdainiai',
                'short_code' => 'kd',
            ],
            [
                'id'         => 31,
                'name'       => 'Kelmė',
                'short_code' => 'ke',
            ],
            [
                'id'         => 32,
                'name'       => 'Kybartai',
                'short_code' => 'ky',
            ],
            [
                'id'         => 33,
                'name'       => 'Klaipėda',
                'short_code' => 'kp',
            ],
            [
                'id'         => 34,
                'name'       => 'Kretinga',
                'short_code' => 'kr',
            ],
            [
                'id'         => 35,
                'name'       => 'Kudirkos Naumiestis',
                'short_code' => 'km',
            ],
            [
                'id'         => 36,
                'name'       => 'Kupiškis',
                'short_code' => 'ku',
            ],
            [
                'id'         => 37,
                'name'       => 'Kuršėnai',
                'short_code' => 'ku',
            ],
            [
                'id'         => 38,
                'name'       => 'Lazdijai',
                'short_code' => 'la',
            ],
            [
                'id'         => 39,
                'name'       => 'Lentvaris',
                'short_code' => 'le',
            ],
            [
                'id'         => 40,
                'name'       => 'Linkuva',
                'short_code' => 'li',
            ],
            [
                'id'         => 41,
                'name'       => 'Marijampolė',
                'short_code' => 'ma',
            ],
            [
                'id'         => 42,
                'name'       => 'Mažeikiai',
                'short_code' => 'mž',
            ],
            [
                'id'         => 43,
                'name'       => 'Molėtai',
                'short_code' => 'mo',
            ],
            [
                'id'         => 44,
                'name'       => 'Naujoji Akmenė',
                'short_code' => 'na',
            ],
            [
                'id'         => 45,
                'name'       => 'Nemenčinė',
                'short_code' => 'ne',
            ],
            [
                'id'         => 46,
                'name'       => 'Neringa',
                'short_code' => 'nr',
            ],
            [
                'id'         => 47,
                'name'       => 'Obeliai',
                'short_code' => 'ob',
            ],
            [
                'id'         => 48,
                'name'       => 'Pabradė',
                'short_code' => 'pb',
            ],
            [
                'id'         => 49,
                'name'       => 'Pagėgiai',
                'short_code' => 'pg',
            ],
            [
                'id'         => 50,
                'name'       => 'Pakruojis',
                'short_code' => 'pk',
            ],
            [
                'id'         => 51,
                'name'       => 'Palanga',
                'short_code' => 'pl',
            ],
            [
                'id'         => 52,
                'name'       => 'Pandėlys',
                'short_code' => 'pn',
            ],
            [
                'id'         => 53,
                'name'       => 'Panemunė',
                'short_code' => 'pa',
            ],
            [
                'id'         => 54,
                'name'       => 'Panevėžys',
                'short_code' => 'pž',
            ],
            [
                'id'         => 55,
                'name'       => 'Pasvalys',
                'short_code' => 'ps',
            ],
            [
                'id'         => 56,
                'name'       => 'Plungė',
                'short_code' => 'pu',
            ],
            [
                'id'         => 57,
                'name'       => 'Priekulė',
                'short_code' => 'pr',
            ],
            [
                'id'         => 58,
                'name'       => 'Prienai',
                'short_code' => 'pi',
            ],
            [
                'id'         => 59,
                'name'       => 'Radviliškis',
                'short_code' => 'rd',
            ],
            [
                'id'         => 60,
                'name'       => 'Ramygala',
                'short_code' => 'rm',
            ],
            [
                'id'         => 61,
                'name'       => 'Raseiniai',
                'short_code' => 'ra',
            ],
            [
                'id'         => 62,
                'name'       => 'Rietavas',
                'short_code' => 'ri',
            ],
            [
                'id'         => 63,
                'name'       => 'Rokiškis',
                'short_code' => 'ro',
            ],
            [
                'id'         => 64,
                'name'       => 'Rūdiškės',
                'short_code' => 'rū',
            ],
            [
                'id'         => 65,
                'name'       => 'Salantai',
                'short_code' => 'sl',
            ],
            [
                'id'         => 66,
                'name'       => 'Seda',
                'short_code' => 'se',
            ],
            [
                'id'         => 67,
                'name'       => 'Simnas',
                'short_code' => 'si',
            ],
            [
                'id'         => 68,
                'name'       => 'Skaudvilė',
                'short_code' => 'sd',
            ],
            [
                'id'         => 69,
                'name'       => 'Skuodas',
                'short_code' => 'sk',
            ],
            [
                'id'         => 70,
                'name'       => 'Smalininkai',
                'short_code' => 'sm',
            ],
            [
                'id'         => 71,
                'name'       => 'Subačius',
                'short_code' => 'su',
            ],
            [
                'id'         => 72,
                'name'       => 'Šakiai',
                'short_code' => 'šk',
            ],
            [
                'id'         => 73,
                'name'       => 'Šalčininkai',
                'short_code' => 'šč',
            ],
            [
                'id'         => 74,
                'name'       => 'Šeduva',
                'short_code' => 'še',
            ],
            [
                'id'         => 75,
                'name'       => 'Šiauliai',
                'short_code' => 'šl',
            ],
            [
                'id'         => 76,
                'name'       => 'Šilalė',
                'short_code' => 'ši',
            ],
            [
                'id'         => 77,
                'name'       => 'Šilutė',
                'short_code' => 'šu',
            ],
            [
                'id'         => 78,
                'name'       => 'Širvintos',
                'short_code' => 'šr',
            ],
            [
                'id'         => 79,
                'name'       => 'Švenčionėliai',
                'short_code' => 'šė',
            ],
            [
                'id'         => 80,
                'name'       => 'Švenčionys',
                'short_code' => 'šv',
            ],
            [
                'id'         => 81,
                'name'       => 'Tauragė',
                'short_code' => 'tr',
            ],
            [
                'id'         => 82,
                'name'       => 'Telšiai',
                'short_code' => 'tl',
            ],
            [
                'id'         => 83,
                'name'       => 'Tytuvėnai',
                'short_code' => 'tt',
            ],
            [
                'id'         => 84,
                'name'       => 'Trakai',
                'short_code' => 'tk',
            ],
            [
                'id'         => 85,
                'name'       => 'Troškūnai',
                'short_code' => 'to',
            ],
            [
                'id'         => 86,
                'name'       => 'Ukmergė',
                'short_code' => 'uk',
            ],
            [
                'id'         => 87,
                'name'       => 'Utena',
                'short_code' => 'ut',
            ],
            [
                'id'         => 88,
                'name'       => 'Užventis',
                'short_code' => 'už',
            ],
            [
                'id'         => 89,
                'name'       => 'Vabalninkas',
                'short_code' => 'va',
            ],
            [
                'id'         => 90,
                'name'       => 'Varėna',
                'short_code' => 'vr',
            ],
            [
                'id'         => 91,
                'name'       => 'Varniai',
                'short_code' => 'vn',
            ],
            [
                'id'         => 92,
                'name'       => 'Veisiejai',
                'short_code' => 've',
            ],
            [
                'id'         => 93,
                'name'       => 'Venta',
                'short_code' => 'vt',
            ],
            [
                'id'         => 94,
                'name'       => 'Viekšniai',
                'short_code' => 'vi',
            ],
            [
                'id'         => 95,
                'name'       => 'Vievis',
                'short_code' => 'vs',
            ],
            [
                'id'         => 96,
                'name'       => 'Vilkaviškis',
                'short_code' => 'vlk',
            ],
            [
                'id'         => 97,
                'name'       => 'Vilkija',
                'short_code' => 'vlk',
            ],
            [
                'id'         => 98,
                'name'       => 'Vilnius',
                'short_code' => 'vln',
            ],
            [
                'id'         => 99,
                'name'       => 'Virbalis',
                'short_code' => 'vir',
            ],
            [
                'id'         => 100,
                'name'       => 'Visaginas',
                'short_code' => 'vis',
            ],
            [
                'id'         => 101,
                'name'       => 'Zarasai',
                'short_code' => 'za',
            ],
            [
                'id'         => 102,
                'name'       => 'Žagarė',
                'short_code' => 'žg',
            ],
            [
                'id'         => 103,
                'name'       => 'Žiežmariai',
                'short_code' => 'ži',
            ],
        ));
    }
}
