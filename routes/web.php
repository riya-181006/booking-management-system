<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\WebpageController;
Route::get('/', [WebpageController::class, 'landing'])->name('home');
Route::get('/page/{page}', [WebpageController::class, 'viewPage'])->name('webpage.view');
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'authenticate')->name('login.post');
    Route::get('/register', 'signup')->name('register');
    Route::post('/register', 'createUser')->name('register.post');
    Route::post('/logout', 'logout')->name('logout');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [UserController::class, 'adminDashboard'])->name('dashboard.admin');
    Route::get('/user/dashboard', [UserController::class, 'userDashboard'])->name('dashboard.user');
    Route::get('/user/profile', [UserController::class, 'getProfile'])->name('user.profile.get');
    Route::post('/user/profile', [UserController::class, 'saveProfile'])->name('user.profile.save');
    Route::prefix('booking')->group(function () {
        Route::get('/all', [BookingController::class, 'index'])->name('booking.all');
        Route::get('/my', [BookingController::class, 'userBookings'])->name('booking.my');
        Route::get('/add', [BookingController::class, 'add'])->name('booking.add');
        Route::post('/save', [BookingController::class, 'save'])->name('booking.save');
        Route::get('/edit/{id}', [BookingController::class, 'getBookingsById'])->name('booking.edit');
        Route::post('/update/{id}', [BookingController::class, 'updateBookingsById'])->name('booking.update');
        Route::get('/delete/{id}', [BookingController::class, 'viewDelete'])->name('booking.delete.view');
        Route::delete('/delete/{id}', [BookingController::class, 'delete'])->name('booking.delete');
    });
    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('user.user');
        Route::get('/add', [UserController::class, 'add'])->name('user.add');
        Route::post('/save', [UserController::class, 'save'])->name('user.save');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::post('/update/{id}', [UserController::class, 'update'])->name('user.update');
        Route::get('/delete/{id}', [UserController::class, 'viewDelete'])->name('user.delete.view');
        Route::delete('/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
    });
    Route::prefix('webpage')->group(function () {
        Route::get('/', [WebpageController::class, 'index'])->name('webpage.index');
        Route::get('/add', [WebpageController::class, 'add'])->name('webpage.add');
        Route::post('/save', [WebpageController::class, 'save'])->name('webpage.save');
        Route::get('/edit/{id}', [WebpageController::class, 'edit'])->name('webpage.edit');
        Route::post('/update/{id}', [WebpageController::class, 'update'])->name('webpage.update');
        Route::get('/delete/{id}', [WebpageController::class, 'viewDelete'])->name('webpage.delete.view');
        Route::delete('/delete/{id}', [WebpageController::class, 'delete'])->name('webpage.delete');
    });
});