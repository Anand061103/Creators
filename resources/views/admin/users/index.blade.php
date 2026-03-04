@extends('layout.admin.app')

@section('title','Users')

@section('page-title','Users')
@section('page-subtitle','Manage all platform users.')

@section('content')

<div class="space-y-8 animate-fade-in">

<!-- Header Card -->
<div class="bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-700 rounded-3xl p-8 text-white shadow-2xl">

<h2 class="text-3xl font-black mb-2">
Users Management 👥
</h2>

<p class="text-blue-100">
View and manage all registered users.
</p>

</div>


<!-- Users Table -->
<div class="bg-white rounded-2xl shadow-lg border border-gray-200 overflow-hidden">

<div class="px-6 py-4 border-b border-gray-200 bg-gradient-to-r from-gray-50 to-white">
<h3 class="text-lg font-black text-gray-900">Users List</h3>
</div>

<table class="w-full">

<thead class="bg-gray-100">

<tr>
<th class="p-4 text-left">ID</th>
<th class="p-4 text-left">Name</th>
<th class="p-4 text-left">Email</th>
<th class="p-4 text-left">Status</th>
<th class="p-4 text-left">Action</th>
</tr>

</thead>

<tbody>

<tr class="border-t hover:bg-gray-50">
<td class="p-4">1</td>
<td class="p-4 font-semibold">Amit</td>
<td class="p-4">amit@gmail.com</td>
<td class="p-4">
<span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold">
Active
</span>
</td>
<td class="p-4">
<button class="text-red-600 font-semibold hover:underline">
Delete
</button>
</td>
</tr>

<tr class="border-t hover:bg-gray-50">
<td class="p-4">2</td>
<td class="p-4 font-semibold">Rahul</td>
<td class="p-4">rahul@gmail.com</td>
<td class="p-4">
<span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold">
Active
</span>
</td>
<td class="p-4">
<button class="text-red-600 font-semibold hover:underline">
Delete
</button>
</td>
</tr>

<tr class="border-t hover:bg-gray-50">
<td class="p-4">3</td>
<td class="p-4 font-semibold">Sanjay</td>
<td class="p-4">sanjay@gmail.com</td>
<td class="p-4">
<span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-bold">
Blocked
</span>
</td>
<td class="p-4">
<button class="text-red-600 font-semibold hover:underline">
Delete
</button>
</td>
</tr>

</tbody>

</table>

</div>

</div>

@endsection