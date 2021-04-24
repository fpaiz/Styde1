<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lectores extends Model
{
    
    
    public static function findByEmail($email)
    {
        return static::where(compact('email'))->first();
    }

    public function titulo()  // titulo + _id = titulo_id
    {
       // return $this->belongsTo(Libro::class);  // cuando coinciden los nombres se deja asi
       return $this->belongsTo(Libro::class, 'libro_id');  // cuando NO coinciden los nombres, se agregra como argumento
       }    

    public function isAdmin()
    {
        return $this->email === 'ff@hotmail.com';
    }



}
