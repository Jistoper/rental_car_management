<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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
Route::get('/', function () {
    return view('index')->with(view('Home.homepage'));
})->name('home');
Route::view('/about', 'Home.about')->name('about')->middleware('auth');
Route::view('/car', 'Home.car')->name('car');
Route::view('/car/{id}', 'Home.car-single')->name('car.single');
Route::view('/contact', 'Home.contact')->name('contact');
Route::view('/pricing', 'Home.pricing')->name('pricing');
Route::view('/service', 'Home.services')->name('service');


Route::middleware(['auth', 'checkRole:admin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::controller(AdminController::class)->as('car.')->group(function(){
        Route::get('admin/car', 'getall')->name('getall'); // car index
        Route::get('admin/car-create', 'create')->name('create'); // car create (view form)
        Route::post('admin/car-create-store', 'storeCar')->name('store'); // car store (store data to database)
        Route::get('admin/car-edit-', 'editView')->name('edit'); // car edit (view form)
        Route::post('admin/car-edit-store', 'storeEdit')->name('storeEdit'); // car store edit (store changes to database)
        Route::delete('admin/car-delete', 'delete')->name('delete'); // car delete (delete car data)
        
        Route::get('admin/rent', 'getListCar')->name('getListCar'); // rental index
        Route::get('admin/rent-car-', 'rentView')->name('rentView'); // rent create (view form)
        Route::post('admin/rent-car-store', 'rentStore')->name('rentStore'); // rent store create (store data to database)
        Route::get('admin/rent-history', 'getListRent')->name('getListRent'); // rental history index
        Route::post('admin/rent-change', 'cnRentStat')->name('cnRentStat'); // rental check status
        Route::get('admin/rent-edit', 'rentEditView')->name('rentEdit'); // rental edit (view form)
        Route::post('admin/rent-edit-store', 'rentEditStore')->name('rentStoreEdit'); // rental edit (view form)
        Route::delete('admin/rent-delete', 'rentDelete')->name('rentDelete'); // rental delete data
    
        Route::get('admin/maintenance-registry', 'getCarMtn')->name('getCarMtn'); // maintenance index
        Route::get('admin/maintenance-history', 'getListMtn')->name('getListMtn'); // maintenance index
        Route::get('admin/maintenance-add-', 'createMtn')->name('createMtn'); // maintenance create (view form)
        Route::post('admin/maintenance-add-store', 'storeMtn')->name('storeMtn'); // maintenance store create (store data to database)
        Route::get('admin/maintenance-edit', 'mtnEditView')->name('mtnEdit'); // maintenance edit (view form)
        Route::post('admin/maintenance-edit-store', 'mtnEditStore')->name('mtnStoreEdit'); // maintenance store edit (store changes to database)
        Route::delete('admin/maintenance-delete', 'mtnDelete')->name('mtnDelete'); // rental delete data
    });
});


Route::middleware(['auth', 'checkRole:user'])->group(function () {
    Route::get('user/dashboard', function () {
        dd('Ini page user');
    })->name('user.dashboard');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('profile/update', [ProfileController::class, 'update'])->name('profile.update');
});


