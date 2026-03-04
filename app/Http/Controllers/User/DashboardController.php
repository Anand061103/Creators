<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display the user dashboard
     */
    public function index()
    {
        // Future: Get user stats, recent activities, etc.
        // $user = Auth::user();
        // $stats = [
        //     'wallet_balance' => $user->wallet->balance ?? 0,
        //     'total_earnings' => $user->transactions()->sum('amount'),
        //     'completed_tasks' => $user->tasks()->where('status', 'completed')->count(),
        //     'pending_tasks' => $user->tasks()->where('status', 'pending')->count(),
        //     'recent_activities' => $user->activities()->latest()->take(5)->get(),
        // ];
        
        return view('user.dashboard.index');
    }

    public function notifications()
    {
        // Future: Fetch user notifications
        // $notifications = Auth::user()->notifications()->latest()->get();
        return view('user.dashboard.notifications');
    }

 public function referral()
    {
        // Future: Fetch user notifications
        // $notifications = Auth::user()->notifications()->latest()->get();
        return view('user.dashboard.referral');
    }
    
}
