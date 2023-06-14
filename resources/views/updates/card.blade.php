<div class="mb-2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
        <h3 class="inline-block text-lg font-medium text-gray-900">
            @if ($update->resolve_incident)
                {{ __('Resolved') }}
            @else
                {{ __('Update') }}
            @endif
        </h3>

        <p>
            {{ $update->content }}
        </p>

        <p>
            {{ __('Posted :time.', ['time' => $incident->created_at->diffForHumans()]) }}
            {{ $incident->created_at->format('M j, G:i T') }} - {{ $incident->resolved_at?->format('M j, G:i T') }}
        </p>
    </div>
</div>
