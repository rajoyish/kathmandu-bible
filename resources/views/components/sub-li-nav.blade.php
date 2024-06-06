@props(['active'])

@php
    $classes =
        $active ?? false
            ? // active
            'border-b-2 py-3 transition-all hover:border-blue-600 border-cyan-600'
            : 'border-b py-3 transition-all hover:border-cyan-600';
@endphp

<li {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</li>
