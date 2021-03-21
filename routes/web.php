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



