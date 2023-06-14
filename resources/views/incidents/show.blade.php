<x-app-layout>
    <x-slot name="header">
        <h3 class="inline-block">
            {{ $incident->title }}
        </h3>
        <div class="px-2 inline-block rounded bg-red-300">
            {{ __($incident->status) }}
        </div>

        @if ($incident->status !== 'unresolved')
            <div class="inline-block float-right">
                <a href="{{ route('updates.create') }}">
                    <div class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        {{ __('Create Update') }}
                    </div>
                </a>
            </div>
        @endif
    </x-slot>

    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        @foreach ($incident->updates as $update)
            @include('updates.card', ['update' => $update])
        @endforeach
    </div>
</x-app-layout>
