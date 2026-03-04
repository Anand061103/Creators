@extends('layout.user.app')

@section('title', 'Support Center')
@section('page-title', 'Support Center')
@section('page-subtitle', 'Need help? Create a support ticket')

@section('content')

<div class="max-w-6xl mx-auto space-y-8 animate-fade-in">

    <!-- Support Header -->

    <div class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600
                text-white rounded-3xl shadow-xl p-8">

        <h2 class="text-2xl font-bold">
            Help & Support
        </h2>

        <p class="text-indigo-100 mt-2">
            If you have any issues, create a support ticket and our team will help you.
        </p>

    </div>


    <!-- Create Ticket Form -->

    <div class="bg-white rounded-3xl shadow-lg p-8 space-y-6">

        <h3 class="text-xl font-semibold text-gray-800">
            Create Support Ticket
        </h3>

        <div class="grid md:grid-cols-2 gap-6">

            <div>
                <label class="text-sm text-gray-600">
                    Subject
                </label>

                <input type="text"
                       placeholder="Enter subject"
                       class="w-full mt-1 border rounded-xl px-4 py-2 focus:ring-2 focus:ring-indigo-500">
            </div>


            <div>
                <label class="text-sm text-gray-600">
                    Category
                </label>

                <select
                    class="w-full mt-1 border rounded-xl px-4 py-2 focus:ring-2 focus:ring-indigo-500">

                    <option>Withdrawal Issue</option>
                    <option>Wallet Problem</option>
                    <option>KYC Verification</option>
                    <option>Other</option>

                </select>

            </div>

        </div>


        <div>
            <label class="text-sm text-gray-600">
                Message
            </label>

            <textarea rows="4"
                      placeholder="Describe your issue..."
                      class="w-full mt-1 border rounded-xl px-4 py-2 focus:ring-2 focus:ring-indigo-500"></textarea>
        </div>


        <div class="flex justify-end">

            <button
                class="px-8 py-3 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600
                       text-white rounded-xl shadow-lg hover:scale-105 transition">

                Submit Ticket

            </button>

        </div>

    </div>


    <!-- Ticket History -->

    <div class="bg-white rounded-3xl shadow-lg overflow-hidden">

        <table class="w-full text-left">

            <thead class="bg-gray-100 text-gray-600 text-sm">

                <tr>

                    <th class="p-4">Ticket ID</th>
                    <th class="p-4">Subject</th>
                    <th class="p-4">Category</th>
                    <th class="p-4">Status</th>
                    <th class="p-4">Date</th>

                </tr>

            </thead>

            <tbody class="divide-y">

                <tr class="hover:bg-gray-50">

                    <td class="p-4 font-medium">
                        #1023
                    </td>

                    <td class="p-4">
                        Withdraw not received
                    </td>

                    <td class="p-4">
                        Withdrawal
                    </td>

                    <td class="p-4">

                        <span class="px-3 py-1 text-xs rounded-full
                                     bg-yellow-100 text-yellow-700">

                            Pending

                        </span>

                    </td>

                    <td class="p-4 text-gray-500">
                        3 Mar 2026
                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>

@endsection