<?php

use Illuminate\Support\Facades\Route;
// search using livewire
use App\Http\Controllers\SearchWitheLivewireController;
use App\Http\Controllers\ExampleBlockUsersWitheLivewireController;
use App\Http\Controllers\FormSelectController;



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


Route::get('livewireSearche',[SearchWitheLivewireController::class, 'livewireSearche']);
Route::get('livewireSearche',[SearchWitheLivewireController::class, 'livewireSearche']);
Route::get('form/select',[FormSelectController::class, 'formSelect']);



Route::get('/', function () {
    return view('welcome');
});
