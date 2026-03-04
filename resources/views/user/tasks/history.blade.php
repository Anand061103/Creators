@extends('layout.user.app')

@section('title', 'Task History')
@section('page-title', 'Task History')
@section('page-subtitle', 'Track your completed and pending tasks')

@section('content')
<div class="space-y-6 animate-fade-in">

    <!-- Stats Banner -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <div class="bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl shadow-lg p-5 text-white">
            <p class="text-green-100 text-sm font-semibold mb-1">Total Completed</p>
            <h3 class="text-3xl font-black">42</h3>
        </div>

        <div class="bg-gradient-to-br from-yellow-500 to-orange-500 rounded-2xl shadow-lg p-5 text-white">
            <p class="text-yellow-100 text-sm font-semibold mb-1">Pending Review</p>
            <h3 class="text-3xl font-black">6</h3>
        </div>

        <div class="bg-gradient-to-br from-red-500 to-pink-600 rounded-2xl shadow-lg p-5 text-white">
            <p class="text-red-100 text-sm font-semibold mb-1">Rejected</p>
            <h3 class="text-3xl font-black">3</h3>
        </div>

        <div class="bg-gradient-to-br from-purple-500 to-indigo-600 rounded-2xl shadow-lg p-5 text-white">
            <p class="text-purple-100 text-sm font-semibold mb-1">Total Earned</p>
            <h3 class="text-3xl font-black">₹1,250</h3>
        </div>
    </div>

    <!-- Tabs -->
   <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-4">
    <div class="flex gap-3 flex-wrap">
        <button class="history-tab active" data-tab="all">All Tasks</button>
        <button class="history-tab" data-tab="completed">Completed</button>
        <button class="history-tab" data-tab="pending">Pending</button>
        <button class="history-tab" data-tab="rejected">Rejected</button>
    </div>
</div>

    <!-- History Table -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-200 overflow-hidden">

        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left">
                <thead class="bg-gray-50 text-gray-600 uppercase text-xs font-bold">
                    <tr>
                        <th class="px-6 py-4">Task</th>
                        <th class="px-6 py-4">Platform</th>
                        <th class="px-6 py-4">Reward</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4">Date</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">

                    <!-- Completed -->
                    <tr class="history-row" data-status="completed">
                        <td class="px-6 py-4 font-semibold">Subscribe to Channel</td>
                        <td class="px-6 py-4 text-red-600 font-semibold">YouTube</td>
                        <td class="px-6 py-4 font-bold text-green-600">+₹15</td>
                        <td class="px-6 py-4">
                            <span class="status completed">Completed</span>
                        </td>
                        <td class="px-6 py-4 text-gray-500">02 Mar 2026</td>
                    </tr>

                    <tr class="history-row" data-status="completed">
                        <td class="px-6 py-4 font-semibold">Follow Business Page</td>
                        <td class="px-6 py-4 text-pink-600 font-semibold">Instagram</td>
                        <td class="px-6 py-4 font-bold text-green-600">+₹8</td>
                        <td class="px-6 py-4">
                            <span class="status completed">Completed</span>
                        </td>
                        <td class="px-6 py-4 text-gray-500">01 Mar 2026</td>
                    </tr>

                    <!-- Pending -->
                    <tr class="history-row hidden" data-status="pending">
                        <td class="px-6 py-4 font-semibold">Watch & Comment Video</td>
                        <td class="px-6 py-4 text-red-600 font-semibold">YouTube</td>
                        <td class="px-6 py-4 font-bold text-yellow-600">₹20</td>
                        <td class="px-6 py-4">
                            <span class="status pending">Pending</span>
                        </td>
                        <td class="px-6 py-4 text-gray-500">03 Mar 2026</td>
                    </tr>

                    <!-- Rejected -->
                    <tr class="history-row hidden" data-status="rejected">
                        <td class="px-6 py-4 font-semibold">Share Post & Comment</td>
                        <td class="px-6 py-4 text-blue-600 font-semibold">Facebook</td>
                        <td class="px-6 py-4 font-bold text-red-500">₹25</td>
                        <td class="px-6 py-4">
                            <span class="status rejected">Rejected</span>
                        </td>
                        <td class="px-6 py-4 text-gray-500">28 Feb 2026</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('.history-tab');
    const rows = document.querySelectorAll('.history-row');

    tabs.forEach(tab => {
        tab.addEventListener('click', function () {
            const target = this.dataset.tab;

            tabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');

            rows.forEach(row => {
                if (target === 'all') {
                    row.classList.remove('hidden');
                } 
                else if (row.dataset.status === target) {
                    row.classList.remove('hidden');
                } 
                else {
                    row.classList.add('hidden');
                }
            });
        });
    });
});
</script>

<style>
.history-tab {
    padding: 0.6rem 1.2rem;
    border-radius: 0.75rem;
    font-weight: 600;
    font-size: 0.875rem;
    background: #f3f4f6;
    color: #4b5563;
    border: 2px solid transparent;
    transition: all 0.2s;
}
.history-tab.active {
    background: linear-gradient(135deg, #3b82f6 0%, #6366f1 100%);
    color: white;
    border-color: #3b82f6;
}
.status {
    padding: 0.4rem 0.9rem;
    border-radius: 9999px;
    font-size: 0.75rem;
    font-weight: 700;
}
.status.completed { background:#dcfce7; color:#166534; }
.status.pending { background:#fef9c3; color:#854d0e; }
.status.rejected { background:#fee2e2; color:#991b1b; }

.animate-fade-in {
    animation: fadeIn 0.5s ease-out;
}
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>

@endsection