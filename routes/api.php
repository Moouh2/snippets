<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');



Route::get('/snippets', [SnippetController::class, 'index']);
Route::post('/snippets', [SnippetController::class, 'store']);

});