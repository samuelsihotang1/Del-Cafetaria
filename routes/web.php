<?php

use App\Livewire\Contact;
use App\Livewire\Profile;
use App\Livewire\Homepage;
use App\Livewire\Menu;
use App\Livewire\Order;
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

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
  Route::get('/', Homepage::class)->name('home');
  Route::get('/menu', Menu::class)->name('menu');
  Route::get('/order', Order::class)->name('order');
  Route::get('/contact', Contact::class)->name('contact');
  Route::get('/profile', Profile::class)->name('profile');
});
