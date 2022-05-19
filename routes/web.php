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

// Route::get('/', function () {
//     return view('layouts.app');
// });

Route::get('/', function () {
    $fumetti = config('comics');
    return view('homepage', ["comics" => $fumetti ]);
});

Route::get('detail/{id}', function($id) {
    $fumetti = config('comics');
    return view('partials.detail', ["comic" => $fumetti[$id]]);
});
