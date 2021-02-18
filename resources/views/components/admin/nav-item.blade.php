@props(['active'])

@php
$classes = ($active ?? false)
            ? 'active'
            : '';
@endphp

<li class="nav-item {{ $classes }}">
    {{ $slot }}
</li>
