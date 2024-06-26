@props(['active'])

@php
    $classes =
        $active ?? false
            ? // active
            'block text-cyan-600 transition-colors hover:text-cyan-600 md:text-cyan-300 hover:md:text-yellow-300'
            : 'block text-slate-700 transition-colors hover:text-cyan-600 md:text-white hover:md:text-yellow-300';
@endphp

<li class="max-md:border-b-2 transition-colors max-md:hover:border-cyan-600 max-md:px-3 max-md:py-3">
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</li>
