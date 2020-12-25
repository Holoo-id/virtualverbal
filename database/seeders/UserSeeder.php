<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('users')->insert([
                [
                'name' => 'SUPERADMIN',
                'email' => 'superadmin@viverb.com',
                'password' => Hash::make('asdf1234'),
                'provider_id' => null,
                'detail_id' => 1,
                'email_verified_at' => Carbon::now(),
                'image' => 'storage/images/users/default01.jpg',
                'activated' => true,
                'role_id' => 7,
                'created_at' => Carbon::now()
                ],
                [
                'name' => 'A certain User',
                'email' => 'deletedwriter@viverb.com',
                'password' => Hash::make(' '),
                'provider_id' => null,
                'detail_id' => 2,
                'email_verified_at' => Carbon::now(),
                'image' => 'storage/images/users/default00.jpg',
                'activated' => true,
                'role_id' => 7,
                'created_at' => Carbon::now()
                ]
            ]);

            
    }
}
