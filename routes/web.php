<?php
use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/about', 'PizzaController@index');
Route::get('/pizzas', [PizzaController::class, 'index']) ->middleware('auth');

Route::get('/pizzas/create', [PizzaController::class, 'create'])->middleware('role:writer|admin');
Route::post('/pizzas', [PizzaController::class, 'store']);

//Route::get('pizzas/{id}', 'PizzaController@show');
Route::get('/pizzas/{id}', [PizzaController::class, 'show']) ->middleware('auth');


Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy']) ->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
