<x-app-layout>
    <x-slot name="header">
        {{ __('All Ventures') }}
    </x-slot>

    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        @foreach ($ventures as $venture)
            @include('ventures.card', ['venture' => $venture])
        @endforeach
    </div>
</x-app-layout>
