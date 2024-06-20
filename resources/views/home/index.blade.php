<x-guest-layout>
    @include('home.slider')
    @include('home.hero')
    @include('home.programs-overview')
    @if (count($galleries) >= 3)
        @include('home.recent-gallery-carousel')
    @endif
</x-guest-layout>
