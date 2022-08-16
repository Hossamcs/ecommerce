<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::resource('admin/prodcuts',ProductController::class)->middleware(['auth']);