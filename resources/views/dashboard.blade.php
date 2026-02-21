@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <div class="bg-white p-6 rounded shadow">
        <h4 class="text-gray-500">Total Users</h4>
        <p class="text-3xl font-bold">120</p>
    </div>

    <div class="bg-white p-6 rounded shadow">
        <h4 class="text-gray-500">Total Posts</h4>
        <p class="text-3xl font-bold">58</p>
    </div>

    <div class="bg-white p-6 rounded shadow">
        <h4 class="text-gray-500">Revenue</h4>
        <p class="text-3xl font-bold">₹45,000</p>
    </div>

</div>

@endsection