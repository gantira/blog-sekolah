@props(['active'])

@php
$classes = ($active ?? false)
            ? 'active'
            : '';
@endphp

<a {{ $attributes }} class="collapse-item {{ $classes }}">
    {{ $slot }}
</a>
