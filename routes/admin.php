<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ProviderController;
use App\Http\Controllers\Admin\InputController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OutputController;
use App\Http\Controllers\Admin\DetailController;
use App\Http\Controllers\SearchInfo;

// Route::get('', [HomeController::class, 'index'])->middleware('can:admin.index')->name('admin.index');
Route::get('', [HomeController::class, 'index'])->name('admin.index');

Route::resource('users', UserController::class)->names("admin.users");

Route::resource('roles', RoleController::class)->names("admin.roles");

Route::resource('providers', ProviderController::class)->names("admin.providers");

Route::resource('inputs', InputController::class)->names("admin.inputs");

Route::resource('products', ProductController::class)->names("admin.products");

Route::resource('outputs', OutputController::class)->names("admin.outputs");

Route::resource('details', DetailController::class)->names("admin.details");

Route::controller(SearchInfo::class)->group(function () {
    Route::get('search/iproducts', 'indexProduct')->name('search.iproducts');    
    Route::get('search/iusers', 'indexUser')->name('search.iusers');    
});