@props(['button', 'action' => ""])

<form>
    <h2>{{ $action }}</h2>
    {{ $slot }}
    <x-button value="{{ $button }}"></x-button>
</form>
