<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// rutas principales de el munu de la pagina
route::view("/", "index")->name("index");
route::view("/services", "services")->name("services");
route::view("/contact", "contact")->name("contact");
route::view("/about", "about")->name("about");

// rutas relacionada con los usuarios
route::get("/user",         [UserController::class, "index"])->name("user.index");
route::get("/user/create",  [UserController::class, "create"])->name("user.create");
route::get("/user/auto",    [UserController::class, "auto"])->name("user.auto");
route::post("/user/store",  [UserController::class, "store"])->name("user.store");
route::get("/user/edit/{user}",     [UserController::class, "edit"])->name("user.edit");
route::put("/user/update/{user}",   [UserController::class, "update"])->name("user.update");
route::get("/user/show/{user}",     [UserController::class, "show"])->name("user.show");
route::delete("/user/delete/{user}",[UserController::class, "delete"])->name('user.delete');

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */

// Route::get('/', function () {
//     return view('welcome');
// });
