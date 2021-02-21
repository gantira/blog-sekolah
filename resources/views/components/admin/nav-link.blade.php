@props(['name', 'icon'])

<a {{ $attributes }} class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse{{ $name }}" aria-expanded="true"
    aria-controls="{{ $name }}">
    <i class="{{ $icon }}"></i>
    <span>{{ $name }}</span>
</a>
