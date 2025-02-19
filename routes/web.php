<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\court_typeController;
use App\Http\Controllers\courtController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/master', function(){
//     return view('master');
// });

// Route::get('/home', function(){
//     return view('home');
// });

// Route::get('/project', function(){
//     return view('project');
// });

// Route::get('/service', function(){
//     return view('service');
// });

Route::get('/court-type', [court_typeController::class, 'index']);
Route::get('/mcourt', [courtController::class, 'mcourt']);
Route::post('/court-type', [court_typeController::class, 'store']);

Route::resource('court', courtController::class);
Route::resource('court_type', court_typeController::class);