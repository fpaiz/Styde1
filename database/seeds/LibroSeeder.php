<?php

use App\Libro;  // esta es la definicion de la clase (Modelo) Libro

use Illuminate\Database\Seeder;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


DB::table('libros')->truncate(); // esto es para vaciar la tabla antes y
                                             // que no de error por duplicados
   
     
        // estos ejemplos son con el constructor de "queries" de Laravel  -- funcionan Ok
/*
        DB::table('libros')->insert([
            'titulo' => 'Poema de Gilgamesh',
            'autor' => 'Anonimo',
            'genero' => 'Epico',            
            ]);

            DB::table('libros')->insert([
                'titulo' => 'Libro de Job',
                'autor' => 'Anonimo',
                'genero' => 'Religion y Espiritualidad',            
                ]);
    
                DB::table('libros')->insert([
                    'titulo' => 'Las mil y una noches',
                    'autor' => 'Anonimo',
                    'genero' => 'Historias y narraciones',            
                    ]);
  */              


        // estos ejemplos son con el ORM Eloquent, usando el modelo app/Libro.php
        //                                        (llamada al principio del archivo)  
        Libro::create([
            'titulo' => 'Poema de Gilgamesh',
        ]);
    
        Libro::create([
            'titulo' => 'Libro de Job',
        ]);
    
        Libro::create([
            'titulo' => 'Las mil y una noches',
        ]);
    
        Libro::create([
            'titulo' => 'Don Quijote de la Mancha',
        ]);
    
        Libro::create([
            'titulo' => 'Medea',
        ]);
    
        Libro::create([
            'titulo' => 'Iliada',
        ]);

        Libro::create([
            'titulo' => 'Odisea',
        ]);

// este codigo es para que el "factory" inserte los datos fake en la Db..
        factory(Libro::class)->times(17)->create();


    }
}
