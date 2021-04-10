<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;

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

//route home (index do site)
Route::get('/',function() {

    return view('home');

});

//Route para a pagina a nossa história
Route::get('/historia',function(){

    return view('historia');
});

//Route para a pagina do palmarés

Route::get('/historia/palmares',function(){

    return view('palmares');
});

//Route para a pagina do pavilhoes

Route::get('/pavilhoes ',function(){

    return view('pavilhoes');
});

//Route para a pagina dos patrocinios
Route::get('/patrocinios ',function(){

    return view('patrocinios');
});

//Route para a pagina dos comunicados
Route::get('/comunicados ',function(){

    return view('comunicados');
});



