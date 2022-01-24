<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get(uri, controller)->middleware("auth");
// using this middleware we can protect the route if a user is authenticated than we will allow to view the page
Route::get('/pizzas', [PizzaController::class, 'index'])->middleware("auth");
Route::get("/pizzas/create", [PizzaController::class, "create"]);
Route::post('/pizzas', [PizzaController::class, 'store']);
Route::get('/pizzas/{id}', [PizzaController::class, 'show'])->middleware("auth");
Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy'])->middleware("auth");

// if we want to disable any routes or we dont want any routes so we can do that
//by providing an array inside routes.
Auth::routes([
    "register" => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
