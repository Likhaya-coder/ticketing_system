<x-app-layout>
    <div class="flex justify-center items-center min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="w-full sm:max-w-2xl mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <h1 class="text-6xl font-semibold mb-4 text-white text-center">Resolve Ticket</h1>
            <div class="bg-white p-4 shadow-md rounded-md">
                <h2 class="text-lg font-semibold">{{ $ticket->title }}</h2>
                <p class="text-gray-600">{{ $ticket->description }}</p>
                <div class="flex">
                    <form class="mr-2" action="">
                        <x-primary-button class="mt-6">
                            {{ __('update ticket') }}
                        </x-primary-button>
                    </form>
                    <form class="ml-2" method="POST" action="{{route('ticket.destroy', $ticket->id)}}">
                        @csrf
                        @method('delete')
                        <x-primary-button class="mt-6">
                            {{ __('delete ticket') }}
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>