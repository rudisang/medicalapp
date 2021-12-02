<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;

use Illuminate\Support\Facades\Hash;

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

    $users = User::all();
    return view('dashboard')->with('users', $users);
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/add-user', function () {
    
    $users = User::all();
    return view('adduser')->with('users', $users);
})->middleware(['auth']);

Route::post('/dashboard/add-user', function () {
    request()->validate([
        'medical_aid' => 'required|string|max:255',
        'medical_aid_no' => 'required|string|max:255',
        'occupation' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'mobile_no' => 'required|string|max:255',
        'surname' => 'required|string|max:255',
        'name' => ['required', 'string', 'max:255'],
        'omang' => ['required'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    ]);

    $password = 123456;

    User::create([
        'medical_aid' => request()->medical_aid,
        'medical_aid_no' => request()->medical_aid_no,
        'occupation' => request()->occupation,
        'address' => request()->address,
        'mobile_no' => request()->mobile_no,
        'surname' => request()->surname,
        'name' => request()->name,
        'omang' => request()->omang,
        'email' => request()->email,
        'role_id' => request()->role_id,
        'password' => Hash::make($password),
    ]);

    return redirect('dashboard')->with('success', 'New user added');
})->middleware(['auth']);

Route::get('/dashboard/internship/apply', function () {
    return view('internship.create');
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';
