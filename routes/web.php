<?php

use App\Http\Controllers\WelcomeController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index']);