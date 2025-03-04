<?php

use App\Http\Controllers\Api\AppuserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*
// Include shared routes
Route::middleware('web')->group(function () {
    require __DIR__ . '/appuser.php';
});
*/

Route::get('/appuser', [AppuserController::class, 'index'])->name('appuser.index');
Route::get('/appuser/create', [AppuserController::class, 'create'])->name('appuser.create');
Route::post('/appuser', [AppuserController::class, 'add'])->name('appuser.add');
Route::get('/appuser/{appuser}/edit', [AppuserController::class, 'edit'])->name('appuser.edit');
Route::put('/appuser/{appuser}/update', [AppuserController::class, 'update'])->name('appuser.update');
Route::delete('/appuser/{appuser}/delete', [AppuserController::class, 'delete'])->name('appuser.delete');
Route::get('/appuser/search', [AppuserController::class, 'search'])->name('appuser.search');
