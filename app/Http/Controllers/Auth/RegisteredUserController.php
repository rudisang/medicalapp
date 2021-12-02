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
            'medical_aid' => 'required|string|max:255',
            'medical_aid_no' => 'required|string|max:255',
            'occupation' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'mobile_no' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'name' => ['required', 'string', 'max:255'],
            'omang' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'medical_aid' => $request->medical_aid,
            'medical_aid_no' => $request->medical_aid_no,
            'occupation' => $request->occupation,
            'address' => $request->address,
            'mobile_no' => $request->mobile_no,
            'surname' => $request->surname,
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
