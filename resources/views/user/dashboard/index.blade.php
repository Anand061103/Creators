@extends('layout.user.app')

@section('title', 'Dashboard')

@section('content')
<div class="space-y-6">

    <!-- Page Title -->
    <div>
        <h1 class="text-2xl font-bold text-gray-800">
            User Dashboard 👋
        </h1>
        <p class="text-sm text-gray-500">
            Overview of your activity
        </p>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

        <!-- Wallet Balance -->
        <div class="bg-white rounded-xl shadow p-6">
            <p class="text-sm text-gray-500 mb-1">
                Wallet Balance
            </p>
            <h2 class="text-2xl font-bold text-indigo-600">
                ₹500
            </h2>
        </div>

        <!-- Total Earnings -->
        <div class="bg-white rounded-xl shadow p-6">
            <p class="text-sm text-gray-500 mb-1">
                Total Earnings
            </p>
            <h2 class="text-2xl font-bold text-green-600">
                ₹1,250
            </h2>
        </div>

        <!-- Completed Tasks -->
        <div class="bg-white rounded-xl shadow p-6">
            <p class="text-sm text-gray-500 mb-1">
                Tasks Completed
            </p>
            <h2 class="text-2xl font-bold text-blue-600">
                42
            </h2>
        </div>

        <!-- Pending Tasks -->
        <div class="bg-white rounded-xl shadow p-6">
            <p class="text-sm text-gray-500 mb-1">
                Pending Tasks
            </p>
            <h2 class="text-2xl font-bold text-yellow-600">
                6
            </h2>
        </div>

    </div>

    <!-- Quick Actions -->
    <div class="flex flex-wrap gap-4">
        <a href="{{ route('user.tasks.index') }}" class="px-5 py-2 bg-indigo-600 text-white rounded-lg text-sm hover:bg-indigo-700">
            View Tasks
        </a>

        <a href="{{ route('user.wallet.index') }}" class="px-5 py-2 bg-blue-600 text-white rounded-lg text-sm hover:bg-blue-700">
            Wallet
        </a>

        <a href="{{ route('user.kyc.index') }}" class="px-5 py-2 bg-gray-800 text-white rounded-lg text-sm hover:bg-gray-900">
            KYC
        </a>
    </div>

    <!-- Recent Activity -->
    <div class="bg-white rounded-xl shadow">

        <div class="border-b px-6 py-4">
            <h3 class="text-lg font-semibold text-gray-800">
                Recent Activity
            </h3>
        </div>

        <div class="divide-y">

            <div class="px-6 py-4 flex justify-between">
                <span>YouTube Task Completed</span>
                <span class="text-green-600 font-medium">+₹10</span>
            </div>

            <div class="px-6 py-4 flex justify-between">
                <span>Instagram Follow Task</span>
                <span class="text-green-600 font-medium">+₹5</span>
            </div>

            <div class="px-6 py-4 flex justify-between">
                <span>Withdraw to UPI</span>
                <span class="text-red-500 font-medium">-₹200</span>
            </div>

        </div>

    </div>

</div>
@endsection