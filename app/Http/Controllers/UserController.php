<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  // este clase la importe para que funcione 
                                   // esta parte: $users= DB::table('users');

class UserController extends Controller
{
    public function index()
    {
        
        // listado estatico de usuarios (parte vieja)
        /*$users = [
            'Joel',
            'Ellie',
            'Tess',
            'Tommy',
            'Bill',
            '<script>alert("Clicker")</script>'
        ];
*/

     // listado dinamico de usuarios
$users= DB::table('users')->get();




        $title = 'Listado de usuarios xyz';

        return view('users', compact('title', 'users'));
    }

    public function show($id)
    {
        return "Mostrando detalle del usuario: {$id}";
    }

    public function create()
    {
        return 'Crear nuevo usuario';
    }

    // aqui uso una VIEW en el controlador ..
    public function usar_vista()
    {
        return view('about');
    }




}