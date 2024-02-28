<?php

use App\Http\Controllers\Admin\ConsultaController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UsuarioController;
use Illuminate\Support\Facades\Route;


$routesNotGenerate = ['create', 'edit','show'];
// Route::resource("usuarios",UsuarioController::class)->names('admin.usuarios')->except($routesNotGenerate); 
Route::resource("users",UserController::class)->names('admin.users')->except($routesNotGenerate); 
Route::resource("roles",RoleController::class)->names('admin.roles')->except($routesNotGenerate); 
Route::resource("usuarios",UsuarioController::class)->names('admin.usuarios')->except($routesNotGenerate); 
Route::resource("consultas",ConsultaController::class)->names('admin.consultas')->except($routesNotGenerate); 