<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create() {
        return view('users.register');
    }

    public function store(Request $request) {
        $formsFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6',
        ]);

        // Hash password
        $formsFields['password'] = bcrypt($formsFields['password']);
        
        // Create user
        $user = User::create($formsFields);

        // Login user
        auth()->login($user);
        return redirect('/')->with('message', 'User created and logged in. Welcome ' . $formsFields['name']);
    }

    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Session closed');
    }
}
