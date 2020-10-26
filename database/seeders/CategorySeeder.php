<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
        DB::table('v_category_content')->insert([
            [
                'name' => 'Berita',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Artikel',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'E-Sports',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Videos',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Apps',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Database',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
