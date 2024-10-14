<x-app-layout>

    <div class="p-6 text-gray-900 dark:text-gray-100 text-center">
        <h1 class="text-2xl font-bold">{{ __("Task Management") }}</h1>
    </div>

    <!-- Navigation Links -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <a href="{{ route('tasks.index') }}" class="bg-green-600 hover:bg-green-700 text-white text-center p-4 rounded-lg shadow-md transition duration-300">
            <h3 class="text-lg font-medium">{{ __('View Tasks') }}</h3>
        </a>
        <a href="{{ route('tasks.stats') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white text-center p-4 rounded-lg shadow-md transition duration-300">
            <h3 class="text-lg font-medium">{{ __('User Task Statistics') }}</h3>
        </a>
        <a href="{{ route('tasks.create') }}" class="bg-green-600 hover:bg-blue-700 text-white text-center p-4 rounded-lg shadow-md transition duration-300">
            <h3 class="text-lg font-medium">{{ __('Add New Task') }}</h3>
        </a>


    </div>
</x-app-layout>


