@php
  $classes = 'text-center text-3xl sm:text-5xl font-bold text-slate-700'
@endphp

<h2 {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</h2>
