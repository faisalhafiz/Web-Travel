<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            [
                'id' => '1',
                'name' => 'Mobil',
            ],
            [
                'id' => '2',
                'name' => 'Wisata Bandung',
            ],
            [
                'id' => '3',
                'name' => 'Wisata Banyuwangi',
            ],
            [
                'id' => '4',
                'name' => 'Wisata Jogjakarta',
            ],
            [
                'id' => '5',
                'name' => 'Wisata Malang',
            ],
            [
                'id' => '6',
                'name' => 'Wisata Pacitan',
            ],
            [
                'id' => '7',
                'name' => 'Wisata Semarang',
            ],
        ]);
    }
}
