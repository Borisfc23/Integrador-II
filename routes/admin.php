<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ProviderController;
use App\Http\Controllers\Admin\InputController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OutputController;
use App\Http\Controllers\Admin\DetailController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\MailController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\SearchInfo;

// Route::get('', [HomeController::class, 'index'])->middleware('can:admin.index')->name('admin.index');
Route::get('', [HomeController::class, 'index'])->name('admin.index');

Route::resource('users', UserController::class)->middleware('can:admin.users.index')->names("admin.users");

Route::resource('roles', RoleController::class)->middleware('can:admin.roles.index')->names("admin.roles");

Route::resource('providers', ProviderController::class)->middleware('can:admin.providers.index')->names("admin.providers");

Route::resource('inputs', InputController::class)->middleware('can:admin.inputs.index')->names("admin.inputs");

Route::resource('products', ProductController::class)->middleware('can:admin.products.index')->names("admin.products");

Route::resource('outputs', OutputController::class)->middleware('can:admin.outputs.index')->names("admin.outputs");

Route::resource('details', DetailController::class)->middleware('can:admin.details.index')->names("admin.details");

Route::resource('orders', OrderController::class)->middleware('can:admin.orders.index')->names("admin.orders");

Route::controller(SearchInfo::class)->group(function () {
    Route::get('search/iproducts', 'indexProduct')->name('search.iproducts');    
    Route::get('search/iusers', 'indexUser')->name('search.iusers');    
});

//Rutas para Reprtes PDF
Route::get('download-provider-pdf',[ReportController::class,'providerPDF'])->name('admin.providers.pdf');
Route::get('download-user-pdf',[ReportController::class,'userPDF'])->name('admin.users.pdf');
Route::get('download-almacen-pdf',[ReportController::class,'almacenPDF'])->name('admin.almacen.pdf');
Route::get('download-inputs-pdf/{input}',[ReportController::class,'inputPDF'])->name('admin.inputs.pdf');
Route::get('download-outputs-pdf/{output}',[ReportController::class,'outputPDF'])->name('admin.outputs.pdf');

//ruta de prueba
Route::get('/reporte/pdf',[ReportController::class,'outputPDF']);

//Ruta para enviar correo 
Route::get('send-email',[MailController::class,'sendEmail'])->name('admin.email');