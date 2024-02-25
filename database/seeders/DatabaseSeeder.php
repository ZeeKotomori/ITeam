<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void {
        DB::table('user')->insert([
            'nama' => 'John Doe',
            'email' => 'john@example.com',
            'password' => bcrypt('12345678'),
            'no_telp' => '088707860072',
            'role' => 'user',
        ]);

        DB::table('user')->insert([
            'nama' => 'John Doe 2',
            'email' => 'john2@example.com',
            'password' => bcrypt('12345678'),
            'no_telp' => '088707860073',
            'role' => 'user',
        ]);

        DB::table('user')->insert([
            'nama' => 'John Doe 3',
            'email' => 'john3@example.com',
            'password' => bcrypt('12345678'),
            'no_telp' => '088707860074',
            'role' => 'admin',
        ]);
    }
}
