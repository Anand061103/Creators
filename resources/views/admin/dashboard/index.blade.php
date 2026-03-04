@extends('layout.admin.app')

@section('title', 'Admin Dashboard')
@section('page-title', 'Admin Dashboard')
@section('page-subtitle', 'Welcome Admin! Manage the platform here.')

@section('content')
<div class="space-y-8 animate-fade-in">

<!-- Welcome Card -->
<div class="relative overflow-hidden bg-gradient-to-br from-red-600 via-orange-600 to-yellow-500 rounded-3xl p-8 text-white shadow-2xl">

<div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
<div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full blur-3xl"></div>

<div class="relative z-10 flex flex-col md:flex-row justify-between items-start md:items-center gap-6">

<div>
<h2 class="text-3xl md:text-4xl font-black mb-2">
Welcome Admin 👑
</h2>

<p class="text-orange-100 text-lg">
Manage users, creators and platform activity.
</p>
</div>

<div class="flex gap-3">

<a href="{{ route('admin.users.index') }}"
class="bg-white text-red-600 px-6 py-3 rounded-xl font-bold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all">
Manage Users
</a>

<a href="{{ route('admin.creators.index') }}"
class="bg-white/20 backdrop-blur-sm text-white px-6 py-3 rounded-xl font-semibold border-2 border-white/30 hover:bg-white/30 transition-all">
View Creators
</a>

</div>

</div>
</div>

<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

<div class="bg-white rounded-2xl shadow-lg p-6">
<p class="text-gray-500 text-sm">Total Users</p>
<h3 class="text-3xl font-black">120</h3>
</div>

<div class="bg-white rounded-2xl shadow-lg p-6">
<p class="text-gray-500 text-sm">Total Creators</p>
<h3 class="text-3xl font-black">45</h3>
</div>

<div class="bg-white rounded-2xl shadow-lg p-6">
<p class="text-gray-500 text-sm">Total Earnings</p>
<h3 class="text-3xl font-black">₹25,000</h3>
</div>

<div class="bg-white rounded-2xl shadow-lg p-6">
<p class="text-gray-500 text-sm">Pending Withdraw</p>
<h3 class="text-3xl font-black">8</h3>
</div>

</div>

<!-- Recent Activity -->
<div class="bg-white rounded-2xl shadow-lg border border-gray-200 overflow-hidden">

<div class="border-b border-gray-200 px-6 py-4 bg-gradient-to-r from-gray-50 to-white">
<h3 class="text-lg font-black text-gray-900">Recent Activity</h3>
<p class="text-sm text-gray-500">Latest platform actions</p>
</div>

<div class="divide-y divide-gray-100">

<div class="px-6 py-4 flex justify-between">
<span>User Rahul registered</span>
<span class="text-gray-500 text-sm">10 min ago</span>
</div>

<div class="px-6 py-4 flex justify-between">
<span>Creator Rohit approved</span>
<span class="text-gray-500 text-sm">1 hour ago</span>
</div>

<div class="px-6 py-4 flex justify-between">
<span>User Amit completed task</span>
<span class="text-gray-500 text-sm">3 hours ago</span>
</div>

<div class="px-6 py-4 flex justify-between">
<span>Withdrawal request submitted</span>
<span class="text-gray-500 text-sm">Yesterday</span>
</div>

</div>

</div>

</div>
@endsection