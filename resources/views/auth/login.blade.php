<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Creator</title>

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
                Welcome back
            </h2>
            <p class="text-gray-500 text-sm mt-1">
                Sign in to your account
            </p>
        </div>

        {{-- Validation Errors --}}
        @if ($errors->any())
            <div class="mb-4 text-sm text-red-600">
                {{ $errors->first() }}
            </div>
        @endif

        {{-- Social Login (UI only) --}}
        <div class="space-y-3 mb-5">
            <button type="button"
                class="w-full flex items-center justify-center gap-3 border rounded-lg py-2 text-sm hover:bg-sky-50">
                <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5 h-5" />
                Continue with Google
            </button>

            <button type="button"
                class="w-full flex items-center justify-center gap-3 border rounded-lg py-2 text-sm hover:bg-sky-50">
                <img src="https://www.svgrepo.com/show/512317/github-142.svg" class="w-5 h-5" />
                Continue with GitHub
            </button>

            <button type="button"
                class="w-full flex items-center justify-center gap-3 border rounded-lg py-2 text-sm hover:bg-sky-50">
                <img src="https://www.svgrepo.com/show/448239/microsoft.svg" class="w-5 h-5" />
                Continue with Microsoft
            </button>
        </div>

        {{-- Divider --}}
        <div class="flex items-center my-5">
            <div class="flex-grow border-t"></div>
            <span class="px-3 text-xs text-gray-400">OR</span>
            <div class="flex-grow border-t"></div>
        </div>

        {{-- Login Form --}}
        <form method="POST" action="{{ route('login.store') }}" class="space-y-4">
            @csrf

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

            <button
                type="submit"
                class="w-full bg-sky-600 text-white py-2 rounded-md text-sm
                       hover:bg-sky-700 transition"
            >
                Sign In
            </button>
        </form>

        {{-- Footer --}}
        <div class="text-center mt-6 text-xs text-gray-500">
            Don’t have an account?
            <a href="{{ route('register.create') }}" class="text-sky-600 font-medium hover:underline">
                Register
            </a>
        </div>

    </div>
</div>

</body>
</html>