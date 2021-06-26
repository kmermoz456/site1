<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\SujetController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;

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

Route::get("/",[ViewController::class,"home"]);
Route::get('/services',[ViewController::class,"service"]);
Route::get("/contact",[ViewController::class,"contact"]);
Route::get("sujet/{nivau}",[QuizController::class,"sujet"])->name('sujet');
Route::get("/compo/{title}-{ue}-{id}",[QuizController::class,"compo"])->name('compo')->middleware('auth');
Route::post("/compo/{title}-{ue}-{id}",[QuizController::class,"compo"])->name('check');
Route::get('/admin',[AdminController::class,'admin'])->name('admin')->middleware('auth');
Route::get('/admin/{action}',[AdminController::class,'action'])->name('action');
Route::post('/admin/add-sujet/',[SujetController::class,'add_sujet'])->name('add_sujet');
Route::post('/admin/add-quest/',[SujetController::class,'add_quest'])->name('add_quest');
Route::post('/admin/add-prop/',[SujetController::class,'add_prop'])->name('prop');
Route::get('/non-abonner',[ViewController::class,'non_abonner'])->name('non.abonner');
Route::get('/dashbord/{action}',[UserController::class,'user'])->name('user')->middleware('auth');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';






