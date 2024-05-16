<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void {
        DB::table('users')->insert([
            'id' => Str::uuid()->toString(),
            'nama' => 'User',
            'email' => 'user@example.com',
            'password' => bcrypt('12345678'),
            'no_telp' => '088707860072',
            'role' => 'user',
            'email_verified_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'id' => Str::uuid()->toString(),
            'nama' => 'Deska',
            'email' => 'deska@example.com',
            'password' => bcrypt('12345678'),
            'no_telp' => '088707860074',
            'role' => 'admin',
            'email_verified_at' => Carbon::now(),
        ]);
    }
}
