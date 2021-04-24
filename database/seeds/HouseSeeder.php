<?php

use App\House;  // esta es la definicion de la clase (Modelo) House

use Illuminate\Database\Seeder;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('houses')->truncate(); // esto es para vaciar la tabla antes y
        // que no de error por duplicados



   // estos ejemplos son con el ORM Eloquent, usando el modelo app/House.php
        //                                        (llamada al principio del archivo)  
        House::create([
            'tipo' => 'Cabana',
        ]);
    
        House::create([
            'tipo' => 'Terraza de dos pisos',
        ]);
    
        House::create([
            'tipo' => 'bodega',
        ]);        
     
// este codigo es para que el "factory" inserte los datos fake en la Db..
factory(House::class)->times(8)->create();
        


    }
}
