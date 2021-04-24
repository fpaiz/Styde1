<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLibrosIdToLectores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    
        Schema::table('lectores', function (Blueprint $table) {
            $table->unsignedInteger('libro_id')->nullable();
            $table->foreign('libro_id')->references('id')->on('libros');
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
            Schema::table('lectores', function (Blueprint $table) {
            $table->dropForeign(['libro_id']);
            $table->dropColumn('libro_id');
        });

    
    
    }
}
