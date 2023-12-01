<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Music;
use App\Models\Discovery;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // default buat akun admin
        User::create([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => true,
            'date_of_birth' => '2000-01-01'
        ]);

        // default buat akun user
        User::create([
            'username' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => false,
            'date_of_birth' => '2000-01-01'
        ]);

        //Default untuk discovery
        Discovery::create([
            'disc_category' => 'none',
        ]);

        // Music temp
        Music::factory()->count(20)->create();
    }
}
