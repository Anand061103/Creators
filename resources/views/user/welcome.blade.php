@extends('layout.user.app')

@section('title', 'Welcome')

@section('content')
<div class="bg-gray-50 min-h-screen">

    {{-- Hero Section --}}
    <section class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white">
        <div class="max-w-6xl mx-auto px-6 py-20 text-center">

            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Earn Money by Completing Simple Tasks 💰
            </h1>

            <p class="text-lg opacity-90 mb-8">
                Follow, Like, Subscribe & Get Paid Instantly
            </p>

            <div class="flex justify-center gap-4">
                <a href="{{ route('register.create') }}"                   
                    class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100">
                    Get Started
                </a>

                <a href="{{ route('login') }}"
                   class="border border-white px-6 py-3 rounded-lg hover:bg-white hover:text-blue-600">
                    Login
                </a>
            </div>

        </div>
    </section>

    {{-- Features --}}
    <section class="max-w-6xl mx-auto px-6 py-16">

        <h2 class="text-3xl font-bold text-center mb-12">
            Why Choose Us? 🚀
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <div class="bg-white p-6 rounded-lg shadow text-center">
                <h3 class="font-semibold text-lg mb-2">Easy Tasks</h3>
                <p class="text-gray-600">
                    Simple social media tasks anyone can do.
                </p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow text-center">
                <h3 class="font-semibold text-lg mb-2">Fast Payments</h3>
                <p class="text-gray-600">
                    Withdraw your money instantly via UPI.
                </p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow text-center">
                <h3 class="font-semibold text-lg mb-2">Trusted Platform</h3>
                <p class="text-gray-600">
                    Thousands of users earning daily.
                </p>
            </div>

        </div>

    </section>

    {{-- How It Works --}}
    <section class="bg-white py-16">

        <div class="max-w-6xl mx-auto px-6">

            <h2 class="text-3xl font-bold text-center mb-12">
                How It Works ⚙️
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-center">

                <div>
                    <div class="text-4xl mb-3">📝</div>
                    <h4 class="font-semibold">Register</h4>
                    <p class="text-gray-600 text-sm">
                        Create your free account
                    </p>
                </div>

                <div>
                    <div class="text-4xl mb-3">📋</div>
                    <h4 class="font-semibold">Choose Task</h4>
                    <p class="text-gray-600 text-sm">
                        Select from available tasks
                    </p>
                </div>

                <div>
                    <div class="text-4xl mb-3">✅</div>
                    <h4 class="font-semibold">Complete</h4>
                    <p class="text-gray-600 text-sm">
                        Follow rules & submit proof
                    </p>
                </div>

                <div>
                    <div class="text-4xl mb-3">💸</div>
                    <h4 class="font-semibold">Earn</h4>
                    <p class="text-gray-600 text-sm">
                        Get paid instantly
                    </p>
                </div>

            </div>

        </div>
    </section>

    {{-- Footer --}}
    <footer class="bg-gray-900 text-white py-6 text-center">
        <p class="text-sm">
            © 2026 Creators Platform. All Rights Reserved.
        </p>
    </footer>

</div>
@endsection