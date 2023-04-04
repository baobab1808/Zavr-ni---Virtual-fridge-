@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control', 'style' => 'border-radius:25px; border: 2px solid black; width:350px; ']) !!}>
