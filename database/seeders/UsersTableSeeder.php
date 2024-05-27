<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin1',
            'email' => 'admin1@email.com',
            'password' => bcrypt('admin1'),
            'is_admin' => true,
        ]);
        DB::table('users')->insert([
            'name' => 'admin1',
            'email' => 'admin2@email.com',
            'password' => bcrypt('admin2'),
            'is_admin' => true,
        ]);
    }
}
