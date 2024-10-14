

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Your Tasks') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-4 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                @if (session('success'))
                    <div class="mb-4 text-green-600 dark:text-green-400">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="mb-4">
                    <a href="{{ route('tasks.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                        {{ __('Create Task') }}
                    </a>
                </div>


                <div class="space-y-4">
                    @foreach ($tasks as $task)
                        <div class="flex justify-between items-center p-4 bg-gray-100 dark:bg-gray-700 rounded-md {{ $task->status == 'completed' ? 'line-through' : '' }}">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">{{ $task->title }}</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400">{{ $task->description }}</p>
                            </div>

                            <div class="flex space-x-2">
                                @if ($task->status != 'completed')
                                    <form action="{{ route('tasks.completed', $task) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="text-green-600 hover:text-green-800">
                                            {{ __('Mark as Completed') }}
                                        </button>
                                    </form>
                                @else
                                    <form action="{{ route('tasks.pending', $task) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="text-yellow-600 hover:text-yellow-800">
                                            {{ __('Mark as Pending') }}
                                        </button>
                                    </form>
                                @endif

                                <a href="{{ route('tasks.edit', $task) }}" class="text-blue-600 hover:text-blue-800">{{ __('Edit') }}</a>

                                <form action="{{ route('tasks.destroy', $task) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800">{{ __('Delete') }}</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-6">
                    {{ $tasks->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
