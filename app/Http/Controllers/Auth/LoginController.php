<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Show login page
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Handle login submit
     */
    public function authenticate(Request $request)
    {
        // 1️⃣ Validate
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        // 2️⃣ Attempt login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // 3️⃣ Redirect using named route
            return redirect()->route('user.dashboard.index');
        }

        // 4️⃣ Login failed
        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ])->onlyInput('email');
    }

    /**
     * Logout
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}