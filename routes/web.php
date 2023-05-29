<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Inicio;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/docente', function () {
    return view('docentes.docentes');
});

Route::get('/estudiante', function () {
    return view('estudiantes.estudiantes');
});

Route::get('/facultad', function () {
    return view('facultades.facultades');
});

Route::get('/programa', function () {
    return view('programas.programas');
});

Route::get('/materia', function () {
    return view('materias.materia');
});

Route::get('/prueba/{parametro}', function ($parametro) {
    return " este es un parametro: {$parametro}";
});

Route::get('/prueba2/{parametro}', function ($parametro) {
    return " este es un parametro: {$parametro}";
})->where('parametro','[0-9]+');

Route::get('/prueba3/{parametro}', function ($parametro) {
    return " este es un parametro: {$parametro}";
})->where('parametro','[a-b]+');

Route::get('/prueba4/{parametro}', function ($parametro=null) {
    return " este es un parametro: {$parametro}";
});

Route::get('/prueba5/{parametro}/{parametro2?}', 
    function ($parametro1,$parametro2=null) {
    return " este es un parametro: {$parametro1},$parametro2";
});
##---------Actividad------------------------
Route::get('/rutauno', function () {
    return view('rutaUno');
});
Route::get('/rutados', function () {
    return view('Directorio.rutados');
});

Route::get('/rutatres', function () {
    return view('Directorio2.Directorio.rutaTres');
});
Route::get('/ruta4/{parametro?}', function ($parametro) {
    return " este es un parametro obligatorio: {$parametro}";
});
Route::get('/ruta5/{parametro1?}/{$parametro2?}', 
    function ($parametro1, $parametro2) {
    return " dos parametros obligatorios: {$parametro1},{$parametro2}";
});
Route::get('/ruta6/{parametro1}/{parametro2?}', 
    function ($parametro1,$parametro2=null) {
    return " este es un parametro: {$parametro1},$parametro2";
});
Route::get('/ruta6/{parametro1}/{parametro2?}', 
    function ($parametro1,$parametro2=null) {
    return " este es un parametro: $parametro1,$parametro2";
});
Route::get('/ruta7/{parametro}', function ($parametro) {
    return " este es un parametro con palabra que empiece en hzp: $parametro";
})->where('parametro',"^[hzp]\w*");

Route::get('/ruta8/{parametro}', function ($parametro) {
    return " este es un parametro: {$parametro}";
})->where('parametro','[57]');

Route::get('/rutaej',[Inicio::class, 'index']);

Route::get('/ej', function(){
    return view('example', array(
        'nombre'=>'Valeria',
        'edad' => '22',
        'telefono' => '1121893823',
    ));
});
#-----------------------Aplicación basica con laravel--------------------------------------
Route::get('/principal', function(){
    return view('principal');
    });

Route::get('/manga', function(){
    return view('manga');
    });

Route::get('/peliseries', function(){
    return view('peliseries');
    });

Route::get('/juegos', function(){
    return view('juegos');
    });

Route::get('/recomendaciones', function(){
    return view('recomendaciones');
    });

Route::get('/infomanga', function(){
    return view('infoviews.infomanga');
    });

Route::get('/infopeliseries', function(){
    return view('infoviews.infopeliseries');
    });

Route::get('/infojuegos', function(){
    return view('infoviews/infojuegos');
    });

Route::get('/inforecomendaciones', function(){
    return view('infoviews/inforecomendaciones');
    });