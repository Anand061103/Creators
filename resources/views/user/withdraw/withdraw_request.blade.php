@extends('layout.user.app')

@section('title', 'Withdraw')

@section('content')
<div class="w-full space-y-6">

    <!-- Page Header -->
    <div>
        <h1 class="text-2xl font-bold text-gray-800">
            Withdraw Money 💸
        </h1>
        <p class="text-sm text-gray-500">
            Request withdrawal to your UPI or bank account
        </p>
    </div>

    <!-- KYC Warning -->
    <div class="w-full bg-yellow-100 text-yellow-800 px-5 py-3 rounded-lg text-sm">
        Note: Withdrawal is allowed only after KYC verification
    </div>

    <!-- Withdraw Card -->
    <div class="w-full bg-white rounded-xl shadow p-6">

        <h3 class="text-lg font-semibold text-gray-800 mb-6">
            Withdraw Request
        </h3>

        <!-- Responsive Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

            <!-- Amount -->
            <div>
                <label class="text-sm text-gray-600">Amount</label>
                <input type="number"
                       class="mt-1 w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-indigo-200"
                       placeholder="Enter amount">
            </div>

            <!-- Method -->
            <div>
                <label class="text-sm text-gray-600">Withdraw Method</label>
                <select class="mt-1 w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-indigo-200">
                    <option>UPI</option>
                    <option>Bank Transfer</option>
                </select>
            </div>

            <!-- Account / UPI -->
            <div class="lg:col-span-2">
                <label class="text-sm text-gray-600">UPI ID / Bank Details</label>
                <input type="text"
                       class="mt-1 w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-indigo-200"
                       placeholder="example@upi or Bank Account Details">
            </div>

        </div>

        <!-- Action -->
        <div class="mt-8">
            <button class="px-8 py-2 bg-indigo-600 text-white rounded-lg text-sm hover:bg-indigo-700">
                Submit Withdraw Request
            </button>
        </div>

    </div>

    <!-- Withdraw History (Static) -->
    <div class="w-full bg-white rounded-xl shadow">

        <div class="border-b px-6 py-4">
            <h3 class="text-lg font-semibold text-gray-800">
                Withdraw History
            </h3>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-50 text-gray-600">
                    <tr>
                        <th class="px-6 py-3 text-left">Amount</th>
                        <th class="px-6 py-3 text-left">Method</th>
                        <th class="px-6 py-3 text-left">Status</th>
                        <th class="px-6 py-3 text-left">Date</th>
                    </tr>
                </thead>

                <tbody class="divide-y">
                    <tr>
                        <td class="px-6 py-4">₹200</td>
                        <td class="px-6 py-4">UPI</td>
                        <td class="px-6 py-4 text-yellow-600">Pending</td>
                        <td class="px-6 py-4 text-gray-500">22 Jan 2026</td>
                    </tr>

                    <tr>
                        <td class="px-6 py-4">₹500</td>
                        <td class="px-6 py-4">Bank</td>
                        <td class="px-6 py-4 text-green-600">Approved</td>
                        <td class="px-6 py-4 text-gray-500">15 Jan 2026</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

</div>
@endsection