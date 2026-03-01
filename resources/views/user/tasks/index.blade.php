@extends('layout.user.app')

@section('title', 'Available Tasks')
@section('page-title', 'Available Tasks')
@section('page-subtitle', 'Complete tasks and earn rewards')

@section('content')
<div class="space-y-6 animate-fade-in">

    <!-- Stats Banner -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl shadow-lg p-5 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-blue-100 text-sm font-semibold mb-1">Available Tasks</p>
                    <h3 class="text-3xl font-black">24</h3>
                </div>
                <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl shadow-lg p-5 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-green-100 text-sm font-semibold mb-1">Completed Today</p>
                    <h3 class="text-3xl font-black">8</h3>
                </div>
                <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-br from-purple-500 to-indigo-600 rounded-2xl shadow-lg p-5 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-purple-100 text-sm font-semibold mb-1">Today's Earnings</p>
                    <h3 class="text-3xl font-black">₹120</h3>
                </div>
                <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-br from-orange-500 to-red-600 rounded-2xl shadow-lg p-5 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-orange-100 text-sm font-semibold mb-1">Success Rate</p>
                    <h3 class="text-3xl font-black">95%</h3>
                </div>
                <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Filter & Search Section -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-5">
        <div class="flex flex-col lg:flex-row gap-4 items-center justify-between">
            
            <!-- Platform Filters -->
            <div class="flex flex-wrap gap-2">
                <button class="filter-btn active" data-filter="all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                    </svg>
                    All Tasks
                </button>
                <button class="filter-btn" data-filter="youtube">
                    <span class="text-red-600">▶</span>
                    YouTube
                </button>
                <button class="filter-btn" data-filter="instagram">
                    <span class="text-pink-600">📷</span>
                    Instagram
                </button>
                <button class="filter-btn" data-filter="facebook">
                    <span class="text-blue-600">f</span>
                    Facebook
                </button>
                <button class="filter-btn" data-filter="twitter">
                    <span class="text-sky-500">𝕏</span>
                    Twitter
                </button>
                <button class="filter-btn" data-filter="tiktok">
                    <span>🎵</span>
                    TikTok
                </button>
            </div>

            <!-- Search & Sort -->
            <div class="flex gap-3 w-full lg:w-auto">
                <div class="relative flex-1 lg:w-64">
                    <input type="text" 
                           placeholder="Search tasks..." 
                           class="w-full pl-10 pr-4 py-2.5 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all outline-none">
                    <svg class="absolute left-3 top-3 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                <select class="px-4 py-2.5 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all outline-none font-semibold text-sm">
                    <option>Sort by: Highest Pay</option>
                    <option>Sort by: Lowest Pay</option>
                    <option>Sort by: Newest</option>
                    <option>Sort by: Popular</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Tasks Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        <!-- YouTube Task 1 -->
        <div class="task-card bg-white rounded-2xl shadow-lg border-2 border-gray-100 hover:border-red-300 hover:shadow-xl transition-all duration-300 overflow-hidden group" data-category="youtube">
            <div class="bg-gradient-to-br from-red-500 to-red-600 p-4 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full blur-2xl"></div>
                <div class="relative flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center shadow-lg">
                            <svg class="w-7 h-7 text-red-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </div>
                        <div class="text-white">
                            <p class="text-sm font-semibold opacity-90">YouTube</p>
                            <p class="text-xs opacity-75">Video Platform</p>
                        </div>
                    </div>
                    <div class="bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full">
                        <span class="text-white text-xs font-bold">NEW</span>
                    </div>
                </div>
            </div>
            
            <div class="p-5">
                <h3 class="text-lg font-black text-gray-900 mb-2">Subscribe to Channel</h3>
                <p class="text-gray-600 text-sm mb-4 line-clamp-2">Subscribe to a popular tech channel and stay subscribed for 7 days to earn rewards.</p>
                
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold">Easy</span>
                    <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-bold flex items-center gap-1">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        2 mins
                    </span>
                </div>

                <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                    <div>
                        <p class="text-xs text-gray-500 font-semibold">Earn</p>
                        <p class="text-2xl font-black text-green-600">₹15</p>
                    </div>
                    <button class="bg-gradient-to-r from-red-600 to-red-700 text-white px-6 py-3 rounded-xl font-bold shadow-lg hover:shadow-xl hover:scale-105 transition-all flex items-center gap-2">
                        Start Task
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Instagram Task 1 -->
        <div class="task-card bg-white rounded-2xl shadow-lg border-2 border-gray-100 hover:border-pink-300 hover:shadow-xl transition-all duration-300 overflow-hidden" data-category="instagram">
            <div class="bg-gradient-to-br from-purple-500 via-pink-500 to-orange-500 p-4 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full blur-2xl"></div>
                <div class="relative flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center shadow-lg">
                            <svg class="w-7 h-7 text-pink-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </div>
                        <div class="text-white">
                            <p class="text-sm font-semibold opacity-90">Instagram</p>
                            <p class="text-xs opacity-75">Photo Platform</p>
                        </div>
                    </div>
                    <div class="bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full">
                        <span class="text-white text-xs font-bold">🔥 HOT</span>
                    </div>
                </div>
            </div>
            
            <div class="p-5">
                <h3 class="text-lg font-black text-gray-900 mb-2">Follow Business Page</h3>
                <p class="text-gray-600 text-sm mb-4 line-clamp-2">Follow a verified business page and engage with their latest posts.</p>
                
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold">Easy</span>
                    <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-bold flex items-center gap-1">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        1 min
                    </span>
                </div>

                <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                    <div>
                        <p class="text-xs text-gray-500 font-semibold">Earn</p>
                        <p class="text-2xl font-black text-green-600">₹8</p>
                    </div>
                    <button class="bg-gradient-to-r from-purple-600 via-pink-600 to-orange-600 text-white px-6 py-3 rounded-xl font-bold shadow-lg hover:shadow-xl hover:scale-105 transition-all flex items-center gap-2">
                        Start Task
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Facebook Task -->
        <div class="task-card bg-white rounded-2xl shadow-lg border-2 border-gray-100 hover:border-blue-300 hover:shadow-xl transition-all duration-300 overflow-hidden" data-category="facebook">
            <div class="bg-gradient-to-br from-blue-600 to-blue-700 p-4 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full blur-2xl"></div>
                <div class="relative flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center shadow-lg">
                            <svg class="w-7 h-7 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </div>
                        <div class="text-white">
                            <p class="text-sm font-semibold opacity-90">Facebook</p>
                            <p class="text-xs opacity-75">Social Network</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="p-5">
                <h3 class="text-lg font-black text-gray-900 mb-2">Like Page & Posts</h3>
                <p class="text-gray-600 text-sm mb-4 line-clamp-2">Like a Facebook business page and interact with their top 3 posts.</p>
                
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold">Easy</span>
                    <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-bold flex items-center gap-1">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        3 mins
                    </span>
                </div>

                <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                    <div>
                        <p class="text-xs text-gray-500 font-semibold">Earn</p>
                        <p class="text-2xl font-black text-green-600">₹6</p>
                    </div>
                    <button class="bg-gradient-to-r from-blue-600 to-blue-700 text-white px-6 py-3 rounded-xl font-bold shadow-lg hover:shadow-xl hover:scale-105 transition-all flex items-center gap-2">
                        Start Task
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Twitter Task -->
        <div class="task-card bg-white rounded-2xl shadow-lg border-2 border-gray-100 hover:border-sky-300 hover:shadow-xl transition-all duration-300 overflow-hidden" data-category="twitter">
            <div class="bg-gradient-to-br from-sky-500 to-sky-600 p-4 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full blur-2xl"></div>
                <div class="relative flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center shadow-lg">
                            <svg class="w-7 h-7 text-sky-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                            </svg>
                        </div>
                        <div class="text-white">
                            <p class="text-sm font-semibold opacity-90">Twitter (X)</p>
                            <p class="text-xs opacity-75">Micro-blogging</p>
                        </div>
                    </div>
                    <div class="bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full">
                        <span class="text-white text-xs font-bold">TRENDING</span>
                    </div>
                </div>
            </div>
            
            <div class="p-5">
                <h3 class="text-lg font-black text-gray-900 mb-2">Retweet & Like Tweet</h3>
                <p class="text-gray-600 text-sm mb-4 line-clamp-2">Retweet a promotional tweet and like it to help boost engagement.</p>
                
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-bold">Medium</span>
                    <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-bold flex items-center gap-1">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        2 mins
                    </span>
                </div>

                <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                    <div>
                        <p class="text-xs text-gray-500 font-semibold">Earn</p>
                        <p class="text-2xl font-black text-green-600">₹7</p>
                    </div>
                    <button class="bg-gradient-to-r from-sky-600 to-sky-700 text-white px-6 py-3 rounded-xl font-bold shadow-lg hover:shadow-xl hover:scale-105 transition-all flex items-center gap-2">
                        Start Task
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- YouTube Task 2 -->
        <div class="task-card bg-white rounded-2xl shadow-lg border-2 border-gray-100 hover:border-red-300 hover:shadow-xl transition-all duration-300 overflow-hidden" data-category="youtube">
            <div class="bg-gradient-to-br from-red-500 to-red-600 p-4 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full blur-2xl"></div>
                <div class="relative flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center shadow-lg">
                            <svg class="w-7 h-7 text-red-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </div>
                        <div class="text-white">
                            <p class="text-sm font-semibold opacity-90">YouTube</p>
                            <p class="text-xs opacity-75">Video Platform</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="p-5">
                <h3 class="text-lg font-black text-gray-900 mb-2">Watch & Comment Video</h3>
                <p class="text-gray-600 text-sm mb-4 line-clamp-2">Watch a 5-minute video completely and leave a genuine comment.</p>
                
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-bold">Medium</span>
                    <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-bold flex items-center gap-1">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        6 mins
                    </span>
                </div>

                <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                    <div>
                        <p class="text-xs text-gray-500 font-semibold">Earn</p>
                        <p class="text-2xl font-black text-green-600">₹20</p>
                    </div>
                    <button class="bg-gradient-to-r from-red-600 to-red-700 text-white px-6 py-3 rounded-xl font-bold shadow-lg hover:shadow-xl hover:scale-105 transition-all flex items-center gap-2">
                        Start Task
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- TikTok Task -->
        <div class="task-card bg-white rounded-2xl shadow-lg border-2 border-gray-100 hover:border-gray-900 hover:shadow-xl transition-all duration-300 overflow-hidden" data-category="tiktok">
            <div class="bg-gradient-to-br from-gray-900 to-black p-4 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full blur-2xl"></div>
                <div class="relative flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center shadow-lg">
                            <span class="text-2xl">🎵</span>
                        </div>
                        <div class="text-white">
                            <p class="text-sm font-semibold opacity-90">TikTok</p>
                            <p class="text-xs opacity-75">Short Videos</p>
                        </div>
                    </div>
                    <div class="bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full">
                        <span class="text-white text-xs font-bold">NEW</span>
                    </div>
                </div>
            </div>
            
            <div class="p-5">
                <h3 class="text-lg font-black text-gray-900 mb-2">Follow & Like Videos</h3>
                <p class="text-gray-600 text-sm mb-4 line-clamp-2">Follow a creator account and like their latest 5 TikTok videos.</p>
                
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold">Easy</span>
                    <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-bold flex items-center gap-1">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        4 mins
                    </span>
                </div>

                <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                    <div>
                        <p class="text-xs text-gray-500 font-semibold">Earn</p>
                        <p class="text-2xl font-black text-green-600">₹12</p>
                    </div>
                    <button class="bg-gradient-to-r from-gray-900 to-black text-white px-6 py-3 rounded-xl font-bold shadow-lg hover:shadow-xl hover:scale-105 transition-all flex items-center gap-2">
                        Start Task
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Instagram Task 2 -->
        <div class="task-card bg-white rounded-2xl shadow-lg border-2 border-gray-100 hover:border-pink-300 hover:shadow-xl transition-all duration-300 overflow-hidden" data-category="instagram">
            <div class="bg-gradient-to-br from-purple-500 via-pink-500 to-orange-500 p-4 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full blur-2xl"></div>
                <div class="relative flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center shadow-lg">
                            <svg class="w-7 h-7 text-pink-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </div>
                        <div class="text-white">
                            <p class="text-sm font-semibold opacity-90">Instagram</p>
                            <p class="text-xs opacity-75">Photo Platform</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="p-5">
                <h3 class="text-lg font-black text-gray-900 mb-2">View Story & React</h3>
                <p class="text-gray-600 text-sm mb-4 line-clamp-2">Watch Instagram stories and react with emojis to brand content.</p>
                
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold">Easy</span>
                    <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-bold flex items-center gap-1">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        1 min
                    </span>
                </div>

                <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                    <div>
                        <p class="text-xs text-gray-500 font-semibold">Earn</p>
                        <p class="text-2xl font-black text-green-600">₹5</p>
                    </div>
                    <button class="bg-gradient-to-r from-purple-600 via-pink-600 to-orange-600 text-white px-6 py-3 rounded-xl font-bold shadow-lg hover:shadow-xl hover:scale-105 transition-all flex items-center gap-2">
                        Start Task
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Facebook Task 2 -->
        <div class="task-card bg-white rounded-2xl shadow-lg border-2 border-gray-100 hover:border-blue-300 hover:shadow-xl transition-all duration-300 overflow-hidden" data-category="facebook">
            <div class="bg-gradient-to-br from-blue-600 to-blue-700 p-4 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full blur-2xl"></div>
                <div class="relative flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center shadow-lg">
                            <svg class="w-7 h-7 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </div>
                        <div class="text-white">
                            <p class="text-sm font-semibold opacity-90">Facebook</p>
                            <p class="text-xs opacity-75">Social Network</p>
                        </div>
                    </div>
                    <div class="bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full">
                        <span class="text-white text-xs font-bold">BONUS</span>
                    </div>
                </div>
            </div>
            
            <div class="p-5">
                <h3 class="text-lg font-black text-gray-900 mb-2">Share Post & Comment</h3>
                <p class="text-gray-600 text-sm mb-4 line-clamp-2">Share a promotional post to your timeline and write a thoughtful comment.</p>
                
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-xs font-bold">Hard</span>
                    <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-bold flex items-center gap-1">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        5 mins
                    </span>
                </div>

                <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                    <div>
                        <p class="text-xs text-gray-500 font-semibold">Earn</p>
                        <p class="text-2xl font-black text-green-600">₹25</p>
                    </div>
                    <button class="bg-gradient-to-r from-blue-600 to-blue-700 text-white px-6 py-3 rounded-xl font-bold shadow-lg hover:shadow-xl hover:scale-105 transition-all flex items-center gap-2">
                        Start Task
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Twitter Task 2 -->
        <div class="task-card bg-white rounded-2xl shadow-lg border-2 border-gray-100 hover:border-sky-300 hover:shadow-xl transition-all duration-300 overflow-hidden" data-category="twitter">
            <div class="bg-gradient-to-br from-sky-500 to-sky-600 p-4 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full blur-2xl"></div>
                <div class="relative flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center shadow-lg">
                            <svg class="w-7 h-7 text-sky-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                            </svg>
                        </div>
                        <div class="text-white">
                            <p class="text-sm font-semibold opacity-90">Twitter (X)</p>
                            <p class="text-xs opacity-75">Micro-blogging</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="p-5">
                <h3 class="text-lg font-black text-gray-900 mb-2">Follow & Engage Profile</h3>
                <p class="text-gray-600 text-sm mb-4 line-clamp-2">Follow a verified account and engage with their last 3 posts.</p>
                
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold">Easy</span>
                    <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-bold flex items-center gap-1">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        3 mins
                    </span>
                </div>

                <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                    <div>
                        <p class="text-xs text-gray-500 font-semibold">Earn</p>
                        <p class="text-2xl font-black text-green-600">₹10</p>
                    </div>
                    <button class="bg-gradient-to-r from-sky-600 to-sky-700 text-white px-6 py-3 rounded-xl font-bold shadow-lg hover:shadow-xl hover:scale-105 transition-all flex items-center gap-2">
                        Start Task
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

    </div>

    <!-- Load More -->
    <div class="text-center py-8">
        <button class="bg-white border-2 border-gray-300 text-gray-700 px-8 py-3 rounded-xl font-bold hover:bg-gray-50 hover:border-blue-500 hover:text-blue-600 transition-all inline-flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
            </svg>
            Load More Tasks
        </button>
    </div>

</div>

<script>
// Filter functionality
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const taskCards = document.querySelectorAll('.task-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Filter tasks
            taskCards.forEach(card => {
                if (filter === 'all' || card.getAttribute('data-category') === filter) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});
</script>

<style>
.filter-btn {
    padding: 0.5rem 1rem;
    border-radius: 0.75rem;
    font-weight: 600;
    font-size: 0.875rem;
    background: #f3f4f6;
    color: #4b5563;
    border: 2px solid transparent;
    transition: all 0.2s;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}
.filter-btn:hover {
    background: #e5e7eb;
    transform: translateY(-2px);
}
.filter-btn.active {
    background: linear-gradient(135deg, #3b82f6 0%, #6366f1 100%);
    color: white;
    border-color: #3b82f6;
    box-shadow: 0 4px 6px -1px rgba(59, 130, 246, 0.3);
}
.animate-fade-in {
    animation: fadeIn 0.5s ease-out;
}
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>

@endsection