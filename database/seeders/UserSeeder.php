<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'User 1',
            'email' => 'user1@mail.com',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'User 2',
            'email' => 'user2@mail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
