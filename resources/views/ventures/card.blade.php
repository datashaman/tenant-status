<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
        <h1 class="text-2xl font-medium text-gray-900">
            {{ $venture->name }}
        </h1>

        <p>{{ __('Created') }} {{ $venture->created_at->format('M j, G:i T') }}</p>
        <p>{{ __('Updated') }} {{ $venture->updated_at->format('M j, G:i T') }}</p>

        <h2 class="mt-8 text-xl font-medium text-gray-900">
            {{ __('Incidents') }}
        </h2>

        @if ($venture->incidents->isNotEmpty())
            @include('incidents.card', ['incident' => $venture->incidents->first()])
        @else
            No incidents to report.
        @endif
    </div>
</div>
