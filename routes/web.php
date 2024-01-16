<?php

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

Route::view('/', 'welcome')->name('welcome.index');

Route::middleware('auth')->group(function () {
    Route::view('/dashboard','dashboard')->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/pps', function () {
        return 'test pps pps';
    })->name('pps.index');
    
    Route::get('/pps/{pps}', function ($pps = null) {
        if ($pps === '-1') {
            //return redirect('/');
            return to_route('pps.index'); //redirect()->route('pps.index');
        }
        return 'pps> '.$pps;
    });
    
});

require __DIR__.'/auth.php';
