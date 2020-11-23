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
                'email_verified_at' => Carbon::now(),
                'image' => '/storage/images/users/18.jpg',
                'activated' => true,
                'role_id' => 7,
                'created_at' => Carbon::now()
                ],
                [
                'name' => 'A certain User',
                'email' => 'deletedwriter@viverb.com',
                'password' => Hash::make(' '),
                'email_verified_at' => Carbon::now(),
                'image' => '/storage/images/users/00.jpg',
                'activated' => true,
                'role_id' => 7,
                'created_at' => Carbon::now()
                ]
            ]);

            
    }
}
