<?php

use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|D--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',[PageController::class,'index'])->name('home');
Route::get('/about',[PageController::class,'about'])->name('about');
Route::get('/service',[PageController::class,'service'])->name('service');
Route::get('/training',[PageController::class,'training'])->name('training');
Route::get('/knowledge',[PageController::class,'knowledge'])->name('knowledge');

// Admin Route 
Route::get('/createServicePost',[AdminPageController::class,'createServicePost'])->name('createServicePost');
Route::get('/createTrainingPost',[AdminPageController::class,'createTrainingPost'])->name('createTrainingPost');
Route::get('/createKnowledgePost',[AdminPageController::class,'createKnowledgePost'])->name('createKnowledgePost');
Route::post('/storeServicePost',[AdminPageController::class,'storeServicePost'])->name('storeServicePost');
Route::post('/storeTrainingPost',[AdminPageController::class,'storeTrainingPost'])->name('storeTrainingPost');
Route::post('/storeKnowledgePost',[AdminPageController::class,'storeKnowledgePost'])->name('storeKnowledgePost');