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
                'name' => 'Kontributor',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'name' => 'Penulis',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 4,
                'name' => 'Editor',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 5,
                'name' => 'Redaksi',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 6,
                'name' => 'Administor',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
