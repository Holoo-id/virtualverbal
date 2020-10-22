<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'SUPERADMIN',
            'email' => 'superadmin@viverb.com',
            'password' => Hash::make('asdf1234'),
            ]);

            
    }
}
