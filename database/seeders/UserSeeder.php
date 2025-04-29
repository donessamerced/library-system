<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' =>'Admin',
            'email' =>'admin@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => '1',
        ]);
    }
}
?>