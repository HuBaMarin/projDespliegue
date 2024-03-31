<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Trabajador;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Cliente::factory(10)->create();

        Cliente::factory()->create([
            'nombre' => 'Test Cliente',
            'email' => 'test@example.com',
        ]);

        // cliente, trabajador
        Cliente::factory()->count(10)->create();
        Trabajador::factory()->count(5)->create();
    }
}
