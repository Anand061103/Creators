@extends('layout.user.app')

@section('title', 'Withdraw History')
@section('page-title', 'Withdraw History')
@section('page-subtitle', 'Track your withdrawal requests')

@section('content')

<div class="max-w-6xl mx-auto space-y-8 animate-fade-in">

    <!-- Header Card -->

    <div class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600
                text-white rounded-3xl shadow-xl p-8">

        <h2 class="text-2xl font-bold">
            Withdrawal History
        </h2>

        <p class="text-indigo-100 mt-1">
            View all your withdrawal requests and their status
        </p>

    </div>


    <!-- Withdraw Table -->

    <div class="bg-white rounded-3xl shadow-lg overflow-hidden">

        <table class="w-full text-left">

            <thead class="bg-gray-100 text-gray-600 text-sm">

                <tr>

                    <th class="p-4">#</th>
                    <th class="p-4">Amount</th>
                    <th class="p-4">Method</th>
                    <th class="p-4">Account</th>
                    <th class="p-4">Status</th>
                    <th class="p-4">Date</th>

                </tr>

            </thead>


            <tbody class="divide-y">

                <!-- Row -->

                <tr class="hover:bg-gray-50">

                    <td class="p-4">1</td>

                    <td class="p-4 font-semibold text-gray-800">
                        ₹2,500
                    </td>

                    <td class="p-4">
                        UPI
                    </td>

                    <td class="p-4">
                        anand@upi
                    </td>

                    <td class="p-4">

                        <span class="px-3 py-1 text-xs rounded-full
                                     bg-yellow-100 text-yellow-700">

                            Pending

                        </span>

                    </td>

                    <td class="p-4 text-gray-500">
                        2 Mar 2026
                    </td>

                </tr>


                <!-- Row -->

                <tr class="hover:bg-gray-50">

                    <td class="p-4">2</td>

                    <td class="p-4 font-semibold text-gray-800">
                        ₹5,000
                    </td>

                    <td class="p-4">
                        Bank Transfer
                    </td>

                    <td class="p-4">
                        ****2345
                    </td>

                    <td class="p-4">

                        <span class="px-3 py-1 text-xs rounded-full
                                     bg-green-100 text-green-700">

                            Approved

                        </span>

                    </td>

                    <td class="p-4 text-gray-500">
                        28 Feb 2026
                    </td>

                </tr>


                <!-- Row -->

                <tr class="hover:bg-gray-50">

                    <td class="p-4">3</td>

                    <td class="p-4 font-semibold text-gray-800">
                        ₹1,000
                    </td>

                    <td class="p-4">
                        Paytm
                    </td>

                    <td class="p-4">
                        98XXXXXX12
                    </td>

                    <td class="p-4">

                        <span class="px-3 py-1 text-xs rounded-full
                                     bg-red-100 text-red-700">

                            Rejected

                        </span>

                    </td>

                    <td class="p-4 text-gray-500">
                        25 Feb 2026
                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>

@endsection