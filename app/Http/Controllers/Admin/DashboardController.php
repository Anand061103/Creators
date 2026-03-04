<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the admin dashboard
     */
    public function index()
    {
        // Future: Get platform stats, user counts, recent activities, etc.
        // $stats = [
        //     'total_users' => User::count(),
        //     'total_creators' => User::where('role', 'creator')->count(),
        //     'total_tasks' => Task::count(),
        //     'recent_activities' => Activity::latest()->take(5)->get(),
        // ];
        
        return view('admin.dashboard.index');
    }
}
