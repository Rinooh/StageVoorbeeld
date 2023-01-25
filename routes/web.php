<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('/kalender', function () {
    return view('pagina/Kalender/calendar');
});

Route::post('/nieuweLesAanmaken', [App\Http\Controllers\lesAanmakenController::class, 'lesAanmaken']);

Route::get('/panel', function (){
    return view('pagina/panel');
});

Route::get('ziekMelden', function () {
    return view('pagina/ziekMelden');
});
Route::get('/lesAanmaken', function () {
    return view('pagina/lesAanmaken');
});
Route::get('/rijles/{id}', [App\Http\Controllers\lesAanmakenController::class, 'lesOphalen'])->name('pagina/lesAanpassen');
Route::post('/lesAanpassen', [App\Http\Controllers\lesAanmakenController::class, 'lesAanpassen']);
Route::post('/ziekMelding', [App\Http\Controllers\ziekenController::class, 'ziekMelden']);
Auth::routes();