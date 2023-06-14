<x-app-layout>
    <x-slot name="header">
        {{ __('Create update')}}
    </x-slot>

    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="mb-2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                <form method="POST" action="{{ route('updates.store') }}">
                    @csrf

                    <label>
                        {{ __('Content') }}
                        <input type="text" name="content"></input>
                    </label>

                    <input type="submit" value="Submit" />
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
