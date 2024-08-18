@props(['active'])

@php
    $classes =
        $active ?? false
            ? // active
            'flex items-center px-2 py-1.5 font-bold text-white hover:text-blue-300 focus:outline-none xl:text-slate-700 xl:hover:text-blue-500 xl:focus:text-blue-300'
            : 'flex items-center px-2 py-1.5 text-white hover:text-blue-300 focus:outline-none xl:text-slate-700 xl:hover:text-blue-500 xl:focus:text-blue-300';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
