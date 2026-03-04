@extends('layout.user.app')

@section('title', 'Notifications')
@section('page-title', 'Notifications')
@section('page-subtitle', 'Stay updated with your latest activity')

@section('content')

<div class="max-w-5xl mx-auto space-y-6 animate-fade-in">

    <!-- Header Card -->
    <div class="bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600
                text-white rounded-3xl shadow-xl p-8">

        <h2 class="text-2xl font-bold">
            Notifications
        </h2>

        <p class="text-indigo-100 mt-1">
            Check your latest updates and alerts
        </p>

    </div>


    <!-- Notifications List -->

    <div class="space-y-4">

        <!-- Notification Item -->
        <div class="bg-white rounded-2xl shadow-md p-6 flex items-center justify-between
                    hover:shadow-lg transition">

            <div class="flex items-center gap-4">

                <div class="bg-blue-100 text-blue-600 p-3 rounded-xl">
                    💰
                </div>

                <div>
                    <h4 class="font-semibold text-gray-800">
                        Withdrawal Request Submitted
                    </h4>

                    <p class="text-sm text-gray-500">
                        Your withdrawal request is under review.
                    </p>

                    <span class="text-xs text-gray-400">
                        2 minutes ago
                    </span>
                </div>

            </div>

            <span class="px-3 py-1 text-xs rounded-full bg-blue-100 text-blue-600">
                New
            </span>

        </div>


        <!-- Notification -->

        <div class="bg-white rounded-2xl shadow-md p-6 flex items-center gap-4">

            <div class="bg-green-100 text-green-600 p-3 rounded-xl">
                ✔
            </div>

            <div>
                <h4 class="font-semibold text-gray-800">
                    KYC Approved
                </h4>

                <p class="text-sm text-gray-500">
                    Your KYC verification has been approved.
                </p>

                <span class="text-xs text-gray-400">
                    1 hour ago
                </span>
            </div>

        </div>


        <!-- Notification -->

        <div class="bg-white rounded-2xl shadow-md p-6 flex items-center gap-4">

            <div class="bg-yellow-100 text-yellow-600 p-3 rounded-xl">
                ⚠
            </div>

            <div>
                <h4 class="font-semibold text-gray-800">
                    KYC Pending
                </h4>

                <p class="text-sm text-gray-500">
                    Please complete your KYC to enable withdrawals.
                </p>

                <span class="text-xs text-gray-400">
                    Yesterday
                </span>
            </div>

        </div>

    </div>

</div>

@endsection