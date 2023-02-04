<?php

use Ciida\Ciida\Http\Controllers\CommandsController;
use Illuminate\Support\Facades\Route;

Route::get('/ciida', [CommandsController::class, 'index'])->name('ciida');