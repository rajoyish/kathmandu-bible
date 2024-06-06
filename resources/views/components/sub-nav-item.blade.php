@props(['active'])

@php
    $classes =
        $active ?? false
            ? // active
            'block text-cyan-600 hover:text-cyan-600 font-bold'
            : 'block text-slate-700 hover:text-cyan-600 ';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
