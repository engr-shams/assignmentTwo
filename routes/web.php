<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/my-profile/{id}', [ProfileController::class, 'index'])->name('profile');

Route::get('/', function () {    return view('welcome');});
