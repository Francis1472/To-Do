<?php

use App\Http\Controllers\TodolistController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/home', function()
{
    return view('home');
});
Route::get('/home', [TodolistController::class, 'index'])->name('index');
Route::post('/home', [TodolistController::class, 'store'])->name('store');
Route::delete('/home/{todolist:id}', [TodolistController::class, 'destroy'])->name('destroy');
Route::get('/', function()
{
    return view('landing');
});
Route::get('/landing', function()
{
    return view('landing');
});