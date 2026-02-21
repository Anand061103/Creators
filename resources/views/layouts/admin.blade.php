<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body x-data="{ darkMode: false }"
      :class="darkMode ? 'bg-gray-900 text-white' : 'bg-gray-100'">

<div x-data="{ open: true }" class="flex h-screen">

    <!-- Sidebar -->
    <div :class="darkMode ? 'bg-gray-800' : 'bg-gray-900'"
         class="bg-gray-900 text-white p-5 transition-all duration-300">
         <h1 class="text-2xl font-bold mb-6">Admin Panel</h1>

        <ul class="space-y-3">

            <!-- Dashboard -->
            <li>
                <a href="{{ route('dashboard') }}"
                   class="flex items-center gap-3 p-2 rounded transition-all duration-200
                   {{ request()->routeIs('dashboard') ? 'bg-gray-700 border-l-4 border-blue-500' : 'hover:bg-gray-700' }}">

                    <svg class="w-5 h-5" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-width="2"
                         d="M3 10h4v11H3V10zm7-7h4v18h-4V3zm7 4h4v14h-4V7z"/>
                    </svg>

                    <span x-show="open" x-transition>Dashboard</span>
                </a>
            </li>

            <!-- Users -->
            <li>
                <a href="{{ route('users') }}"
                   class="flex items-center gap-3 p-2 rounded transition-all duration-200
                   {{ request()->routeIs('users') ? 'bg-gray-700 border-l-4 border-blue-500' : 'hover:bg-gray-700' }}">

                    <svg class="w-5 h-5" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-width="2"
                         d="M17 20h5V4H2v16h5m10 0v-4a4 4 0 00-8 0v4m8 0H9"/>
                    </svg>

                    <span x-show="open" x-transition>Users</span>
                </a>
            </li>

            <!-- Posts -->
            <li>
                <a href="{{ route('posts') }}"
                   class="flex items-center gap-3 p-2 rounded transition-all duration-200
                   {{ request()->routeIs('posts') ? 'bg-gray-700 border-l-4 border-blue-500' : 'hover:bg-gray-700' }}">

                    <svg class="w-5 h-5" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-width="2"
                         d="M9 12h6m-6 4h6M9 8h6m2 12H7a2 2 0 01-2-2V6
                         a2 2 0 012-2h5l2 2h5a2 2 0 012 2v10a2 2 0 01-2 2z"/>
                    </svg>

                    <span x-show="open" x-transition>Posts</span>
                </a>
            </li>

            <!-- Settings -->
            <li>
                <a href="{{ route('settings') }}"
                   class="flex items-center gap-3 p-2 rounded transition-all duration-200
                   {{ request()->routeIs('settings') ? 'bg-gray-700 border-l-4 border-blue-500' : 'hover:bg-gray-700' }}">

                    <svg class="w-5 h-5" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-width="2"
                         d="M11.049 2.927c.3-.921 1.603-.921 1.902
                         0a1 1 0 00.95.69h1.098c.969 0
                         1.371 1.24.588 1.81l-.89.646a1 1 0
                         00-.364 1.118l.337 1.037c.3.921-.755
                         1.688-1.54 1.118l-.89-.646a1 1 0
                         00-1.176 0l-.89.646c-.784.57-1.838-.197-1.539-1.118l.337-1.037a1
                         1 0 00-.364-1.118l-.89-.646c-.783-.57-.38-1.81.588-1.81h1.098a1
                         1 0 00.95-.69z"/>
                    </svg>

                    <span x-show="open" x-transition>Settings</span>
                </a>
            </li>

        </ul>
    </div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">

     <!-- Navbar -->
<div class="bg-white shadow px-6 py-3 flex justify-between items-center">

    <!-- Left Section -->
    <div class="flex items-center gap-4">

        <!-- Toggle Button -->
        <button @click="open = !open"
                class="text-gray-600 hover:text-black text-xl">
            ☰
        </button>

        <h2 class="text-xl font-semibold">@yield('title')</h2>
    </div>

    <!-- Right Section -->
    <div class="flex items-center gap-6">
        <!-- Dark Mode Toggle -->
        <button @click="darkMode = !darkMode"
                class="text-xl">
            <span x-show="!darkMode">🌙</span>
            <span x-show="darkMode">☀️</span>
        </button>   

        <!-- Search -->
        <div class="hidden md:block">
            <input type="text"
                   placeholder="Search..."
                   class="px-3 py-1 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <!-- Notification Icon -->
        <button class="relative text-gray-600 hover:text-black">
            🔔
            <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs px-1 rounded-full">
                3
            </span>
        </button>

        <!-- Profile Dropdown -->
        <div x-data="{ dropdown: false }" class="relative">

            <button @click="dropdown = !dropdown"
                    class="flex items-center gap-2 focus:outline-none">
                <span>{{ Auth::user()->name }}</span>
                ⌄
            </button>

            <div x-show="dropdown"
                 @click.away="dropdown = false"
                 x-transition
                 class="absolute right-0 mt-2 w-40 bg-white shadow-lg rounded">

                <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                    Profile
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="w-full text-left px-4 py-2 hover:bg-gray-100">
                        Logout
                    </button>
                </form>

            </div>
        </div>

    </div>
</div>

        <!-- Content -->
        <div class="p-6">
            @yield('content')
        </div>

    </div>
</div>

</body>
</html>