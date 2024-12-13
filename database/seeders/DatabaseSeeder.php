<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Http\Controllers\Tipo_documentoController;
use App\Models\Tipo_Documento;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CargosTableSeeder::class);
        $this->call(DepartamentosTableSeeder::class);
        $this->call(Tipo_cargasTableSeeder::class);
        $this->call(Tipo_documentosTableSeeder::class);  
        $this->call(VehiculosTableSeeder::class);      
    }
}
