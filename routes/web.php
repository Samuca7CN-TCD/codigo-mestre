<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
# use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\DashboardController;

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

# require_once 'fortify.php';
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/home', function(){
        return Inertia::render('Welcome');
    });

    Route::resource('/categoria', CategoriaController::class);
    Route::resource('/curso', CursoController::class);
    Route::post('/curso/{curso}', [CursoController::class, 'update'])->where('curso', '[0-9]+')->name('curso.update');
    Route::post('/curso/comprar/{curso}', [CursoController::class, 'comprar'])->where('curso', '[0-9]+')->name('curso.comprar');
    Route::resource('/aula', AulaController::class);
    Route::resource('/dashboard', DashboardController::class);
});

