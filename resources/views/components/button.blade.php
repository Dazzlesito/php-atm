@props(['value', 'fondo' => '#F23078'])

<style>
  input[type="button"]:hover {
    transition-duration: 0.2s;
    background-color: #32D9D9 !important;
    box-shadow: 0px 0px 8px rgba(50, 217, 217, 1) !important;
  }

  input[type="button"]:active {
    transition-duration: 1ms;
    background-color: #131240 !important;
    box-shadow: 0px 0px 8px rgba(19, 18, 64, 1) !important;
  }
</style>

<input type="button" value="{{ $value }}" style="font-size: 1rem; background-color: {{ $fondo }}; font-weight: 700; border-width: 0px; padding: 0.625rem 0rem; margin: 1.25rem 0rem; border-radius: 0.375rem; color: #F2F2F2; width: 100%; cursor: pointer; box-shadow: 0px 0px 8px rgba(242, 48, 120, 1);"/>
