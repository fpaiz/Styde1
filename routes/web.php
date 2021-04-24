<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Home';
 });
 
 /* estas son rutas que muestran mensajes de texto */
 Route::get('/usuarios0', function () {
     return 'Usuarios';
 });
 
 Route::get('/usuarios/nuevo', function () {
     return 'Crear nuevo usuario';
 });
 
 Route::get('/usuarios/{id}', function ($id) {
     return "Mostrando detalle del usuario: {$id}";
 });
 
 Route::get('/saludo/{name}/{nickname?}', function ($name, $nickname = null) {
     if ($nickname) {
         return "Bienvenido {$name}, tu apodo es {$nickname}";
     } else {
         return "Bienvenido {$name}, no tienes apodo";
     }
 });

/* FIn de parte de rutas que muestran mensajes de texto */


 /* estas son rutas con controladores */
 
 Route::get('/usuariosc', 'UserController@index');
 
 Route::get('/usuariosc/{id}', 'UserController@show')
     ->where('id', '[0-9]+');
 
 Route::get('/usuariosc/nuevo', 'UserController@create');
 
  Route::get('/saludoc/{name}/{nickname?}', 'WelcomeUserController'); 

/* FIn de parte de rutas con controladores */


 /* Aqui uso un controlador con una view */
 
 Route::get('/about2', 'UserController@usar_vista');






/* estas son rutas con views */


// en el ejemplo de abajo, la ruta '/about' llama a la vista  'about' --> el archivo de esta vista tiene 
// que estar creado en la carpeta resources/views como about.blade.php

Route::get('/about', function () {
    return view('about');
});


// otra, pero esta es de la ruta "usuarios" a el metodo "index" en el controller "UserController"
Route::get('/usuarios', 'UserController@index');