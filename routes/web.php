<?php
namespace App\Http\Controllers;
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

Route::get('/', function () {return view('admin.content.dashboard.dashboard');});

    //Route::get('/admin', function () {return view('admin.admin');});
    //Route::get('/dashboard', function () {return view('admin.content.index');});
    Route::get('/dashboard', [Main\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/inventaris', [Main\InventarisController::class, 'index'])->name('inventaris');
    Route::get('/inventaris/create', [Main\InventarisController::class, 'create']);
    Route::post('/inventaris/create', [Main\InventarisController::class, 'processCreate']);
    Route::get('/inventaris/update/{id}', [Main\InventarisController::class, 'update']);
    Route::post('/inventaris/update/{id}', [Main\InventarisController::class, 'processUpdate']);
    Route::get('/inventaris/delete/{id}', [Main\InventarisController::class, 'delete']);
    Route::get('/habispakai', [Main\HabisPakaiController::class, 'index'])->name('habispakai');
    Route::get('/habispakai/create', [Main\HabisPakaiController::class, 'create']);
    Route::post('/habispakai/create', [Main\HabisPakaiController::class, 'processCreate']);
    Route::get('/habispakai/update/{id}', [Main\HabisPakaiController::class, 'update']);
    Route::post('/habispakai/update/{id}', [Main\HabisPakaiController::class, 'processUpdate']);
    Route::get('/habispakai/delete/{id}', [Main\HabisPakaiController::class, 'delete']);

