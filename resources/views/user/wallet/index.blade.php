@php
$today = $transactions->where('type','credit')
    ->where('created_at','>=', now()->startOfDay())
    ->sum('amount');

$week = $transactions->where('type','credit')
    ->where('created_at','>=', now()->startOfWeek())
    ->sum('amount');

$month = $transactions->where('type','credit')
    ->where('created_at','>=', now()->startOfMonth())
    ->sum('amount');

$pending = $transactions->where('status','pending')->sum('amount');
@endphp

@extends('layout.user.app')

@section('title', 'My Wallet')
@section('page-title', 'My Wallet')
@section('page-subtitle', 'Manage your earnings and transactions')

@section('content')
<div class="space-y-6 animate-fade-in">

    <!-- Balance Card with Actions -->
    <div class="relative bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-700 rounded-3xl shadow-2xl overflow-hidden">
        <!-- Background Orbs -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full blur-3xl"></div>
        
        <div class="relative z-10 p-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                
                <!-- Balance Section -->
                <div class="lg:col-span-2">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center border border-white/30">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-blue-100 text-sm font-semibold">Available Balance</p>
                            <p class="text-white/70 text-xs">Updated just now</p>
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <h2 class="text-5xl font-black text-white mb-2">₹{{ number_format($wallet->balance ?? 0, 2) }}</h2>
                        <div class="flex items-center gap-2">
                            <div class="bg-green-500/30 backdrop-blur-sm px-3 py-1 rounded-full flex items-center gap-1 border border-green-400/50">
                                <svg class="w-4 h-4 text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                </svg>
                                <span class="text-sm font-bold text-green-200">+15.3%</span>
                            </div>
                            <span class="text-blue-100 text-sm">vs last month</span>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="flex flex-wrap gap-3">
                        <button class="bg-white text-blue-600 px-6 py-3 rounded-xl font-bold shadow-lg hover:shadow-xl hover:scale-105 transition-all flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                            </svg>
                            Add Money
                        </button>
                        <button class="bg-white/20 backdrop-blur-sm text-white px-6 py-3 rounded-xl font-bold border border-white/30 hover:bg-white/30 transition-all flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Withdraw
                        </button>
                        <button class="bg-white/20 backdrop-blur-sm text-white px-6 py-3 rounded-xl font-bold border border-white/30 hover:bg-white/30 transition-all flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>
                            </svg>
                            Transfer
                        </button>
                    </div>
                </div>

                <!-- Mini Stats -->
                <div class="space-y-4">
                    <div class="bg-white/20 backdrop-blur-sm rounded-2xl p-4 border border-white/30">
                        <div class="flex items-center justify-between mb-2">
                            <p class="text-blue-100 text-sm font-semibold">Total Earned</p>
                            <svg class="w-5 h-5 text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                            </svg>
                        </div>
                        <p class="text-2xl font-black text-white">₹{{ number_format($wallet->total_earned ?? 0, 2) }}</p>
                    </div>
                    
                    <div class="bg-white/20 backdrop-blur-sm rounded-2xl p-4 border border-white/30">
                        <div class="flex items-center justify-between mb-2">
                            <p class="text-blue-100 text-sm font-semibold">Withdrawn</p>
                            <svg class="w-5 h-5 text-orange-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6"/>
                            </svg>
                        </div>
                        <p class="text-2xl font-black text-white">₹{{ number_format($wallet->total_withdrawn ?? 0, 2) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-5">
            <div class="flex items-center justify-between mb-3">
                <div class="w-12 h-12 bg-gradient-to-br from-green-100 to-emerald-100 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
            </div>
            <p class="text-gray-500 text-sm font-semibold mb-1">Today's Earnings</p>
            <p class="text-2xl font-black text-gray-900">₹{{ number_format($today, 2) }}</p>
        </div>

        <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-5">
            <div class="flex items-center justify-between mb-3">
                <div class="w-12 h-12 bg-gradient-to-br from-blue-100 to-indigo-100 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </div>
            </div>
            <p class="text-gray-500 text-sm font-semibold mb-1">This Week</p>
            <p class="text-2xl font-black text-gray-900">₹{{ number_format($week, 2) }}</p>
        </div>

        <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-5">
            <div class="flex items-center justify-between mb-3">
                <div class="w-12 h-12 bg-gradient-to-br from-purple-100 to-pink-100 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
            </div>
            <p class="text-gray-500 text-sm font-semibold mb-1">This Month</p>
            <p class="text-2xl font-black text-gray-900">₹{{ number_format($month, 2) }}</p>
        </div>

        <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-5">
            <div class="flex items-center justify-between mb-3">
                <div class="w-12 h-12 bg-gradient-to-br from-orange-100 to-red-100 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
            </div>
            <p class="text-gray-500 text-sm font-semibold mb-1">Pending</p>
            <p class="text-2xl font-black text-gray-900">₹{{ number_format($pending, 2) }}</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        <!-- Transaction History -->
                    <div class="p-6 space-y-4">
            @forelse($transactions as $transaction)

            @php
            $isCredit = $transaction->type === 'credit';
            @endphp

            <div class="flex items-center gap-4 p-4 
                {{ $isCredit ? 'bg-green-50 border-green-200' : 'bg-red-50 border-red-200' }} 
                rounded-xl border hover:shadow-md transition-all">

                <div class="w-12 h-12 
                    {{ $isCredit ? 'bg-green-500' : 'bg-red-500' }} 
                    rounded-xl flex items-center justify-center flex-shrink-0">

                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="{{ $isCredit ? 'M12 4v16m8-8H4' : 'M20 12H4' }}"/>
                    </svg>
                </div>

                <div class="flex-1 min-w-0">
                    <p class="font-bold text-gray-900">{{ $transaction->title }}</p>
                    <p class="text-sm text-gray-500">{{ $transaction->description }}</p>
                </div>

                <div class="text-right flex-shrink-0">
                    <p class="text-lg font-black 
                        {{ $isCredit ? 'text-green-600' : 'text-red-600' }}">
                        {{ $isCredit ? '+' : '-' }}₹{{ number_format($transaction->amount,2) }}
                    </p>
                    <p class="text-xs text-gray-500">
                        {{ $transaction->created_at->format('M d, Y h:i A') }}
                    </p>
                </div>
            </div>

            @empty
            <p class="text-center text-gray-500">No transactions found.</p>
            @endforelse
            </div>

        <!-- Sidebar -->
        <div class="space-y-6">
            
            <!-- Payment Methods -->
           @forelse($paymentMethods as $method)

            <div class="p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl border-2 border-blue-200">
                <div class="flex items-center justify-between mb-2">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold text-sm">
                                {{ strtoupper($method->type) }}
                            </span>
                        </div>
                        <div>
                            <p class="font-bold text-gray-900 text-sm">
                                {{ ucfirst($method->type) }}
                            </p>
                            <p class="text-xs text-gray-500">
                                {{ $method->upi_id ?? $method->account_number ?? 'N/A' }}
                            </p>
                        </div>
                    </div>

                    @if($method->is_default)
                    <div class="bg-green-500 w-6 h-6 rounded-full flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"/>
                        </svg>
                    </div>
                    @endif
                </div>
            </div>

            @empty
            <p class="text-gray-500 text-sm">No payment methods added.</p>
            @endforelse

            <!-- Quick Stats -->
            <div class="bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl shadow-xl p-6 text-white">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-black text-lg">Quick Withdraw</h3>
                        <p class="text-sm text-green-100">Instant transfer to UPI</p>
                    </div>
                </div>
                <div class="bg-white/20 backdrop-blur-sm rounded-xl p-4 mb-4 border border-white/30">
                    <p class="text-sm text-green-100 mb-2">Minimum: ₹100</p>
                    <p class="text-sm text-green-100">Maximum: ₹10,000/day</p>
                </div>
                <button class="w-full bg-white text-green-600 py-3 rounded-xl font-black hover:shadow-xl transition-all">
                    Withdraw Now
                </button>
            </div>

            <!-- Rewards Program -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-6">
                <h3 class="text-lg font-black text-gray-900 mb-4">Rewards Program</h3>
                <div class="space-y-3">
                    <div class="flex items-center gap-3 p-3 bg-yellow-50 rounded-xl">
                        <span class="text-2xl">🎁</span>
                        <div>
                            <p class="font-bold text-sm text-gray-900">Daily Login Bonus</p>
                            <p class="text-xs text-gray-500">₹5 for 7 days streak</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-3 bg-purple-50 rounded-xl">
                        <span class="text-2xl">🏆</span>
                        <div>
                            <p class="font-bold text-sm text-gray-900">Top Performer</p>
                            <p class="text-xs text-gray-500">Extra ₹100 this week</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<style>
.animate-fade-in {
    animation: fadeIn 0.5s ease-out;
}
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>


<div class="mt-6">
    {{ $transactions->links() }}
</div>
@endsection