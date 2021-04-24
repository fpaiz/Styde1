<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'users',
            'professions'
        ]);

        // $this->call(UsersTableSeeder::class);
        $this->call(ProfessionSeeder::class);
        // $this->call(UserSeeder::class);  // primeros ejemplos
        $this->call(UserSeederB::class);   // ejemplos mas avanzados     
    
        $this->call(LibroSeeder::class);   // mis propios ejemplos
        $this->call(LectorSeeder::class);   // mis propios ejemplos
        $this->call(HouseSeeder::class);   // mis propios ejemplos

    }

    protected function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }

}
