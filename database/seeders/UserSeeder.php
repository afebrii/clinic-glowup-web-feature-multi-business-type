<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Owner',
            'email' => 'owner@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'owner',
            'phone' => '081234567890',
            'is_active' => true,
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'phone' => '081234567891',
            'is_active' => true,
        ]);

        User::create([
            'name' => 'Maya',
            'email' => 'maya@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'beautician',
            'phone' => '081234567892',
            'is_active' => true,
        ]);

        User::create([
            'name' => 'Lisa',
            'email' => 'lisa@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'beautician',
            'phone' => '081234567893',
            'is_active' => true,
        ]);

        User::create([
            'name' => 'Dr. Sarah',
            'email' => 'sarah@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'beautician',
            'phone' => '081234567894',
            'is_active' => true,
        ]);
    }
}
