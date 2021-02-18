@props(['name', 'show'])

@php
$classes = ($show ?? false)
            ? 'show'
            : '';
@endphp

<div {{ $attributes }} id="collapse{{ $name }}" class="collapse {{ $classes }}" aria-labelledby="headingBootstrap"
    data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
        {{ $slot }}
    </div>
</div>
