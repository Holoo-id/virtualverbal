<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FormatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('v_format_content')->insert([
            [
                'name' => 'Berita',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Artikel',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
