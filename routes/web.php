<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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

Route::get('/', [MemberController::class, 'index'])->name('member.index');
Route::get('/create', [MemberController::class, 'create'])->name('member.create');
Route::post('/create', [MemberController::class, 'store'])->name('member.store');
Route::post('/{id}/destroy', [MemberController::class, 'destroy'])->name('member.destroy');
Route::get('/{id}', [MemberController::class, 'show'])->name('member.show');
