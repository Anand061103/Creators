<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Show register form
     * GET /register
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store new user
     * POST /register
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // auto-login intentionally disabled ✔

        return redirect()
            ->route('login')
            ->with('success', 'Registration successful. Please login.');
    }
}