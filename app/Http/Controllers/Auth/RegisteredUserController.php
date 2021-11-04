<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $roles = Role::all();

        return view('auth.register')->with('roles', $roles);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'date_of_birth' => 'required|date|before:today',
            'gender' => 'required|string|max:255',
            'marital_status' => 'required|string|max:255',
            'co_address' => 'required|string|max:255',
            'tel_no' => 'required|string|max:255',
            'mobile_no' => 'required|string|max:255',
            'fax' => 'required|string|max:255',
            'name' => ['required', 'string', 'max:255'],
            'omang' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'title' => $request->title,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
            'marital_status' => $request->marital_status,
            'co_address' => $request->co_address,
            'tel_no' => $request->tel_no,
            'mobile_no' => $request->mobile_no,
            'fax' => $request->fax,
            'name' => $request->name,
            'omang' => $request->omang,
            'email' => $request->email,
            'role_id' => 2,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
