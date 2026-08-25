<div x-show="open"
    x-transition:enter="transition ease-out duration-100"
    x-transition:enter-start="transform opacity-0 scale-95"
    x-transition:enter-end="transform opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-75"
    x-transition:leave-start="transform opacity-100 scale-100"
    x-transition:leave-end="transform opacity-0 scale-95"
    class="relative xl:absolute left-0 top-full z-10 w-full xl:w-72 mt-1 xl:mt-2 xl:rounded-lg xl:bg-white xl:shadow-lg ps-7 xl:ps-0 after:absolute after:start-[18px] after:top-1 after:h-[calc(100%-0.25rem)] after:w-0.5 after:bg-blue-500 xl:after:hidden"
    x-cloak
    style="display: none;"
    role="menu" aria-orientation="vertical">
    <div class="space-y-0.5 py-1 xl:px-1 relative before:absolute before:-top-4 before:start-0 before:h-5 before:w-full">
        {{ $slot }}
    </div>
</div>
