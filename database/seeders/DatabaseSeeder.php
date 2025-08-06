<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Instansi;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a default instansi first
        $instansi = Instansi::create([
            'nama_instansi' => 'Default Instansi'
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
            'username' => 'testuser',
            'role' => 'client',
            'instansi_id' => $instansi->id,
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@lca.com',
            'password' => bcrypt('password'),
            'username' => 'admin',
            'role' => 'admin',
        ]);
    }
}
