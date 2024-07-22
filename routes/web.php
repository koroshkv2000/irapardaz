<?php




use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;


Route::get('/link/create', [LinkController::class, 'createView'])->name('link.create');
Route::post('/link/create', [LinkController::class, 'create']);

Route::get('/link/list',  [LinkController::class, 'list']);

Route::get('/s/{code}', [LinkController::class, 'shortLink']);
