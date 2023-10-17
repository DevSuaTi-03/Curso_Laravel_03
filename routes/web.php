<?php

use App\Http\Controllers\Admin\SupportController;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Route;

#Rotas de acesso de views através de controller
Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');

// rota definida por id 
Route::get('/supports/{id}', [SupportController::class, 'show'])->name('supports.show');

#Rota de cadastro de registros pelo método store de SupportController
Route::post('/supports', [SupportController::class, 'store'])->name('supports.store');


Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');

Route::get('/contato', [SiteController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});
