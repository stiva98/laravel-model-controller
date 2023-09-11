<?php

use Illuminate\Support\Facades\Route;

//Controllers
use App\Http\Controllers\Guest\PageController;

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

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/contatti', [PageController::class, 'contatti'])->name('contatti');

Route::get('/chi_siamo', [PageController::class, 'chi_siamo'])->name('chi_siamo');

Route::get('/documentazione', [PageController::class, 'documentazione'])->name('documentazione');
