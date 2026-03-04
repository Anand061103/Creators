@extends('layout.user.app')

@section('title', 'Referral Program')
@section('page-title', 'Referral Program')
@section('page-subtitle', 'Invite friends and earn rewards')

@section('content')

<div class="max-w-6xl mx-auto space-y-8 animate-fade-in">

    <!-- Referral Header Card -->

    <div class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600
                text-white rounded-3xl shadow-xl p-8">

        <h2 class="text-2xl font-bold">
            Invite Friends & Earn
        </h2>

        <p class="text-indigo-100 mt-2">
            Share your referral link and earn commission when your friends join.
        </p>

    </div>


    <!-- Referral Stats -->

    <div class="grid md:grid-cols-3 gap-6">

        <div class="bg-white rounded-2xl shadow-md p-6 text-center">

            <p class="text-gray-500 text-sm">Total Referrals</p>

            <h3 class="text-3xl font-bold text-indigo-600 mt-2">
                12
            </h3>

        </div>


        <div class="bg-white rounded-2xl shadow-md p-6 text-center">

            <p class="text-gray-500 text-sm">Referral Earnings</p>

            <h3 class="text-3xl font-bold text-green-600 mt-2">
                ₹2,450
            </h3>

        </div>


        <div class="bg-white rounded-2xl shadow-md p-6 text-center">

            <p class="text-gray-500 text-sm">Pending Rewards</p>

            <h3 class="text-3xl font-bold text-yellow-500 mt-2">
                ₹500
            </h3>

        </div>

    </div>


    <!-- Referral Link -->

    <div class="bg-white rounded-3xl shadow-lg p-8 space-y-6">

        <h3 class="text-xl font-semibold text-gray-800">
            Your Referral Link
        </h3>

        <div class="flex flex-col md:flex-row gap-4">

            <input type="text"
                   value="https://yourwebsite.com/register?ref=ANAND123"
                   class="flex-1 border rounded-xl px-4 py-3 text-gray-600">

            <button
                class="px-6 py-3 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600
                       text-white rounded-xl shadow-md hover:scale-105 transition">

                Copy Link

            </button>

        </div>

    </div>


    <!-- Referral List -->

    <div class="bg-white rounded-3xl shadow-lg overflow-hidden">

        <table class="w-full text-left">

            <thead class="bg-gray-100 text-gray-600 text-sm">

                <tr>

                    <th class="p-4">#</th>
                    <th class="p-4">User</th>
                    <th class="p-4">Join Date</th>
                    <th class="p-4">Earning</th>
                    <th class="p-4">Status</th>

                </tr>

            </thead>


            <tbody class="divide-y">

                <tr class="hover:bg-gray-50">

                    <td class="p-4">1</td>

                    <td class="p-4 font-medium text-gray-800">
                        Rahul Sharma
                    </td>

                    <td class="p-4 text-gray-500">
                        1 Mar 2026
                    </td>

                    <td class="p-4 text-green-600 font-semibold">
                        ₹200
                    </td>

                    <td class="p-4">

                        <span class="px-3 py-1 text-xs rounded-full
                                     bg-green-100 text-green-700">

                            Active

                        </span>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>

@endsection