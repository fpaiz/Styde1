<?php

use App\User;  // esta es la definicion de la clase (Modelo) User

use Illuminate\Database\Seeder;

class UserSeederB extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        
// 1- esta manera es insegura (SQL normal)
// $professions = DB::select('SELECT id FROM professions WHERE title = "Desarrollador back-end"');

// 2- manera mas segura 1 (SQL normal)      
 // $professions = DB::select('SELECT id FROM professions WHERE title = ?', ['Desarrollador back-end']);

// 3- Con el constructor de consultas SQL de Laravel
//$professions = DB::table('professions')->select('id')->take(1)->get(); 

// 3- Con el constructor de consultas SQL de Laravel, pero obtinendo solo el primer resultado

$professions = DB::table('professions')->select('id')->first(); 


 // dd($professions);  // "dd" sirve parecido a un "echo" creo..
                       // (aqui imprime el contenido de la array $professions)
                       // dd es muy buena para pruebas, pero DETIENE LA EJECUCION DEL SCRIPT

  
        DB::table('users')->insert([
            'name' => 'Duilio Palacios2',
            'email' => 'duilio@styde.net',
            'password' => bcrypt('laravel'),
            
             //'profession_id' => $professions[0]->id  // con SQL plano      
             // 'profession_id' => $professions->first()->id,  // con SQL de Laravel (3)      
               'profession_id' => $professions->id  // con SQL de Laravel (4)                  
               ]);
    
     factory (User::class, 14)->create();
    
    }
}