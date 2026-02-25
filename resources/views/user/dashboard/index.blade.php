@extends('layout.user.app')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <div class="bg-white p-6 rounded-xl shadow">
        <p class="text-sm text-gray-500">Wallet Balance</p>
        <p class="text-2xl font-bold text-indigo-600 mt-2">
            ₹ 12,500
        </p>
    </div>

    <div class="bg-white p-6 rounded-xl shadow">
        <p class="text-sm text-gray-500">Account Status</p>
        <p class="mt-2 font-semibold text-green-600">
            Active
        </p>
    </div>

    <div class="bg-white p-6 rounded-xl shadow">
        <p class="text-sm text-gray-500">Role</p>
        <p class="mt-2 font-semibold text-gray-700">
            User
        </p>
    </div>

</div>
@endsection