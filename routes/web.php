<?php

use App\Http\Controllers\ToolsController;
use App\Http\Controllers\View1Controller;
use App\Http\Controllers\View2Controller;
use App\Http\Controllers\View3Controller;
use Illuminate\Support\Facades\Route;

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



Route::get('/view1', [View1Controller::class, 'index'])->name('page1');

Route::get('/view2', [View2Controller::class, 'index'])->name('page2');

Route::get('/view3', [View3Controller::class, 'index'])->name('page3');

Route::get('/viewTab', [ToolsController::class, 'index'])->name("tableau");
