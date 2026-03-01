<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Creator - User</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-white shadow-lg">
        <div class="p-6 text-2xl font-bold text-indigo-600 border-b">
            Creator
        </div>

       <nav class="p-4 space-y-2">

    <!-- Dashboard -->
    <a href="{{ route('user.dashboard') }}"
       class="block px-4 py-2 rounded-lg
       {{ request()->routeIs('user.dashboard')
            ? 'bg-gray-200 text-gray-800'
            : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">
        Dashboard
    </a>
    <a href="{{ route('user.tasks.index') }}"
       class="block px-4 py-2 rounded-lg
       {{ request()->routeIs('user.tasks.index')
            ? 'bg-gray-200 text-gray-800'
            : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">
        Tasks
    </a>

    <!-- Wallet -->
    <a href="{{ route('user.wallet.index') }}"
       class="block px-4 py-2 rounded-lg
       {{ request()->routeIs('user.wallet.*')
            ? 'bg-indigo-50 text-indigo-600'
            : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">
        Wallet
    </a>

    <!-- Kyc -->
    <a href="{{ route('user.kyc.index') }}"
       class="block px-4 py-2 rounded-lg
       {{ request()->routeIs('user.kyc.*')
            ? 'bg-indigo-50 text-indigo-600'
            : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">
        KYC
    </a>
    <!-- Withdraw -->
    <a href="{{ route('user.withdraw.index') }}"
       class="block px-4 py-2 rounded-lg
       {{ request()->routeIs('user.withdraw.*')
            ? 'bg-indigo-50 text-indigo-600'
            : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">
        Withdraw
    </a>

    <!-- Profile -->
    <a href="{{ route('user.profile.index') }}"
       class="block px-4 py-2 rounded-lg
       {{ request()->routeIs('user.profile.index')
            ? 'bg-indigo-50 text-indigo-600'
            : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">
        Profile
    </a>

</nav>
    </aside>

    <!-- RIGHT CONTENT -->
    <div class="flex-1 flex flex-col">

        <!-- TOP BAR -->
        <header class="bg-white shadow px-6 py-4 flex justify-between items-center">
            <h1 class="text-lg font-semibold text-gray-800">
                User Dashboard
            </h1>

            <div class="flex items-center gap-4">
                <span class="text-gray-600 text-sm">
                    John Doe
                </span>

                <button class="text-red-500 text-sm hover:underline">
                    Logout
                </button>
            </div>
        </header>

        <!-- PAGE CONTENT -->
        <main class="p-6 flex-1">
            @yield('content')
        </main>

    </div>

</div>

</body>
</html>