@extends('layout.user.app')

@section('title', 'My Wallet')

@section('content')
<div class="space-y-6">

    <!-- Page Title -->
    <h1 class="text-2xl font-bold mb-6">
        My Wallet 💳
    </h1>

    <!-- Balance Card -->
    <div class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white p-6 rounded-xl shadow">
        <p class="text-sm opacity-80">
            Available Balance
        </p>

        <h2 class="text-3xl font-bold mt-2">
            ₹500
        </h2>

        <button class="mt-4 bg-white text-blue-600 px-4 py-2 rounded font-semibold hover:bg-gray-100">
            Withdraw
        </button>
    </div>

    <!-- Transaction History -->
    <div class="bg-white rounded-lg shadow p-5">

        <h3 class="text-lg font-semibold mb-4">
            Transaction History
        </h3>

        <div class="overflow-x-auto">

            <table class="w-full text-left text-sm">
                <thead>
                    <tr class="border-b">
                        <th class="py-2">Type</th>
                        <th>Details</th>
                        <th>Amount</th>
                        <th>Date</th>
                    </tr>
                </thead>

                <tbody>

                    <!-- Row 1 -->
                    <tr class="border-b">
                        <td class="py-2 font-semibold text-green-600">
                            Credit
                        </td>
                        <td>YouTube Task Completed</td>
                        <td class="text-green-600">
                            +₹10
                        </td>
                        <td class="text-gray-500 text-sm">
                            25 Jan 2026
                        </td>
                    </tr>

                    <!-- Row 2 -->
                    <tr class="border-b">
                        <td class="py-2 font-semibold text-green-600">
                            Credit
                        </td>
                        <td>Instagram Follow</td>
                        <td class="text-green-600">
                            +₹5
                        </td>
                        <td class="text-gray-500 text-sm">
                            24 Jan 2026
                        </td>
                    </tr>

                    <!-- Row 3 -->
                    <tr>
                        <td class="py-2 font-semibold text-red-500">
                            Debit
                        </td>
                        <td>Withdraw to UPI</td>
                        <td class="text-red-500">
                            -₹200
                        </td>
                        <td class="text-gray-500 text-sm">
                            22 Jan 2026
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>

    </div>

</div>
@endsection