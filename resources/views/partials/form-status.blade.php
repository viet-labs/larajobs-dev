@if (session('status'))
    @php
        $status = session('status');
        $backgroundClass = $status['type'] === 'error' ? 'bg-red-600' : 'bg-green-600';
    @endphp
    <div class="px-4 py-3 text-white {{ $backgroundClass }}">
        {{ $status['message'] }}
    </div>
@endif
