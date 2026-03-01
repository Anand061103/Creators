@extends('layout.user.app')

@section('title', 'KYC Verification')

@section('content')
<div class="w-full space-y-6">

    <!-- Page Header -->
    <div>
        <h1 class="text-2xl font-bold text-gray-800 flex items-center gap-2">
            KYC Verification 🪪
        </h1>
        <p class="text-sm text-gray-500">
            Complete your verification to enable withdrawals
        </p>
    </div>

    <!-- Status Bar -->
    <div class="w-full bg-yellow-100 text-yellow-800 px-5 py-3 rounded-lg text-sm">
        Status: Pending Verification
    </div>

    <!-- KYC Card -->
    <div class="w-full bg-white rounded-xl shadow p-6">

        <h3 class="text-lg font-semibold text-gray-800 mb-6">
            Submit KYC Details
        </h3>

        <!-- Responsive Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

            <!-- Document Type -->
            <div>
                <label class="text-sm text-gray-600">Document Type</label>
                <select class="mt-1 w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-indigo-200">
                    <option>Aadhaar Card</option>
                    <option>PAN Card</option>
                    <option>Driving License</option>
                </select>
            </div>

            <!-- Document Number -->
            <div>
                <label class="text-sm text-gray-600">Document Number</label>
                <input type="text"
                       class="mt-1 w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-indigo-200"
                       placeholder="Enter document number">
            </div>

            <!-- Front Image -->
            <div>
                <label class="text-sm text-gray-600">Upload Front Image</label>
                <input type="file"
                       class="mt-1 w-full border rounded-lg px-4 py-2 bg-white">
            </div>

            <!-- Back Image -->
            <div>
                <label class="text-sm text-gray-600">Upload Back Image</label>
                <input type="file"
                       class="mt-1 w-full border rounded-lg px-4 py-2 bg-white">
            </div>

        </div>

        <!-- Action Button -->
        <div class="mt-8">
            <button class="px-8 py-2 bg-indigo-600 text-white rounded-lg text-sm hover:bg-indigo-700">
                Submit KYC
            </button>
        </div>

    </div>

</div>
@endsection