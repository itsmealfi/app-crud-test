<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AppuserController;

Route::get('/appuser', [AppuserController::class, 'index'])->name('appuser.index');
Route::post('/appuser', [AppuserController::class, 'add'])->name('appuser.add');
Route::get('/appuser/{appuser}', [AppuserController::class, 'show'])->name('appuser.show');
Route::put('/appuser/{appuser}', [AppuserController::class, 'update'])->name('appuser.update');
Route::delete('/appuser/{appuser}', [AppuserController::class, 'delete'])->name('appuser.delete');
Route::get('/appuser/search', [AppuserController::class, 'search'])->name('appuser.search');
