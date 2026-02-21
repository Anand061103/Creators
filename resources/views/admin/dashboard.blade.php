<x-app-layout>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <!-- Total Users -->
        <div class="bg-white dark:bg-gray-800 shadow rounded-xl p-6 
                    hover:scale-105 transition duration-300">
            <h2 class="text-lg font-semibold text-gray-600 dark:text-gray-300">
                Total Users
            </h2>
            <p class="text-3xl font-bold text-blue-500 mt-2">
                {{ $totalUsers }}
            </p>
        </div>

        <!-- Admin Users -->
        <div class="bg-white dark:bg-gray-800 shadow rounded-xl p-6 
                    hover:scale-105 transition duration-300">
            <h2 class="text-lg font-semibold text-gray-600 dark:text-gray-300">
                Admin Users
            </h2>
            <p class="text-3xl font-bold text-green-500 mt-2">
                {{ $adminUsers }}
            </p>
        </div>

        <!-- Today Users -->
        <div class="bg-white dark:bg-gray-800 shadow rounded-xl p-6 
                    hover:scale-105 transition duration-300">
            <h2 class="text-lg font-semibold text-gray-600 dark:text-gray-300">
                Today Registrations
            </h2>
            <p class="text-3xl font-bold text-red-500 mt-2">
                {{ $todayUsers }}
            </p>
        </div>

    </div>

</x-app-layout>
