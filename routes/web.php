<?php

use App\Http\Controllers\ContactMeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('index');
});


// Path: routes\web.php


// Route::get("/index", [HomeController::class, "index"])->name("index");
Route::get("/contact", [HomeController::class, "contact"])->name("contact");
Route::post("/contact/store", [ContactMeController::class, "store"])->name("contact.store");
Route::get("/about", [HomeController::class, "about"])->name("about");
Route::get("/podcast", [HomeController::class, "podcast"])->name("podcast");
Route::get("/service", [HomeController::class, "service"])->name("service");
Route::get("/announcement", [HomeController::class, "announcement"])->name("announcement");


// Route::resource("contacts", ContactController::class);


