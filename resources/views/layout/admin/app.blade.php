<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Creator - Admin')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex">

{{-- Sidebar --}}
<aside class="w-64 bg-gray-900 text-white min-h-screen p-5">
    <h2 class="text-2xl font-bold mb-6">Admin Panel</h2>
    <ul class="space-y-3">
        <li><a href="#" class="block hover:text-indigo-400">Dashboard</a></li>
        <li><a href="#" class="block hover:text-indigo-400">Users</a></li>
        <li><a href="#" class="block hover:text-indigo-400">Creators</a></li>
    </ul>
</aside>

{{-- Content --}}
<main class="flex-1 p-6">
    @yield('content')
</main>

</body>
</html>