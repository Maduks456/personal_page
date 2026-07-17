<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\TagController;

Route::get('/', [BaseController::class, 'home']);
Route::get('/about', [BaseController::class, 'about']);
Route::get('/hall-of-fame', [ProjectController::class, 'HallOfFame']);

Route::post('/logout', [SessionController::class, 'destroy']);
Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);


Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/projects/create', [ProjectController::class, 'create'])->middleware('auth');
Route::post('/projects', [ProjectController::class, 'store'])->middleware('auth');
Route::delete('/projects/{project}/delete', [ProjectController::class, 'destroy'])->middleware('auth');
Route::get('/projects/{project}', [ProjectController::class, 'show']);
Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->middleware('auth');
Route::put('/projects/{project}', [ProjectController::class, 'update'])->middleware('auth');

Route::get('/tags', [TagController::class, 'index']);
Route::get('/tags/create', [TagController::class, 'create'])->middleware('auth');
Route::post('/tags', [TagController::class, 'store'])->middleware('auth');
Route::delete('/tags/{tag}/delete', [TagController::class, 'destroy'])->middleware('auth');
Route::get('/tags/{tag}', [TagController::class, 'show']);
Route::get('/tags/{tag}/edit', [TagController::class, 'edit'])->middleware('auth');
Route::put('/tags/{tag}', [TagController::class, 'update'])->middleware('auth');