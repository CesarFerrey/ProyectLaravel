<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;


Route::get('/', function () {
    return view('layouts.app');
});
Route::get('/', [TicketController::class, 'index']);


