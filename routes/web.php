<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get("/",[HomeController::class,"index"])->name("home");
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get("/Reservation",[ReservationController::class,"index"])->name("reservation");
    Route::get("/Contact",[ContactController::class,"index"])->name("contact");
    Route::get("/direction",[AdminController::class,"index"])->middleware(AdminMiddleware::class)->name("admin");
    Route::post("/createMenu",[MenuController::class,"store"])->middleware(AdminMiddleware::class)->name("menu.store");
    Route::delete("/product/delete/{menu}",[MenuController::class,"destroy"])->name("menu.destroy");
    Route::post("/sendMail",[ContactController::class,"handleContact"])->name("send.email");
});

Route::post("/calendar/store" , [CalendarController::class , "store"]);
Route::get("/calendar/show" , [CalendarController::class , "show"])->name("show");

require __DIR__.'/auth.php';
