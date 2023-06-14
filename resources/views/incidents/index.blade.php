<x-app-layout>
    <x-slot name="header">
        {{ __('All Incidents') }}
    </x-slot>


    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        @foreach ($incidents as $incident)
            @include('incidents.card', ['incident' => $incident])
        @endforeach
    </div>
</x-app-layout>
