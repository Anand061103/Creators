@extends('layout.user.app')

@section('title', 'Tasks')

@section('content')
<div class="space-y-6">

    <!-- Page Title -->
    <h1 class="text-2xl font-bold">
        Available Tasks 💼
    </h1>

    <!-- Tasks Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">

        <!-- Task Card 1 -->
        <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
            <h2 class="text-lg font-semibold mb-2">
                YouTube
            </h2>

            <p class="text-gray-600 mb-3">
                Subscribe Channel
            </p>

            <div class="flex justify-between items-center">
                <span class="text-green-600 font-bold">
                    ₹10
                </span>

                <button class="bg-blue-600 text-white px-4 py-1 rounded hover:bg-blue-700">
                    Start
                </button>
            </div>
        </div>

        <!-- Task Card 2 -->
        <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
            <h2 class="text-lg font-semibold mb-2">
                Instagram
            </h2>

            <p class="text-gray-600 mb-3">
                Follow Page
            </p>

            <div class="flex justify-between items-center">
                <span class="text-green-600 font-bold">
                    ₹5
                </span>

                <button class="bg-blue-600 text-white px-4 py-1 rounded hover:bg-blue-700">
                    Start
                </button>
            </div>
        </div>

        <!-- Task Card 3 -->
        <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
            <h2 class="text-lg font-semibold mb-2">
                Facebook
            </h2>

            <p class="text-gray-600 mb-3">
                Like Post
            </p>

            <div class="flex justify-between items-center">
                <span class="text-green-600 font-bold">
                    ₹3
                </span>

                <button class="bg-blue-600 text-white px-4 py-1 rounded hover:bg-blue-700">
                    Start
                </button>
            </div>
        </div>

        <!-- Task Card 4 -->
        <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
            <h2 class="text-lg font-semibold mb-2">
                Twitter
            </h2>

            <p class="text-gray-600 mb-3">
                Retweet Tweet
            </p>

            <div class="flex justify-between items-center">
                <span class="text-green-600 font-bold">
                    ₹4
                </span>

                <button class="bg-blue-600 text-white px-4 py-1 rounded hover:bg-blue-700">
                    Start
                </button>
            </div>
        </div>

    </div>

</div>
@endsection