<?php
use App\Http\Controllers\MovementController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/menu', function () {
    return view('movement.menu');
})->middleware(['auth', 'verified'])->name('menu');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    //Route for CREATE a movement
    Route::get('/movement/create', [MovementController::class, 'create'])->name('createLaunch');
    Route::post('/movement/store', [MovementController::class, 'store']);

    });

require __DIR__.'/auth.php';
