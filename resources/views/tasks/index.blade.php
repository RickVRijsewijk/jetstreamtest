<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tasks List') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4">
                <div class="overflow-x-auto bg-dark shadow rounded-2xl">
                  <table class="min-w-full text-sm text-left text-white">
                    <thead class="bg-gray-900 text-xs uppercase text-white">
                      <tr>
                        <th scope="col" class="px-6 py-4">#</th>
                        <th scope="col" class="px-6 py-4">Description</th>
                        <th scope="col" class="px-6 py-4">Actions</th>
                      </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ($tasks as $task)
                        <tr class="hover:bg-gray-300 transition">
                            <td class="px-6 py-4">{{$task->id}}</td>
                            <td class="px-6 py-4 font-medium text-white">{{$task->description}}</td>
                            <td class="px-6 py-4 text-green-600 font-semibold">Active</td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>              
        </div>
    </div>
</x-app-layout>
