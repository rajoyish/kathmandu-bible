@props(['active'])

@php
  $classes =
      $active ?? false
          ? // active
          'flex items-center p-2 text-blue-300 focus:text-cyan-300 focus:outline-none'
          : 'flex items-center p-2 text-white focus:text-blue-300 focus:outline-none';
@endphp

<a aria-current="page" {{ $attributes->merge(['class' => $classes]) }}>
  {{ $slot }}
</a>
