<?php

use Illuminate\Support\Facades\Route;
use sjaswinder82\MyPackage\Http\Controllers\WelcomeController;

Route::get('/package/welcome', [WelcomeController::class, 'index']);
