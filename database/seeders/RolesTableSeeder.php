<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('roles')->insert([
            ['name' =>'Admin', 'url' => '/admin'],
            ['name' =>'Coordinator', 'url' => '/coordinator'],
            ['name' =>'User', 'url' => '/user'],
        ]);
    }
}
?>