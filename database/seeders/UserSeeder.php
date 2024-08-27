<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Kelechi Obasi',
            'email' => 'favourobasi7@gmail.com',
            'email_verified_at' => null,
            'password' => Hash::make('12345678'),
            'remember_token' => null,
            'first_name' => 'Kelechi',
            'last_name' => 'Obasi',
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Asha Fortune',
            'email' => 'ashafortune@gmail.com',
            'email_verified_at' => null,
            'password' => Hash::make('12345678'),
            'remember_token' => null,
            'first_name' => 'Asha',
            'last_name' => 'Fortune',
        ]);
    }
}
