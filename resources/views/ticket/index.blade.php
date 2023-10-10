<x-app-layout>
    <div class="flex justify-center items-center min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="w-full sm:max-w-2xl mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <h1 class="text-6xl font-semibold mb-4 text-white text-center">List of Posts</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                @foreach ($tickets as $ticket)
                    <div class="bg-white p-4 shadow-md rounded-md">
                        <h2 class="text-lg font-semibold">{{ $ticket->title }}</h2>
                        <p class="text-gray-600">{{ $ticket->description }}</p>
                        <form action="{{route('ticket.show', $ticket->id)}}">
                            @csrf
                            <x-primary-button class="mt-6">
                                {{ __('Solve ticket') }}
                            </x-primary-button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>