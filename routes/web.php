<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventDirectoreController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdminController::class, "index"])->name('home');
Route::post('/home/store', [AdminController::class, "store"])->name('home.store');


Route::get('/home/clients', [ClientController::class, "index"])->name('home.clients');
Route::get("/client/show/{client}", [ClientController::class, "show"])->name("client.show");


Route::get('/home/eventdirectors', [EventDirectoreController::class, "index"])->name('home.eventdirectors');
Route::get("/eventdirectore/show/{eventdirectore}", [EventDirectoreController::class, "show"])->name("eventdirectore.show");


Route::post('/home/event/store', [EventController::class, "store"])->name('event.home.store');
