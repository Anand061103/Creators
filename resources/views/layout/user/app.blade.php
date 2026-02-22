<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Creator - User')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 ">

<nav class="bg-white shadow px-6 py-4 flex justify-between">
    <h1 class="text-xl font-bold text-indigo-600">Creator</h1>
    <div class="space-x-4">
        <a href="/login" class="text-gray-600 hover:text-indigo-600">Login</a>
        <a href="/register" class="text-gray-600 hover:text-indigo-600">Register</a>
    </div>
</nav>

<main class="p-6">
    @yield('content')
</main>

</body>
</html>