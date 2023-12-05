@props(['label', 'id', 'type' => 'text'])

<style>
  input[type={{ $type }}]:focus {
    outline: none;
  }

  input[type={{ $type }}]::placeholder {
    color: #78778C;
  }
</style>

<x-label for="{{ $id }}">{{ $label }}</x-label>
<input type="{{ $type }}" id="{{ $id }}" {{ $attributes }} style="font-size: 1.125rem; border-radius: 0.375rem; border-width: 0px; padding: 0.5rem 0.375rem; margin-top: 0.5rem; display: block; width: calc(100% - 0.75rem); box-shadow: 0px 0px 6px rgba(0, 0, 0, 0.15);"/>
