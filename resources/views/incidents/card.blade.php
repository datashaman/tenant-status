<div class="p-2 lg:p-4 bg-gray-200 border-b border-gray-200">
    <div>
        <h3 class="inline-block text-lg font-medium text-gray-900">
            <a href="{{ route('incidents.show', ['incident' => $incident]) }}">
                {{ $incident->title }}
            </a>
        </h3>
        <div class="pl-2 pr-2 inline-block rounded bg-red-300">
            {{ __($incident->status) }}
        </div>
    </div>

    <p>
        {{ __("incident-statuses.{$incident->status}") }}
    </p>

    <p>
        {{ __('Posted :time.', ['time' => $incident->created_at->diffForHumans()]) }}
        {{ $incident->created_at->format('M j, G:i T') }} - {{ $incident->resolved_at?->format('M j, G:i T') }}
    </p>
</div>
