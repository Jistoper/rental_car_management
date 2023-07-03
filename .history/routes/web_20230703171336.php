<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;

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

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('store');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Accessible routes
// Route::get('/', function () {
//     return redirect()->route('');
// })->name('home');

Route::get('/', [HomeController::class, 'viewHome'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('/about', 'Home.landing.about')->name('about');
    Route::view('/contact', 'Home.contact')->name('contact');
    Route::get('/pricing', [HomeController::class, 'viewPricing'])->name('pricing');
    Route::view('/service', 'Home.services')->name('service');
    Route::get('/car', [HomeController::class, 'viewCar'])->name('car');
    Route::view('/car/{id}', 'Home.car-single')->name('car.single');

    Route::middleware('checkRole:admin')->group(function () {
        Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

        // Car routes
        Route::controller(AdminController::class)->as('car.')->group(function(){
            Route::prefix('admin/car')->group(function () {
                Route::get('/', [AdminController::class, 'getall'])->name('getall');
                Route::get('/create', [AdminController::class, 'create'])->name('create');
                Route::post('/store', [AdminController::class, 'storeCar'])->name('store');
                Route::get('/edit', [AdminController::class, 'editView'])->name('edit');
                Route::post('/edit', [AdminController::class, 'storeEdit'])->name('storeEdit');
                Route::delete('/delete', [AdminController::class, 'delete'])->name('delete');
            });

            // Rental routes
            Route::prefix('admin/rent')->group(function () {
                Route::get('/', [AdminController::class, 'getListCar'])->name('getListCar');
                Route::get('/car', [AdminController::class, 'rentView'])->name('rentView');
                Route::post('/car-store', [AdminController::class, 'rentStore'])->name('rentStore');
                Route::get('/history', [AdminController::class, 'getListRent'])->name('getListRent');
                Route::post('/change', [AdminController::class, 'cnRentStat'])->name('cnRentStat');
                Route::get('/edit', [AdminController::class, 'rentEditView'])->name('rentEdit');
                Route::post('/edit-store', [AdminController::class, 'rentEditStore'])->name('rentStoreEdit');
                Route::delete('/delete', [AdminController::class, 'rentDelete'])->name('rentDelete');
            });

            // Maintenance History routes
            Route::prefix('admin/maintenance')->group(function () {
                Route::get('/registry', [AdminController::class, 'getCarMtn'])->name('getCarMtn');
                Route::get('/history', [AdminController::class, 'getListMtn'])->name('getListMtn');
                Route::get('/add', [AdminController::class, 'createMtn'])->name('createMtn');
                Route::post('/add-store', [AdminController::class, 'storeMtn'])->name('storeMtn');
                Route::get('/edit', [AdminController::class, 'mtnEditView'])->name('mtnEdit');
                Route::post('/edit-store', [AdminController::class, 'mtnEditStore'])->name('mtnStoreEdit');
                Route::delete('/delete', [AdminController::class, 'mtnDelete'])->name('mtnDelete');
            });
        });
    });

    Route::middleware('checkRole:user')->group(function () {
        Route::get('user/dashboard', function () {
            dd('Ini page user');
        })->name('user.dashboard');

        Route::get('/profile', [ProfileController::class, 'index'])->name('Profile.index');
        Route::get('profile/edit', [ProfileController::class, 'edit'])->name('Profile.edit');
        Route::put('profile/update', [ProfileController::class, 'update'])->name('Profile.update');
    });
});
