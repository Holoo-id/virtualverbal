<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('v_role')->insert([
            [
            'id' => 1,
            'name' => 'Not Verified User',
            'created_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'name' => 'User',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'name' => 'Writer',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 4,
                'name' => 'Admin',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 5,
                'name' => 'Super Admin',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
