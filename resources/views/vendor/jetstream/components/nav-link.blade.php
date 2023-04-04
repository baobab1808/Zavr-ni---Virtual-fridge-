@props(['active'])

@php
$classes = ($active ?? false)
            ? 'nav-link active font-weight-bolder'
            : 'nav-link';
@endphp

<div class="nav-item">
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</div>
