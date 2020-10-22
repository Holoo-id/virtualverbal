<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('v_category_contant')->insert(
            [
                'name' => 'Berita'
            ],
            [
                'name' => 'Artikel'
            ],
            [
                'name' => 'E-Sports'
            ],
            [
                'name' => 'Videos'
            ],
            [
                'name' => 'Apps'
            ],
            [
                'name' => 'Database'
            ]
        );
    }
}
