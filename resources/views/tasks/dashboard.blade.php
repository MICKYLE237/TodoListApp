<!-- resources/views/tasks/dashboard.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Task Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-4 lg:px-8">
            <!-- Dashboard Header -->
            <div class="p-6 text-gray-900 dark:text-gray-100 text-center">
                <h1 class="text-2xl font-bold">{{ __("Task Management") }}</h1>
            </div>

            <!-- Navigation Links -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <a href="{{ route('tasks.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white text-center p-4 rounded-lg shadow-md transition duration-300">
                    <h3 class="text-lg font-medium">{{ __('Add New Task') }}</h3>
                </a>
                <a href="{{ route('tasks.index') }}" class="bg-green-600 hover:bg-green-700 text-white text-center p-4 rounded-lg shadow-md transition duration-300">
                    <h3 class="text-lg font-medium">{{ __('View Tasks') }}</h3>
                </a>
                <a href="{{ route('tasks.stats') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white text-center p-4 rounded-lg shadow-md transition duration-300">
                    <h3 class="text-lg font-medium">{{ __('Task Statistics') }}</h3>
                </a>
            </div>

            <!-- Task Overview -->
            <div class="mt-6 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-medium">{{ __('Overview') }}</h3>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        {{ __("Manage your tasks efficiently using the links above.") }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
