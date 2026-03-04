@extends('layout.user.app')

@section('title', 'Withdraw')
@section('page-title', 'Withdraw Funds')
@section('page-subtitle', 'Transfer your earnings to your bank account')

@section('content')

<div class="max-w-5xl mx-auto space-y-8 animate-fade-in">

    <!-- Balance Card -->

    <div class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600
                text-white rounded-3xl shadow-xl p-8">

        <h2 class="text-2xl font-bold">
            Available Balance
        </h2>

        <p class="text-3xl font-semibold mt-2">
            ₹12,450
        </p>

        <p class="text-indigo-100 text-sm mt-1">
            Minimum withdrawal ₹500
        </p>

    </div>


    <!-- Withdraw Form -->

    <div class="bg-white rounded-3xl shadow-lg p-8 space-y-6">

        <h3 class="text-xl font-semibold text-gray-800">
            Withdraw Request
        </h3>

        <div class="grid md:grid-cols-2 gap-6">

            <!-- Amount -->

            <div>
                <label class="text-sm text-gray-600">
                    Withdrawal Amount
                </label>

                <input type="number"
                       placeholder="Enter amount"
                       class="w-full mt-1 border rounded-xl px-4 py-2 
                              focus:ring-2 focus:ring-indigo-500">
            </div>


            <!-- Method -->

            <div>
                <label class="text-sm text-gray-600">
                    Payment Method
                </label>

                <select
                    class="w-full mt-1 border rounded-xl px-4 py-2 
                           focus:ring-2 focus:ring-indigo-500">

                    <option>Bank Transfer</option>
                    <option>UPI</option>
                    <option>Paytm</option>

                </select>

            </div>


            <!-- Account Number -->

            <div>
                <label class="text-sm text-gray-600">
                    Account / UPI ID
                </label>

                <input type="text"
                       placeholder="Enter details"
                       class="w-full mt-1 border rounded-xl px-4 py-2 
                              focus:ring-2 focus:ring-indigo-500">
            </div>


            <!-- IFSC -->

            <div>
                <label class="text-sm text-gray-600">
                    IFSC Code
                </label>

                <input type="text"
                       placeholder="Enter IFSC"
                       class="w-full mt-1 border rounded-xl px-4 py-2 
                              focus:ring-2 focus:ring-indigo-500">
            </div>

        </div>


        <!-- Note -->

        <div class="bg-yellow-50 border border-yellow-200 rounded-xl p-4 text-sm text-yellow-700">

            Withdrawals are processed within **24 hours** after approval.

        </div>


        <!-- Submit Button -->

        <div class="flex justify-end">

            <button
                class="px-8 py-3 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600
                       text-white rounded-xl shadow-lg hover:scale-105 transition">

                Submit Withdrawal

            </button>

        </div>

    </div>

</div>

@endsection