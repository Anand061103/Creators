@extends('layout.user.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')
@section('page-subtitle', 'Welcome back! Here\'s your earnings overview.')

@section('content')
<div class="space-y-8 animate-fade-in">

    <!-- Welcome Card -->
    <div class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-700 rounded-3xl p-8 text-white shadow-2xl">
        <!-- Decorative Elements -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full blur-3xl"></div>
        
        <div class="relative z-10 flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
            <div>
                <h2 class="text-3xl md:text-4xl font-black mb-2">
                    Welcome back, John! 👋
                </h2>
                <p class="text-blue-100 text-lg">
                    You've earned <span class="font-bold text-yellow-300">₹250</span> this week. Keep it up!
                </p>
            </div>
            <div class="flex gap-3">
                <a href="{{ route('user.tasks.index') }}" 
                   class="bg-white text-blue-600 px-6 py-3 rounded-xl font-bold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all">
                    Browse Tasks
                </a>
                <a href="{{ route('user.withdraw.index') }}" 
                   class="bg-white/20 backdrop-blur-sm text-white px-6 py-3 rounded-xl font-semibold border-2 border-white/30 hover:bg-white/30 transition-all">
                    Withdraw
                </a>
            </div>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <!-- Wallet Balance -->
        <div class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all p-6 border-2 border-transparent hover:border-green-200 overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-green-100 rounded-full blur-3xl opacity-0 group-hover:opacity-50 transition-opacity"></div>
            <div class="relative z-10">
                <div class="flex items-start justify-between mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                        </svg>
                    </div>
                    <span class="flex items-center gap-1 text-green-600 text-sm font-bold">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"/>
                        </svg>
                        +12%
                    </span>
                </div>
                <p class="text-gray-500 text-sm font-medium mb-1">Wallet Balance</p>
                <h3 class="text-3xl font-black text-gray-900 mb-2">₹500</h3>
                <div class="flex items-center gap-2 text-xs text-gray-500">
                    <div class="flex-1 bg-gray-200 rounded-full h-1.5">
                        <div class="bg-gradient-to-r from-green-500 to-emerald-600 h-1.5 rounded-full" style="width: 60%"></div>
                    </div>
                    <span>60%</span>
                </div>
            </div>
        </div>

        <!-- Total Earnings -->
        <div class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all p-6 border-2 border-transparent hover:border-blue-200 overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-blue-100 rounded-full blur-3xl opacity-0 group-hover:opacity-50 transition-opacity"></div>
            <div class="relative z-10">
                <div class="flex items-start justify-between mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <span class="flex items-center gap-1 text-blue-600 text-sm font-bold">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"/>
                        </svg>
                        +23%
                    </span>
                </div>
                <p class="text-gray-500 text-sm font-medium mb-1">Total Earnings</p>
                <h3 class="text-3xl font-black text-gray-900 mb-2">₹1,250</h3>
                <p class="text-xs text-gray-500">Since joined</p>
            </div>
        </div>

        <!-- Completed Tasks -->
        <div class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all p-6 border-2 border-transparent hover:border-purple-200 overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-purple-100 rounded-full blur-3xl opacity-0 group-hover:opacity-50 transition-opacity"></div>
            <div class="relative z-10">
                <div class="flex items-start justify-between mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <span class="flex items-center gap-1 text-purple-600 text-sm font-bold">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"/>
                        </svg>
                        +8
                    </span>
                </div>
                <p class="text-gray-500 text-sm font-medium mb-1">Tasks Completed</p>
                <h3 class="text-3xl font-black text-gray-900 mb-2">42</h3>
                <p class="text-xs text-gray-500">This month</p>
            </div>
        </div>

        <!-- Pending Tasks -->
        <div class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all p-6 border-2 border-transparent hover:border-yellow-200 overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-yellow-100 rounded-full blur-3xl opacity-0 group-hover:opacity-50 transition-opacity"></div>
            <div class="relative z-10">
                <div class="flex items-start justify-between mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-bold">
                        Active
                    </span>
                </div>
                <p class="text-gray-500 text-sm font-medium mb-1">Pending Tasks</p>
                <h3 class="text-3xl font-black text-gray-900 mb-2">6</h3>
                <p class="text-xs text-gray-500">In progress</p>
            </div>
        </div>

    </div>

    <!-- Main Content Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        <!-- Recent Activity (2 columns) -->
        <div class="lg:col-span-2 bg-white rounded-2xl shadow-lg border border-gray-200 overflow-hidden">
            <div class="border-b border-gray-200 px-6 py-4 bg-gradient-to-r from-gray-50 to-white">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-black text-gray-900">Recent Activity</h3>
                        <p class="text-sm text-gray-500">Your latest transactions</p>
                    </div>
                    <a href="#" class="text-blue-600 text-sm font-semibold hover:text-blue-700 transition-colors">
                        View All →
                    </a>
                </div>
            </div>

            <div class="divide-y divide-gray-100">
                <div class="px-6 py-4 hover:bg-gray-50 transition-all cursor-pointer group">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold text-gray-900 group-hover:text-blue-600 transition-colors">YouTube Subscribe Task</p>
                                <p class="text-sm text-gray-500">Completed • 2 hours ago</p>
                            </div>
                        </div>
                        <span class="text-green-600 font-black text-lg">+₹25</span>
                    </div>
                </div>

                <div class="px-6 py-4 hover:bg-gray-50 transition-all cursor-pointer group">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold text-gray-900 group-hover:text-blue-600 transition-colors">Instagram Follow Task</p>
                                <p class="text-sm text-gray-500">Completed • 5 hours ago</p>
                            </div>
                        </div>
                        <span class="text-green-600 font-black text-lg">+₹15</span>
                    </div>
                </div>

                <div class="px-6 py-4 hover:bg-gray-50 transition-all cursor-pointer group">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-pink-600 rounded-xl flex items-center justify-center shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold text-gray-900 group-hover:text-blue-600 transition-colors">Withdraw to UPI</p>
                                <p class="text-sm text-gray-500">Success • Yesterday</p>
                            </div>
                        </div>
                        <span class="text-red-500 font-black text-lg">-₹200</span>
                    </div>
                </div>

                <div class="px-6 py-4 hover:bg-gray-50 transition-all cursor-pointer group">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold text-gray-900 group-hover:text-blue-600 transition-colors">Facebook Like Task</p>
                                <p class="text-sm text-gray-500">Completed • 2 days ago</p>
                            </div>
                        </div>
                        <span class="text-green-600 font-black text-lg">+₹10</span>
                    </div>
                </div>

                <div class="px-6 py-4 hover:bg-gray-50 transition-all cursor-pointer group">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold text-gray-900 group-hover:text-blue-600 transition-colors">Twitter Retweet Task</p>
                                <p class="text-sm text-gray-500">Completed • 3 days ago</p>
                            </div>
                        </div>
                        <span class="text-green-600 font-black text-lg">+₹12</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar Cards -->
        <div class="space-y-6">
            
            <!-- Quick Stats -->
            <div class="bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl shadow-xl p-6 text-white">
                <h3 class="text-lg font-black mb-4">This Week</h3>
                <div class="space-y-4">
                    <div class="flex justify-between items-center">
                        <span class="text-indigo-100">Tasks Done</span>
                        <span class="font-black text-2xl">12</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-indigo-100">Earned</span>
                        <span class="font-black text-2xl">₹250</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-indigo-100">Success Rate</span>
                        <span class="font-black text-2xl">100%</span>
                    </div>
                </div>
                <div class="mt-6 pt-6 border-t border-white/20">
                    <div class="flex items-center gap-2 text-sm">
                        <svg class="w-5 h-5 text-green-300" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"/>
                        </svg>
                        <span>+34% from last week</span>
                    </div>
                </div>
            </div>

            <!-- Available Tasks -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-200 overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-200 bg-gradient-to-r from-gray-50 to-white">
                    <h3 class="text-lg font-black text-gray-900">Available Tasks</h3>
                    <p class="text-sm text-gray-500">Start earning now</p>
                </div>
                <div class="p-6 space-y-4">
                    <div class="flex items-center justify-between p-4 bg-blue-50 rounded-xl hover:bg-blue-100 transition-all cursor-pointer group">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073z"/></svg>
                            </div>
                            <div>
                                <p class="font-bold text-sm text-gray-900 group-hover:text-blue-600 transition-colors">Instagram</p>
                                <p class="text-xs text-gray-500">8 tasks</p>
                            </div>
                        </div>
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-blue-600 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>

                    <div class="flex items-center justify-between p-4 bg-red-50 rounded-xl hover:bg-red-100 transition-all cursor-pointer group">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-gradient-to-br from-red-500 to-red-600 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                            </div>
                            <div>
                                <p class="font-bold text-sm text-gray-900 group-hover:text-red-600 transition-colors">YouTube</p>
                                <p class="text-xs text-gray-500">12 tasks</p>
                            </div>
                        </div>
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-red-600 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>

                    <div class="flex items-center justify-between p-4 bg-purple-50 rounded-xl hover:bg-purple-100 transition-all cursor-pointer group">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-purple-600 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                            </div>
                            <div>
                                <p class="font-bold text-sm text-gray-900 group-hover:text-purple-600 transition-colors">Facebook</p>
                                <p class="text-xs text-gray-500">6 tasks</p>
                            </div>
                        </div>
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-purple-600 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Referral Card -->
            <a href="{{ route('user.dashboard.referral') }}"
   class="block bg-gradient-to-br from-yellow-400 via-orange-500 to-red-500 
          rounded-2xl shadow-xl p-6 text-white hover:scale-105 transition-all">

    <div class="flex items-center gap-3 mb-4">
        <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
            </svg>
        </div>

        <div>
            <h3 class="text-lg font-black">Refer & Earn</h3>
            <p class="text-sm text-white/80">₹50 per friend</p>
        </div>
    </div>

    <p class="text-sm mb-4 text-white/90">
        Invite friends and earn ₹50 for each successful referral!
    </p>

    <div class="w-full bg-white text-orange-600 px-4 py-3 rounded-xl font-bold text-center hover:bg-white/90 transition-all shadow-lg">
        Invite Friends
    </div>

</a>

        </div>

    </div>

</div>
@endsection