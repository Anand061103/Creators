<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Show user welcome page
     */
    public function index()
    {
        return view('user.welcome');
    }
}