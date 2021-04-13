<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirecteurController;

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

Route::get('/', function () {
    return view('index');
});
Route::get('inscription', function () {
    return view('inscription');
});
Route::get('login', function () {
    return view('connexion');
});
Route::get('dashbord', function () {
    return view('directeur-dashbord');
});
Route::get('student', function () {
    return view('AddStudent');
});
Route::get('matiere', function () {
    return view('matiere');
});
Route::get('note', function () {
    return view('note');
});
Route::get('studentdashbord', function () {
    return view('student-profile');
});





Route::post('create',[DirecteurController::class,'create'])->name('create');
Route::post('matiere',[DirecteurController::class,'addMatiere'])->name('addMatiere');
Route::post('connexion',[DirecteurController::class,'connexion'])->name('connexion');
Route::get('dashbord',[DirecteurController::class,'profview']);
Route::get('deleteprof/{id}',[DirecteurController::class,'deleteprof']);
Route::get('student',[DirecteurController::class,'studentview']);
Route::get('note',[DirecteurController::class,'noteManager']);
Route::get('deletestudent/{id}',[DirecteurController::class,'deletestudent']);
Route::post('addNote',[DirecteurController::class,'addNote'])->name('addNote');

