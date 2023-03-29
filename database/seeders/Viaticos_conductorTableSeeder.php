<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Viaticos_Conductor;

class Viaticos_conductorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $viaticos_conductor =[
            [
                'nombre' =>             'NombreGenerico1',
                'costo' =>              '500000',
                'fecha' =>              '2003-02-13',  
                'evidencia' =>          'NULL',
                'tipo' =>               'Tipo1',
                'id_registro_viaje' =>  '1'
            ],
            [
                'nombre' =>             'NombreGenerico2',
                'costo' =>              '502000',
                'fecha' =>              '2013-03-28',  
                'evidencia' =>          'NULL',
                'tipo' =>               'Tipo2',
                'id_registro_viaje' =>  '2'
            ],
            [
                'nombre' =>             'NombreGenerico3',
                'costo' =>              '1250000',
                'fecha' =>              '2003-03-27',  
                'evidencia' =>          'NULL',
                'tipo' =>               'Tipo3',
                'id_registro_viaje' =>  '3'
            ]
        ];
        foreach($viaticos_conductor as $viatico_conductor){
            Viaticos_Conductor::create([
                'nombre' =>             $viatico_conductor['nombre'],
                'costo' =>              $viatico_conductor['costo'],
                'fecha' =>              $viatico_conductor['fecha'],  
                'evidencia' =>          $viatico_conductor['evidencia'],
                'tipo' =>               $viatico_conductor['tipo'],
                'id_registro_viaje' =>  $viatico_conductor['id_registro_viaje']
            ]);
        }
    }
}
