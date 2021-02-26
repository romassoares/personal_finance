<?php

use App\Http\Controllers\EstablishmentController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\FinancingController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');

Route::middleware('auth')->group(
    function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        Route::prefix('item')->name('item.')->group(function () {
            Route::get('/', [ItemController::class, 'index'])->name('index');
            // Route::post('/search', [ItemController::class, 'search'])->name('search');
            // Route::get('/create', [ItemController::class, 'create'])->name('create');
            // Route::post('/store', [ItemController::class, 'store'])->name('store');
            // Route::get('/archive', [ItemController::class, 'archive'])->name('archive');
        });

        Route::prefix('establishment')->name('establishment.')->group(function () {
            Route::get('/', [EstablishmentController::class, 'index'])->name('index');
            // Route::post('/search', [ItemController::class, 'search'])->name('search');
            // Route::get('/create', [ItemController::class, 'create'])->name('create');
            // Route::post('/store', [ItemController::class, 'store'])->name('store');
            // Route::get('/archive', [ItemController::class, 'archive'])->name('archive');
        });
        Route::prefix('financing')->name('financing.')->group(function () {
            Route::get('/', [FinancingController::class, 'index'])->name('index');
            // Route::post('/search', [ItemController::class, 'search'])->name('search');
            // Route::get('/create', [ItemController::class, 'create'])->name('create');
            // Route::post('/store', [ItemController::class, 'store'])->name('store');
            // Route::get('/archive', [ItemController::class, 'archive'])->name('archive');
        });
        Route::prefix('purchase')->name('purchase.')->group(function () {
            Route::get('/', [PurchaseController::class, 'index'])->name('index');
            // Route::post('/search', [ItemController::class, 'search'])->name('search');
            // Route::get('/create', [ItemController::class, 'create'])->name('create');
            // Route::post('/store', [ItemController::class, 'store'])->name('store');
            // Route::get('/archive', [ItemController::class, 'archive'])->name('archive');
        });
        Route::prefix('expense')->name('expense.')->group(function () {
            Route::get('/', [ExpenseController::class, 'index'])->name('index');
            // Route::post('/search', [ItemController::class, 'search'])->name('search');
            // Route::get('/create', [ItemController::class, 'create'])->name('create');
            // Route::post('/store', [ItemController::class, 'store'])->name('store');
            // Route::get('/archive', [ItemController::class, 'archive'])->name('archive');
        });
        Route::prefix('recipe')->name('recipe.')->group(function () {
            Route::get('/', [RecipeController::class, 'index'])->name('index');
            // Route::post('/search', [ItemController::class, 'search'])->name('search');
            // Route::get('/create', [ItemController::class, 'create'])->name('create');
            // Route::post('/store', [ItemController::class, 'store'])->name('store');
            // Route::get('/archive', [ItemController::class, 'archive'])->name('archive');
        });
    }
);


// Route::prefix('employee')->name('employee.')->group(function () {
//     Route::get('/', [EmployeeController::class, 'index'])->name('index');
//     Route::post('/search', [EmployeeController::class, 'search'])->name('search');
//     Route::get('/create', [EmployeeController::class, 'create'])->name('create');
//     Route::post('/store', [EmployeeController::class, 'store'])->name('store');
//     Route::get('/archive', [EmployeeController::class, 'archive'])->name('archive');
//     Route::prefix('{employee_id}')->group(function () {
//         Route::get('/', [EmployeeController::class, 'show'])->name('show');
//         Route::get('/edit', [EmployeeController::class, 'edit'])->name('edit');
//         Route::put('/', [EmployeeController::class, 'update'])->name('update');
//         Route::get('/remove', [EmployeeController::class, 'remove'])->name('remove');
//         Route::get('/restory', [EmployeeController::class, 'restory'])->name('restory');
//     });
// });

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
