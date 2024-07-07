@php
    $classes = 'text-center text-3xl sm:text-5xl font-bold text-slate-800 tracking-tight text-balance';
@endphp

<h2 {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</h2>
