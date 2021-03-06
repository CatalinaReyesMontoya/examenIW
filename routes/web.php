<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});*/

//Route::resource('contactos', ContactoController::class);

Route::get('/', function(){
    return view('/contacto.index');
});

Route::get('/create', function(){
    return view('/contacto.create');
});

Route::get('/edit', function(){
    return view('/contacto.edit');
});

