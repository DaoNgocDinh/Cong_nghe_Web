<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\IssueController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('issues', IssueController::class);
Route::resource('computers', ComputerController::class);