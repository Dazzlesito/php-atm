@props(['button', 'action' => ""])

<form>
    <x-sub-title>{{ $action }}</x-sub-title>
    {{ $slot }}
    <x-button value="{{ $button }}"></x-button>
</form>
