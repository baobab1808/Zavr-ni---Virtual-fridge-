@props(['value'])

<label {{ $attributes }} style="font-family:'Ribeye Marrow'; font-weight:bold; font-size:30px">
    {{ $value ?? $slot }}
</label>
