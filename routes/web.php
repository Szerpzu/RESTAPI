<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PeopleController;

Route::get('/people', [PeopleController::class, 'index']);

Route::get('/people/{id}', [PeopleController::class, 'show']);

Route::put('/people/{id}', [PeopleController::class, 'update']);

Route::delete('/people/{id}', [PeopleController::class, 'destroy']);

Route::post('/people', [PeopleController::class, 'store']);