<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\EzebedController;

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

// ruta para exponer las imagenes para poder ser accedidas desde reactjs
Route::get('images/{filename}', function ($filename) {
    $path = public_path('images/' . $filename);
    if (file_exists($path)) {
        return response()->file($path);
    } else {
        abort(404);
    }
});


// ruta de pruebas
Route::get('/test', function () {
    return Inertia::render('Test');
})->name('test');

Route::get('/', [EzebedController::class, 'index'])->name('ezebed');
