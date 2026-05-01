<?php
use App\Http\Controllers\MovementController;
use App\Http\Controllers\CategoryController;
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
    
    //debug remove later use
    Route::get('/dashboard', [MovementController::class, 'index']);

    //Route for CREATE a movement
    Route::get('/movement/create', [MovementController::class, 'create'])->name('movement.create');
    Route::post('/movement/store', [MovementController::class, 'store'])->name('movement.store');

    //Route for CREATE a category
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    });

require __DIR__.'/auth.php';
