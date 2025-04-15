<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white dark:text-white">System Status</h2>
    </x-slot>

    <div class="p-4 space-y-4">
        <div class="bg-white text-white dark:bg-gray-800 p-6 rounded-lg shadow">
            <h3 class="text-lg font-medium">Disk Usage</h3>
            <p>{{ $usedFormatted }} / {{ $totalFormatted }}</p>
        </div>

        <div class="bg-white text-white dark:bg-gray-800 p-6 rounded-lg shadow">
            <h3 class="text-lg font-medium">Queue Jobs</h3>
            <p>{{ $queueCount }} pending jobs</p>
        </div>

        <div class="bg-white text-white dark:bg-gray-800 p-6 rounded-lg shadow">
            <h3 class="text-lg font-medium">App Version</h3>
            <p>{{ $version }}</p>
        </div>
    </div>
</x-app-layout>
