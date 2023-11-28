@props(['name', 'id', 'placeholder' => "", 'type' => 'text', 'fondo' => '#c237db', 'color' => '#F23078'])

<style>
  input[type={{$type}}] {
    font-size: 1.125rem;
    border-radius: 0.375rem;
    border-width: 0px;
    padding: 0.5rem 0.375rem;
    margin-top: 0.375rem;
    display: block;
    width: calc(100% - 0.75rem);
    box-shadow: 0px 0px 6px rgba(0, 0, 0, 0.15);
  }

  input[type={{$type}}]:focus {
    outline: none;
  }

  input[type={{$type}}]::placeholder {
    color: #78778C;
  }
</style>

<input type="{{$type}}" name="{{$name}}" id="{{$id}}" placeholder="{{$placeholder}}"/>