<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    
    protected $fillable = ['titulo'];

    public function lectores()
    {
        return $this->hasMany(Lectores::class);  // aqui Lectores es el nombre del modelo
    }
    
}
