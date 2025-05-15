<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrmController;

Route::get('ormconsultas',[OrmController::class,'consultas']);

Route::get('/', function () {
    return view('welcome');
});
