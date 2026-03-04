@extends('layout.admin.app')

@section('title','Creators')

@section('page-title','Creators')
@section('page-subtitle','Manage platform creators.')

@section('content')

<div class="space-y-8 animate-fade-in">

<!-- Header Card -->
<div class="bg-gradient-to-br from-purple-600 via-pink-600 to-red-500 rounded-3xl p-8 text-white shadow-2xl">

<h2 class="text-3xl font-black mb-2">
Creators Management 🎬
</h2>

<p class="text-purple-100">
Approve or manage platform creators.
</p>

</div>


<!-- Creators Table -->
<div class="bg-white rounded-2xl shadow-lg border border-gray-200 overflow-hidden">

<div class="px-6 py-4 border-b border-gray-200 bg-gradient-to-r from-gray-50 to-white">
<h3 class="text-lg font-black text-gray-900">Creators List</h3>
</div>

<table class="w-full">

<thead class="bg-gray-100">

<tr>
<th class="p-4 text-left">ID</th>
<th class="p-4 text-left">Name</th>
<th class="p-4 text-left">Platform</th>
<th class="p-4 text-left">Status</th>
<th class="p-4 text-left">Action</th>
</tr>

</thead>

<tbody>

<tr class="border-t hover:bg-gray-50">
<td class="p-4">1</td>
<td class="p-4 font-semibold">Rohit</td>
<td class="p-4">YouTube</td>
<td class="p-4">
<span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold">
Approved
</span>
</td>
<td class="p-4">
<button class="text-blue-600 font-semibold hover:underline">
View
</button>
</td>
</tr>

<tr class="border-t hover:bg-gray-50">
<td class="p-4">2</td>
<td class="p-4 font-semibold">Ankit</td>
<td class="p-4">Instagram</td>
<td class="p-4">
<span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-bold">
Pending
</span>
</td>
<td class="p-4">
<button class="text-green-600 font-semibold hover:underline">
Approve
</button>
</td>
</tr>

<tr class="border-t hover:bg-gray-50">
<td class="p-4">3</td>
<td class="p-4 font-semibold">Vikas</td>
<td class="p-4">Facebook</td>
<td class="p-4">
<span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold">
Approved
</span>
</td>
<td class="p-4">
<button class="text-blue-600 font-semibold hover:underline">
View
</button>
</td>
</tr>

</tbody>

</table>

</div>

</div>

@endsection