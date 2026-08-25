<div x-data="{ open: false }"
     @mouseenter="if (window.innerWidth >= 1280) open = true"
     @mouseleave="if (window.innerWidth >= 1280) open = false"
     @click.outside="open = false"
     class="relative">
    {{ $slot }}
</div>
