<?php

use Illuminate\Support\Facades\Route;
use App\Models\InternApplicationForm;
use App\Http\Controllers\InternApplicationFormController;

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

Route::get('/dashboard', function () {
    $applications = InternApplicationForm::all();
    return view('dashboard')->with('applications', $applications);
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/internship/apply', function () {
    return view('internship.create');
})->middleware(['auth'])->name('dashboard');

Route::post('/dashboard/internship/apply', [InternApplicationFormController::class, 'storeInternApplication']);

require __DIR__.'/auth.php';
