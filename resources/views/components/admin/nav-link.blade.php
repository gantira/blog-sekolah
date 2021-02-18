@props(['name'])

<a {{ $attributes }} class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse{{ $name }}" aria-expanded="true"
    aria-controls="{{ $name }}">
    <i class="far fa-fw fa-window-maximize"></i>
    <span>{{ $name }}</span>
</a>
