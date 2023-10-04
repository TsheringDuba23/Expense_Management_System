<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\FuelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RequisitionController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home',[HomeController::class,'index'])->middleware(['auth', 'verified'])->name('home');
Route::get('/post',[HomeController::class,'post'])->middleware(['auth', 'admin'])->name('post');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');


// Show all products
Route::get('products', [ProductController::class, 'index'])->name('products.index');


// Display the form to create a new product
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');

// Store a newly created product
Route::post('products', [ProductController::class, 'store'])->name('products.store');

// Display the form to edit a product
Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

// Update a product
Route::put('products/{product}', [ProductController::class, 'update'])->name('products.update');

// Delete a product
Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

// Show a single fuel claim
Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');



// Route::resource('products', ProductController::class);

// Show all fuels
Route::get('fuels', [FuelController::class, 'index'])->name('fuels.index');

// Display the form to create a new fuel
Route::get('fuels/create', [FuelController::class, 'create'])->name('fuels.create');

// Store a newly created fuel
Route::post('fuels', [FuelController::class, 'store'])->name('fuels.store');

// Display the form to edit a fuel
Route::get('fuels/{fuel}/edit', [FuelController::class, 'edit'])->name('fuels.edit');

// Update a fuel
Route::put('fuels/{fuel}', [FuelController::class, 'update'])->name('fuels.update');

//show a fuel
// Show a single fuel claim
Route::get('fuels/{fuel}', [FuelController::class, 'show'])->name('fuels.show');

// Delete a fuel
Route::delete('fuels/{fuel}', [FuelController::class, 'destroy'])->name('fuels.destroy');





// Show all requisitions
Route::get('requisitions', [RequisitionController::class, 'index'])->name('requisitions.index');

// Display the form to create a new requisition
Route::get('requisitions/create', [RequisitionController::class, 'create'])->name('requisitions.create');

// Store a newly created requisition
Route::post('requisitions', [RequisitionController::class, 'store'])->name('requisitions.store');

// Display the form to edit a requisition
Route::get('requisitions/{requisition}/edit', [RequisitionController::class, 'edit'])->name('requisitions.edit');

// Update a requisition
Route::put('requisitions/{requisition}', [RequisitionController::class, 'update'])->name('requisitions.update');

// Show a single requisition
Route::get('requisitions/{requisition}', [RequisitionController::class, 'show'])->name('requisitions.show');

// Delete a requisition
Route::delete('requisitions/{requisition}', [RequisitionController::class, 'destroy'])->name('requisitions.destroy');
// Download a requisition
Route::get ('requisitions/download/{file}', [RequisitionController::class,'download'])->name('requisitions.download');