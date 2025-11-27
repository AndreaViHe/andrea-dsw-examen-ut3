<?php
//Andrea Viera Hernández

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Ruta base que devuelve la vista home de primeras
Route::get('/', function () {
    return view('home');
});

// Ruta para realizar la funcion store
Route::post('/product', [ProductController::class, 'store'])->name('product.store');

// Ruta para realizar cuncion create que devuelve la vista registerProduct, al pincipio entendí que no se podía deovlder la view desde el get
// Route::get('/product', [ProductController::class, 'create'])->name('product.create');

// Ruta para devolver vista
Route::get('/product', function () {
    return view('registerProduct');
})->name('product.create');