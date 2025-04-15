<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="px-4 py-6 sm:px-6 lg:px-8">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800 dark:text-white">Welcome back, Admin 👋</h1>
            <p class="text-gray-500 dark:text-gray-300">Here's what's happening today.</p>
        </div>
    
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <!-- Users -->
            <div class="rounded-2xl bg-white dark:bg-gray-800 p-6 shadow-md">
                <div class="flex items-center space-x-4">
                    <div class="bg-blue-100 text-blue-600 p-3 rounded-full">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-4-4h-1M7 20h10M4 15a4 4 0 014-4h1m10 0a4 4 0 01-4 4h-1m-5 0a4 4 0 01-4-4v-1a4 4 0 014-4h1a4 4 0 014 4v1a4 4 0 01-4 4z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-gray-500 dark:text-gray-300">Users</p>
                        <p class="text-xl font-bold text-gray-800 dark:text-white">1,245</p>
                    </div>
                </div>
            </div>
    
            <!-- Contacts -->
            <div class="rounded-2xl bg-white dark:bg-gray-800 p-6 shadow-md">
                <div class="flex items-center space-x-4">
                    <div class="bg-green-100 text-green-600 p-3 rounded-full">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16h6M4 6h16M4 6v14a2 2 0 002 2h12a2 2 0 002-2V6" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-gray-500 dark:text-gray-300">Contact Forms</p>
                        <p class="text-xl font-bold text-gray-800 dark:text-white">43</p>
                    </div>
                </div>
            </div>
    
            <!-- Tasks -->
            <div class="rounded-2xl bg-white dark:bg-gray-800 p-6 shadow-md">
                <div class="flex items-center space-x-4">
                    <div class="bg-yellow-100 text-yellow-600 p-3 rounded-full">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-gray-500 dark:text-gray-300">Tasks</p>
                        <p class="text-xl font-bold text-gray-800 dark:text-white">78</p>
                    </div>
                </div>
            </div>
    
            <!-- Settings -->
            <div class="rounded-2xl bg-white dark:bg-gray-800 p-6 shadow-md">
                <div class="flex items-center space-x-4">
                    <div class="bg-purple-100 text-purple-600 p-3 rounded-full">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6l4 2m4 2a9 9 0 11-8.25-8.72" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-gray-500 dark:text-gray-300">System Logs</p>
                        <p class="text-xl font-bold text-gray-800 dark:text-white">2,342</p>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="mt-10">
            <h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-4">Recent Activity</h2>
            <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md overflow-x-auto">
                <table class="min-w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Date</th>
                            <th scope="col" class="px-6 py-3">User</th>
                            <th scope="col" class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b dark:border-gray-700">
                            <td class="px-6 py-4">2025-04-11</td>
                            <td class="px-6 py-4">john@example.com</td>
                            <td class="px-6 py-4">Submitted a contact form</td>
                        </tr>
                        <tr class="border-b dark:border-gray-700">
                            <td class="px-6 py-4">2025-04-10</td>
                            <td class="px-6 py-4">admin@quantora.com</td>
                            <td class="px-6 py-4">Updated a task</td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
