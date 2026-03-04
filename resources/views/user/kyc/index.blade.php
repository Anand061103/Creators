@extends('layout.user.app')

@section('title', 'KYC Verification')
@section('page-title', 'KYC Verification')
@section('page-subtitle', 'Verify your identity to unlock withdrawals')

@section('content')

<div class="max-w-5xl mx-auto space-y-8 animate-fade-in">

    <!-- Status Card -->
    <div class="relative bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 
                rounded-3xl shadow-xl p-8 text-white overflow-hidden">

        <h2 class="text-2xl font-bold">KYC Verification</h2>
        <p class="text-indigo-100 mt-1">
            Complete verification to unlock withdrawals and wallet features
        </p>

        <div class="mt-6 flex items-center justify-between">

            <span class="px-4 py-2 text-sm font-medium rounded-full 
                        bg-white/20 backdrop-blur-md">
                Status: Pending
            </span>

            <button class="bg-white text-indigo-600 px-5 py-2 rounded-xl font-medium
                           hover:bg-gray-100 transition">
                Start Verification
            </button>

        </div>

    </div>


    <!-- Personal Information -->
    <div class="bg-white rounded-3xl shadow-lg p-8">

        <h3 class="text-xl font-semibold text-gray-800 mb-6">
            Personal Information
        </h3>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div>
                <label class="text-sm text-gray-600">Full Name</label>
                <input type="text"
                    class="w-full mt-1 border rounded-xl px-4 py-2 
                           focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label class="text-sm text-gray-600">Date of Birth</label>
                <input type="date"
                    class="w-full mt-1 border rounded-xl px-4 py-2 
                           focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label class="text-sm text-gray-600">Phone Number</label>
                <input type="text"
                    class="w-full mt-1 border rounded-xl px-4 py-2 
                           focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label class="text-sm text-gray-600">ID Type</label>
                <select
                    class="w-full mt-1 border rounded-xl px-4 py-2 
                           focus:ring-2 focus:ring-indigo-500">
                    <option>Aadhar Card</option>
                    <option>PAN Card</option>
                    <option>Passport</option>
                </select>
            </div>

        </div>

        <div class="mt-6">
            <label class="text-sm text-gray-600">Address</label>
            <textarea rows="3"
                class="w-full mt-1 border rounded-xl px-4 py-2 
                       focus:ring-2 focus:ring-indigo-500"></textarea>
        </div>

    </div>


    <!-- Document Upload -->
    <div class="bg-white rounded-3xl shadow-lg p-8">

        <h3 class="text-xl font-semibold text-gray-800 mb-6">
            Upload Documents
        </h3>

        <div class="grid md:grid-cols-2 gap-6">

            <div class="border-2 border-dashed border-indigo-300 rounded-2xl p-8 text-center
                        hover:bg-indigo-50 transition">

                <p class="text-gray-600 font-medium">
                    Upload Aadhar Front
                </p>

                <input type="file" class="mt-4">

            </div>

            <div class="border-2 border-dashed border-purple-300 rounded-2xl p-8 text-center
                        hover:bg-purple-50 transition">

                <p class="text-gray-600 font-medium">
                    Upload Aadhar Back
                </p>

                <input type="file" class="mt-4">

            </div>

            <div class="border-2 border-dashed border-pink-300 rounded-2xl p-8 text-center
                        hover:bg-pink-50 transition">

                <p class="text-gray-600 font-medium">
                    Upload PAN Card
                </p>

                <input type="file" class="mt-4">

            </div>

            <div class="border-2 border-dashed border-blue-300 rounded-2xl p-8 text-center
                        hover:bg-blue-50 transition">

                <p class="text-gray-600 font-medium">
                    Selfie with ID
                </p>

                <input type="file" class="mt-4">

            </div>

        </div>

        <!-- Submit -->
        <div class="flex justify-end mt-8">

            <button
                class="px-8 py-3 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600
                       text-white rounded-xl shadow-lg hover:scale-105 transition">

                Submit KYC

            </button>

        </div>

    </div>

</div>

@endsection