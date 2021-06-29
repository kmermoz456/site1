<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\MessageController;
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

Route::get("/",[ViewController::class,"home"]); #Accueil
Route::get('/services',[ViewController::class,"service"]); #Service
Route::get("/contact",[ViewController::class,"contact"]);  #Contact
Route::get("sujet/{nivau}",[QuizController::class,"sujet"])->name('sujet');#Liste des sujets sn1 sn2
Route::get("/compo/{title}-{ue}-{id}",[QuizController::class,"compo"])->name('compo')->middleware('auth');
Route::post("/compo/{title}-{ue}-{id}",[QuizController::class,"compo"])->name('check');
Route::get('/admin',[AdminController::class,'admin'])->name('admin')->middleware('auth');
Route::get('/admin/{action}',[AdminController::class,'action'])->name('action');
Route::post('/admin/add-sujet/',[SujetController::class,'add_sujet'])->name('add_sujet');
Route::post('/admin/add-quest/',[SujetController::class,'add_quest'])->name('add_quest');
Route::post('/admin/add-prop/',[SujetController::class,'add_prop'])->name('prop');
Route::get('/non-abonner',[ViewController::class,'non_abonner'])->name('non.abonner');
Route::post('/dashbord/update/{action}',[SujetController::class,'update'])->name('update')->middleware('auth');
Route::get('/dashbord/{action}',[UserController::class,'user'])->name('user')->middleware('auth'); // user dashbord
Route::get('/dashbord/{action}/{id}',[SujetController::class,'delete'])->name('delete')->middleware('auth');
Route::get("/demo/{title}-{ue}-{id}",[QuizController::class,"demo"])->name('demo');
Route::post("/demo/{title}-{ue}-{id}",[QuizController::class,"demo"])->name('democheck');
Route::get("/admin/abonnement/{action}-{id}",[AdminController::class,'client'])->name('client')->middleware('auth');
Route::post("/user/message/{idd}-{ide}-{direction}",[MessageController::class,'help'])->name('message')->middleware('auth');
Route::post('/download/{action}',[DownloadController::class,'storage'])->name('storage')->middleware('auth'); //telechargemnt





Route::get('/abonnement',function(){
  return view('abonnement');
});


Route::post('/livewire',function(){
    return view('livewire');
  });

  Route::get('/livewire',function(){
    return view('livewire');
  });



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';






