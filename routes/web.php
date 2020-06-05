<?php

use App\Http\Controllers\portafolioControlador;

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





//VIEWS Retornan vistas de la carpeta views
Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');



 Route::resource('portafolio', 'portafolioControlador')->parameters(['portafolio' => 'proyecto']);


// Route::get('/portafolio', 'portafolioControlador@index')->name('portafolio.index');
// Route::get('/portafolio/agregar','portafolioControlador@create')->name('portafolio.create');

// Route::get('/portafolio/{proyecto}/editar','portafolioControlador@edit')->name('portafolio.edit');

// Route::patch('/portafolio/{proyecto}','portafolioControlador@update')->name('portafolio.update');
// Route::delete('/portafolio/{proyecto}', 'portafolioControlador@destroy')->name('portafolio.destroy');

// Route::post('/portafolio/agregar','portafolioControlador@store')->name('portafolio.store');
// Route::get('/portafolio/{proyecto}','portafolioControlador@show')->name('portafolio.show');


//Rutas POST
Route::post('contact','MensajesControlador@store');




Auth::routes(['register' => true]);


