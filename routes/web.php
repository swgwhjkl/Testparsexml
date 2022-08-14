<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestxmlController;
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


Route::match(["get", "post"], "read-xml", [TestxmlController::class, "index"])->name('xml-upload');

