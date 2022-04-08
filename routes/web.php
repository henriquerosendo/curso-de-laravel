<?php

use Illuminate\Support\Facades\Route;

// importando controllers:
use App\Http\Controllers\EventController;



Route::get('/', [EventController::class, 'index']);

Route::get('/events/create', [EventController::class, 'create']);


Route::get('/newBlade', function() {
    return view('new');
});

Route::get('/newBlade2', function() {
    return view ('new2');
});

Route::get('/produtos', function(){

    $busca = request('search');

    return view ('products',['busca' => $busca]);
});

Route::get('/products_teste/{id?}', function($id = null){
    return view ('product', ['id' => $id]);
});