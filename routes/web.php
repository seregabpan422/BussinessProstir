<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\OrdersItemsController;
use App\Models\Items;
use App\Models\orders_items;
use App\Models\User;
use App\Models\orders;
use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Filters;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\UserEditController;
use App\Http\Kernel;







Route::view('/admin/create', 'create')->name('create-page')->middleware('admin'); // На сторінці /catalog/create робимо перевірку чи залогінений користувач. Якщо ні - відправляємо на логін



Route::middleware('web') -> group(function () {

    Route::get('/', function () {
        return redirect()->route('main.page'); // При посиланні / ми перенаправляємо нашого користувача на головну сторінку /main
    });

 Route::view('/main','index')->name('main.page');

 Route::get('/catalog', [ItemsController::class, 'filter'])->name('catalog.page'); // Додаємо до /catalog фільтри з контроллера Filters (app/Http/Controllers/Filters.php)

 Route::get('/catalog/{id}', [ItemsController::class, 'showItem'] )->name('item-page');

 

 Route::view('about-us/','about-us')->name('about-us');
 
 
});
Route::middleware('admin')->group(function () {
    // Routes requiring admin access
    Route::get('/admin/{id}/edit', [ItemsController::class, 'ItemEditPage'])->name('item-edit');
    Route::get('/admin/edit', [AdminController::class, 'ItemShow'])->name('item-list');
    Route::post('/admin', [ItemsController::class, 'create'])->name('create-items');
    Route::put('/catalog/{id}', [ItemsController::class, 'update'])->name('items-edited');
    Route::delete('/admin/edit/{id}', [ItemsController::class, 'destroy']) ->name('item-destroy');
    Route::view('/admin', 'admin-page')->name('admin-page');
    

});


Route::middleware('auth') ->group(function () {

    Route::get('/cabinet', [OrdersController::class, 'showOrders'])->name('cab-page');


Route::post('/catalog/{id}', [OrdersController::class, 'createOrder'])->name('create-order');

Route::put('/cabinet/{id}', [OrdersController::class, 'totalSum'])->name('confirm-order');

Route::delete('cabinet/{id}', [OrdersItemsController::class, 'destroyItemOrder'])->name('order-delete');

Route::delete('cabinet/{id}/delete', [OrdersController::class, 'destroyOrder'])->name('orders-delete');

Route::get('cabinet/{id}', [OrdersController::class, 'orderDetails'])->name('order-detail');

Route::view('settings/{id}', 'profile.settings')->name('settings-page');

Route::put('settings/{id}', [UserEditController::class, 'EditUser'])->name('profile-edit');

Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';


