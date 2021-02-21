@props(['status'])

@php
switch ($status) {
    case 'published':
        $type = 'success';
        break;

    default:
        $type = 'secondary';
        break;
}
@endphp

<span class="badge badge-{{ $type }}">
    {{ $slot }}
</span>
