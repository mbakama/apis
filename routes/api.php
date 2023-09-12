<?php

use App\Http\Controllers\bookPriereController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailReclamation;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/home',[DetailReclamation::class,'index']);
Route::get('home/{nif}',[DetailReclamation::class,'show']);
Route::get('hom/{nif}',[DetailReclamation::class,'v']);
Route::get('recls', [DetailReclamation::class,'list']);
// Route::get('reclamation/{id}', [DetailReclamation::class,'v']);
Route::get('ver/{nif}',[DetailReclamation::class,'comb'])->name('relation');
Route::get('books',[bookPriereController::class,'index']);
Route::get('book/{bookId}',[bookPriereController::class,'bookId']);
Route::get('book/{bookId}/priere',[bookPriereController::class,'priere']);
// Route::get('reclamatiom/{nif}',[DetailReclamation::class,'all_data']);