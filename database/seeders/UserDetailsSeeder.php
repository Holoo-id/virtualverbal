<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('v_user_details')->insert([
            [
            'id' => 1,
            ],
            [
            'id' => 2,
            ],
        ]);
    }
}
