<?php

use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\DataCollector\RouterDataCollector;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BaseController::class, 'index'])->name('user.index');