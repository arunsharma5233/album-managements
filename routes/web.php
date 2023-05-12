<?php
use App\Http\Controllers\AlbumController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[AlbumController::class,'index']);
Route::get('/create',[AlbumController::class,'create']);
Route::post('/store',[AlbumController::class,'store']);
Route::get('/editAlbum/{id}',[AlbumController::class,'edit']);
Route::get('/delete/{id}',[AlbumController::class,'destroy']);
Route::post('/update/{id}',[AlbumController::class,'update']);
Route::get('/addSongs/{id}',[AlbumController::class,'addSongs']);
Route::post('/storeSongs/{id}',[AlbumController::class,'storeSongs']);
Route::get('/viewAddedSongs/{id}',[AlbumController::class,'viewSongs']);
Route::get('/search',[AlbumController::class,'search']);

