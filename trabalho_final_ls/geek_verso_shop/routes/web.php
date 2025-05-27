<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () { 
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function() {
    Route::resources([
        //cria apenas um nome de rota para todos os métodos do controlador
        'produtos' => ProductController::class
    ]);

    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::redirect('/home', '/');
});

Route::fallback(function () {
    return response()->view('fallback', [], 404);
});

require __DIR__.'/auth.php';
