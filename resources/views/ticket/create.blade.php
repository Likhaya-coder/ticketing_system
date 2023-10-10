<x-app-layout>
    <div class="flex justify-center items-center min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="w-full sm:max-w-2xl mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <h2 class="text-2xl font-semibold mb-4 text-white text-center">Log a ticket</h2>
            <form method="POST" action="{{ route('ticket.store') }}" enctype="multipart/form-data">
                @csrf
        
                <!-- ticket title -->
                <div>
                    <x-input-label for="title" :value="__('Title')" />
                    <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" autofocus autocomplete="title" />
                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                </div>
        
                <!-- ticket secription -->
                <div class="mt-4">
                    <x-input-label for="description" :value="__('Description')"/>
                    <x-text-area id="description" class="block mt-1 w-full" name="description" autocomplete="description" />
                    <x-input-error :messages="$errors->get('description')" />
                </div>

                <div class="mt-4">
                    <x-input-label for="attachment" :value="__('Attachment (optional*)')" />
                    <x-file-input id="attachment" class="block mt-1 w-full" name="attachment" autocomplete="attachment" />
                    <x-input-error :messages="$errors->get('attachment')" class="mt-2" />
                </div>

                    <x-primary-button class="mt-6">
                        {{ __('Log ticket') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>