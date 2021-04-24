<?php

use App\Lectores;  // esta es la definicion de la clase (Modelo) Lector
use Illuminate\Database\Seeder;

class LectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('lectores')->truncate(); // esto es para vaciar la tabla antes y
        // que no de error por duplicados



// estos ejemplos son con el constructor de "queries" de Laravel -- funcionan Ok
/*        DB::table('lectores')->insert([
            'name' => 'Fernando Paiz 1',
            'email' => 'ff@hotmail.com',
            'password' => bcrypt('laravel'),
        ]);
        
        DB::table('lectores')->insert([
            'name' => 'Fernando Paiz 2',
            'email' => 'ff2@hotmail.com',
            'password' => bcrypt('laravel2'),
        ]);

        DB::table('lectores')->insert([
            'name' => 'Mayra Reyes',
            'email' => 'mr@hotmail.com',
            'password' => bcrypt('laravel3'),
        ]);


        DB::table('lectores')->insert([
            'name' => 'Sandra Bullock',
            'email' => 'sb@hotmail.com',
            'password' => bcrypt('laravel4'),
        
            'libro_id' => '3',
        
            ]);
*/


// estos ejemplos son con el ORM Eloquent, usando el modelo app/Lector.php
        //                                        (llamada al principio del archivo)  
        Lectores::create([
            'name' => 'Fernando Paiz 1',
            'email' => 'ff@hotmail.com',
            'password' => bcrypt('laravel'),
        ]);
        
        Lectores::create([
            'name' => 'Fernando Paiz 2',
            'email' => 'ff2@hotmail.com',
            'password' => bcrypt('laravel2'),
        ]);

        Lectores::create([
            'name' => 'Mayra Reyes',
            'email' => 'mr@hotmail.com',
            'password' => bcrypt('laravel3'),
        ]);


        Lectores::create([
            'name' => 'Sandra Bullock',
            'email' => 'sb@hotmail.com',
            'password' => bcrypt('laravel4'),
        
            'libro_id' => '3',
        
            ]);





    }
}
