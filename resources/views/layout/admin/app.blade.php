<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>@yield('title', 'Admin Dashboard') - Creators Admin</title>

@vite(['resources/css/app.css','resources/js/app.js'])

<style>
@keyframes slideIn {
from { opacity:0; transform:translateX(-20px);}
to { opacity:1; transform:translateX(0);}
}

@keyframes fadeIn {
from { opacity:0;}
to { opacity:1;}
}

.animate-slide-in { animation:slideIn .3s ease-out;}
.animate-fade-in { animation:fadeIn .3s ease-out;}
.sidebar-icon { transition:all .3s ease;}
.sidebar-link:hover .sidebar-icon { transform:translateX(4px);}
</style>

</head>

<body class="bg-gradient-to-br from-gray-50 via-red-50 to-orange-50 antialiased">

<div class="flex min-h-screen">

<!-- SIDEBAR -->
<aside class="w-72 bg-white shadow-2xl border-r border-gray-200 flex flex-col animate-slide-in">

<!-- Logo -->
<div class="p-6 border-b border-gray-200">

<div class="flex items-center space-x-3">

<div class="relative">
<div class="absolute inset-0 bg-gradient-to-br from-red-600 to-orange-600 rounded-xl blur opacity-75"></div>

<div class="relative w-12 h-12 bg-gradient-to-br from-red-600 to-orange-600 rounded-xl flex items-center justify-center shadow-lg">

<svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M5 13l4 4L19 7"/>
</svg>

</div>
</div>

<div>
<h1 class="text-xl font-black text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-orange-600">
Admin Panel
</h1>
<p class="text-xs text-gray-500">Management Dashboard</p>
</div>

</div>

</div>

<!-- NAVIGATION -->
<nav class="flex-1 p-6 space-y-2 overflow-y-auto">

<!-- Dashboard -->
<a href="{{ route('admin.dashboard') }}"
class="sidebar-link group flex items-center gap-3 px-4 py-3 rounded-xl transition-all
{{ request()->routeIs('admin.dashboard')
? 'bg-gradient-to-r from-red-600 to-orange-600 text-white shadow-lg'
: 'text-gray-700 hover:bg-red-50 hover:text-red-600' }}">

<svg class="sidebar-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M3 12l2-2 7-7 7 7 2 2"/>
</svg>

<span class="font-semibold">Dashboard</span>

</a>

<!-- Users -->
<a href="{{ route('admin.users.index') }}"
class="sidebar-link group flex items-center gap-3 px-4 py-3 rounded-xl transition-all
{{ request()->routeIs('admin.users.*')
? 'bg-gradient-to-r from-red-600 to-orange-600 text-white shadow-lg'
: 'text-gray-700 hover:bg-red-50 hover:text-red-600' }}">

<svg class="sidebar-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M16 7a4 4 0 11-8 0"/>
</svg>

<span class="font-semibold">Users</span>

</a>

<!-- Creators -->
<a href="{{ route('admin.creators.index') }}"
class="sidebar-link group flex items-center gap-3 px-4 py-3 rounded-xl transition-all
{{ request()->routeIs('admin.creators.*')
? 'bg-gradient-to-r from-red-600 to-orange-600 text-white shadow-lg'
: 'text-gray-700 hover:bg-red-50 hover:text-red-600' }}">

<svg class="sidebar-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M9 12l2 2 4-4"/>
</svg>

<span class="font-semibold">Creators</span>

</a>

</nav>

<!-- FOOTER -->
<div class="p-6 border-t border-gray-200">

<form method="POST" action="{{ route('logout') }}">
@csrf

<button type="submit"
class="w-full flex items-center justify-center gap-2 bg-white text-gray-700 px-4 py-2 rounded-lg text-sm font-semibold hover:bg-gray-50 transition-all border border-gray-200">

Logout

</button>

</form>

</div>

</aside>

<!-- RIGHT CONTENT -->
<div class="flex-1 flex flex-col overflow-hidden">

<header class="bg-white shadow-sm border-b border-gray-200 px-8 py-4 animate-fade-in">

<div>
<h1 class="text-2xl font-black text-gray-900">
@yield('page-title','Admin Dashboard')
</h1>

<p class="text-sm text-gray-500 mt-1">
@yield('page-subtitle','Manage platform activity')
</p>
</div>

</header>

<main class="flex-1 overflow-y-auto p-8">
@yield('content')
</main>

</div>

</div>

</body>
</html>