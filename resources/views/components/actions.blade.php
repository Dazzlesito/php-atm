@props(['action' => ""])

<div style="padding: 0rem 0.25rem;">
    <x-sub-title>{{ $action }}</x-sub-title>
    {{ $slot }}
</div>
