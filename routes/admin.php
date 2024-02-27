<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UsuarioController;
use Illuminate\Support\Facades\Route;


$routesNotGenerate = ['create', 'edit','show'];
Route::resource("usuarios",UsuarioController::class)->names('admin.usuarios')->except($routesNotGenerate); 
Route::resource("users",UserController::class)->names('admin.users')->except($routesNotGenerate); 