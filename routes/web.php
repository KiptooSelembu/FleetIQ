<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Welcome;


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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', Welcome::class)->name('welcome');
Route::get('/about', App\Livewire\Pages\About::class)->name('about');
Route::get('/careers', App\Livewire\Pages\Careers::class)->name('careers');
