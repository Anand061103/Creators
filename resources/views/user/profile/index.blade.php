@extends('layout.user.app')

@section('title', 'My Profile')

@section('content')
<div class="space-y-6 max-w-3xl">

    <!-- Page Title -->
    <div>
        <h1 class="text-2xl font-bold text-gray-800">
            My Profile 👤
        </h1>
        <p class="text-sm text-gray-500">
            Manage your personal information
        </p>
    </div>

    <!-- Profile Card -->
    <div class="bg-white rounded-xl shadow p-6 flex items-center gap-6">

        <!-- Avatar -->
        <div class="w-24 h-24 rounded-full bg-gray-200 flex items-center justify-center text-gray-500 text-xl font-bold">
            JD
        </div>

        <!-- Basic Info -->
        <div>
            <h2 class="text-xl font-semibold text-gray-800">
                John Doe
            </h2>
            <p class="text-gray-500 text-sm">
                johndoe@example.com
            </p>
            <p class="text-gray-500 text-sm">
                +91 98765 43210
            </p>
        </div>

    </div>

    <!-- Update Profile Form (Static) -->
    <div class="bg-white rounded-xl shadow p-6">

        <h3 class="text-lg font-semibold text-gray-800 mb-4">
            Update Profile
        </h3>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

            <div>
                <label class="text-sm text-gray-600">Full Name</label>
                <input type="text"
                       class="mt-1 w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-indigo-200"
                       placeholder="John Doe">
            </div>

            <div>
                <label class="text-sm text-gray-600">Email</label>
                <input type="email"
                       class="mt-1 w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-indigo-200"
                       placeholder="johndoe@example.com">
            </div>

            <div>
                <label class="text-sm text-gray-600">Phone</label>
                <input type="text"
                       class="mt-1 w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-indigo-200"
                       placeholder="+91 98765 43210">
            </div>

            <div>
                <label class="text-sm text-gray-600">Profile Image</label>
                <input type="file"
                       class="mt-1 w-full border rounded-lg px-3 py-2 bg-white">
            </div>

        </div>

        <button class="mt-6 px-6 py-2 bg-indigo-600 text-white rounded-lg text-sm hover:bg-indigo-700">
            Save Changes
        </button>

    </div>

</div>
@endsection