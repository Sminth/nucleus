<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\UploadFileController;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/recherche', [IndexController::class,'search'])->name('fichiers.recherche');
Route::get('/page.unamed/{type}', [IndexController::class,'page'])->name('page');
Route::get('/sminth',function(){
    return view('sminth');
});  
Route::get('/upload',function(){
    return view('upload');
});   
Route::get('/formulaire uploadfile',[UploadFileController::class,'index'])->name('view.upload');
Route::post('/uploadfile',[UploadFileController::class,'showUploadFile'])->name('upload.file');
Route::post('/updateuploadfile',[UploadFileController::class,'UpdateUploadFile'])->name('upload.update');

Route::get('/admin_nucleus',[IndexController::class,'admin'])->name('admin');

Route::get('/suppression/{fichier}',[IndexController::class,'suppression'])->name('sup');
Route::get('/editer/{fichier}',[IndexController::class,'editer'])->name('editer');
