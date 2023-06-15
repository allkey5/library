<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Role::factory()->create([
            'name' => 'Пользователь',
        ]);
        \App\Models\Role::factory()->create([
            'name' => 'Админ',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Ersultan',
            'last_name' => 'Alimov',
            'email' => 'test@example.com',
            'password' => bcrypt('123456'),
            'role_id' => 2,
            'role' => 'Admin',
        ]);
    }
}
