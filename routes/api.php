<?php

use Illuminate\Support\Facades\Route;

Route::middleware('api')->group(function () {
    require __DIR__ . '/appuser.php';
});