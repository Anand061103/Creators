<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register | Creator</title>

    {{-- Tailwind via Vite (no CDN) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<div class="min-h-screen flex items-center justify-center overflow-hidden
            bg-gradient-to-br from-sky-100 via-sky-50 to-white">

    <div class="bg-white rounded-xl shadow-lg w-full max-w-md p-8">

        {{-- Header --}}
        <div class="text-center mb-6">
            <h2 class="text-2xl font-semibold text-gray-900">
                Create Account
            </h2>
            <p class="text-gray-500 text-sm mt-1">
                Start earning by completing simple tasks
            </p>
        </div>

        {{-- Validation Errors --}}
        @if ($errors->any())
            <div class="mb-4 text-sm text-red-600">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Form --}}
        <form action="{{ route('register.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="text-xs text-gray-500">Name</label>
                <input
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    placeholder="Your Name"
                    class="w-full mt-1 px-3 py-2 border rounded-md text-sm
                           focus:ring-2 focus:ring-sky-200 focus:outline-none"
                    required
                >
            </div>

            <div>
                <label class="text-xs text-gray-500">Email</label>
                <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="you@example.com"
                    class="w-full mt-1 px-3 py-2 border rounded-md text-sm
                           focus:ring-2 focus:ring-sky-200 focus:outline-none"
                    required
                >
            </div>

            <div>
                <label class="text-xs text-gray-500">Password</label>
                <input
                    type="password"
                    name="password"
                    placeholder="••••••••"
                    class="w-full mt-1 px-3 py-2 border rounded-md text-sm
                           focus:ring-2 focus:ring-sky-200 focus:outline-none"
                    required
                >
            </div>

            <div>
                <label class="text-xs text-gray-500">Confirm Password</label>
                <input
                    type="password"
                    name="password_confirmation"
                    placeholder="••••••••"
                    class="w-full mt-1 px-3 py-2 border rounded-md text-sm
                           focus:ring-2 focus:ring-sky-200 focus:outline-none"
                    required
                >
            </div>

            <button
                type="submit"
                class="w-full bg-sky-600 text-white py-2 rounded-md text-sm
                       hover:bg-sky-700 transition"
            >
                Register
            </button>
        </form>

        {{-- Footer --}}
        <div class="text-center mt-6 text-xs text-gray-500">
            Already have an account?
            <a href="{{ route('login') }}" class="text-sky-600 font-medium hover:underline">
                Login
            </a>
        </div>

    </div>
</div>

</body>
</html>