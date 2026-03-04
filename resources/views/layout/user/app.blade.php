<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') - Creators</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        @keyframes slideIn {
            from { opacity: 0; transform: translateX(-20px); }
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .animate-slide-in { animation: slideIn 0.3s ease-out; }
        .animate-fade-in { animation: fadeIn 0.3s ease-out; }
        .sidebar-icon { transition: all 0.3s ease; }
        .sidebar-link:hover .sidebar-icon { transform: translateX(4px); }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-50 via-blue-50 to-indigo-50 antialiased">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-72 bg-white shadow-2xl border-r border-gray-200 flex flex-col animate-slide-in">
        <!-- Logo -->
        <div class="p-6 border-b border-gray-200">
            <div class="flex items-center space-x-3">
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-xl blur opacity-75"></div>
                    <div class="relative w-12 h-12 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-xl flex items-center justify-center shadow-lg">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                </div>
                <div>
                    <h1 class="text-xl font-black text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">Creators</h1>
                    <p class="text-xs text-gray-500">Your Dashboard</p>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="flex-1 p-6 space-y-2 overflow-y-auto">
            <a href="{{ route('user.dashboard') }}"
               class="sidebar-link group flex items-center gap-3 px-4 py-3 rounded-xl transition-all
               {{ request()->routeIs('user.dashboard')
                    ? 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-lg shadow-blue-500/30'
                    : 'text-gray-700 hover:bg-blue-50 hover:text-blue-600' }}">
                <svg class="sidebar-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                <span class="font-semibold">Dashboard</span>
                @if(request()->routeIs('user.dashboard'))
                    <div class="ml-auto w-2 h-2 bg-white rounded-full animate-pulse"></div>
                @endif
            </a>

            <a href="{{ route('user.tasks.index') }}"
               class="sidebar-link group flex items-center gap-3 px-4 py-3 rounded-xl transition-all
               {{ request()->routeIs('user.tasks.*')
                    ? 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-lg shadow-blue-500/30'
                    : 'text-gray-700 hover:bg-blue-50 hover:text-blue-600' }}">
                <svg class="sidebar-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                </svg>
                <span class="font-semibold">Tasks</span>
                <span class="ml-auto bg-green-100 text-green-700 text-xs font-bold px-2 py-1 rounded-full">12</span>
            </a>

            <a href="{{ route('user.wallet.index') }}"
               class="sidebar-link group flex items-center gap-3 px-4 py-3 rounded-xl transition-all
               {{ request()->routeIs('user.wallet.*')
                    ? 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-lg shadow-blue-500/30'
                    : 'text-gray-700 hover:bg-blue-50 hover:text-blue-600' }}">
                <svg class="sidebar-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                </svg>
                <span class="font-semibold">Wallet</span>
            </a>

            <a href="{{ route('user.withdraw.index') }}"
               class="sidebar-link group flex items-center gap-3 px-4 py-3 rounded-xl transition-all
               {{ request()->routeIs('user.withdraw.*')
                    ? 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-lg shadow-blue-500/30'
                    : 'text-gray-700 hover:bg-blue-50 hover:text-blue-600' }}">
                <svg class="sidebar-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
                <span class="font-semibold">Withdraw</span>
            </a>

            <a href="{{ route('user.kyc.index') }}"
               class="sidebar-link group flex items-center gap-3 px-4 py-3 rounded-xl transition-all
               {{ request()->routeIs('user.kyc.*')
                    ? 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-lg shadow-blue-500/30'
                    : 'text-gray-700 hover:bg-blue-50 hover:text-blue-600' }}">
                <svg class="sidebar-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                </svg>
                <span class="font-semibold">KYC</span>
                <span class="ml-auto bg-yellow-100 text-yellow-700 text-xs font-bold px-2 py-1 rounded-full">!</span>
            </a>

            <a href="{{ route('user.profile.index') }}"
               class="sidebar-link group flex items-center gap-3 px-4 py-3 rounded-xl transition-all
               {{ request()->routeIs('user.profile.*')
                    ? 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-lg shadow-blue-500/30'
                    : 'text-gray-700 hover:bg-blue-50 hover:text-blue-600' }}">
                <svg class="sidebar-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
                <span class="font-semibold">Profile</span>
            </a>
        </nav>

        <!-- Sidebar Footer -->
        <div class="p-6 border-t border-gray-200">
            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-4 border border-blue-100">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-lg flex items-center justify-center text-white font-bold">
                        JD
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="font-bold text-gray-900 text-sm truncate">John Doe</p>
                        <p class="text-xs text-gray-500 truncate">john@example.com</p>
                    </div>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center justify-center gap-2 bg-white text-gray-700 px-4 py-2 rounded-lg text-sm font-semibold hover:bg-gray-50 transition-all border border-gray-200">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                        </svg>
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </aside>

    <!-- RIGHT CONTENT -->
    <div class="flex-1 flex flex-col overflow-hidden">

        <!-- TOP BAR -->
        <header class="bg-white/80 backdrop-blur-lg shadow-sm border-b border-gray-200 px-8 py-4 animate-fade-in">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-2xl font-black text-gray-900">
                        @yield('page-title', 'Dashboard')
                    </h1>
                    <p class="text-sm text-gray-500 mt-1">
                        @yield('page-subtitle', 'Welcome back! Here\'s what\'s happening.')
                    </p>
                </div>

               <div class="flex items-center gap-4">

    <!-- Notifications -->
    <button class="relative p-2 text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition-all">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
        </svg>
        <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full animate-pulse"></span>
    </button>

    
   {{-- Show only on Tasks pages --}}
  @if(request()->routeIs('user.tasks.*'))
    <a href="{{ route('user.task.history') }}" 
       class="hidden md:inline-flex items-center gap-2 bg-gradient-to-r 
              from-indigo-600 to-purple-600 text-white px-4 py-2 rounded-xl 
              font-semibold shadow-md hover:shadow-lg hover:scale-105 
              transition-all text-sm">

        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2"/>
        </svg>

        History
    </a>
  @endif

    <!-- Wallet Quick View -->
    <div class="hidden md:flex items-center gap-3 bg-gradient-to-r from-green-50 to-emerald-50 px-4 py-2 rounded-xl border border-green-200">
        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
        </svg>
        <div>
            <p class="text-xs text-gray-500">Balance</p>
            <p class="font-bold text-green-600">₹500</p>
        </div>
    </div>

</div>
            </div>
        </header>

        <!-- PAGE CONTENT -->
        <main class="flex-1 overflow-y-auto p-8">
            @yield('content')
        </main>

    </div>

</div>

</body>
</html>