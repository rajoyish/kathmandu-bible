<x-guest-layout>
    <div class="bg-slate-50 py-24 sm:py-32">
        <div class="mx-auto px-6 text-center lg:px-8">
            <div class="mx-auto max-w-7xl">
                <div class="lg:mx-0 space-y-8 mb-24">
                    <x-page-heading>{{ $gallery->title }}</x-page-heading>
                    <p class="text-slate-600">{{ $gallery->description }}</p>
                    <p class="text-slate-500">&bull; Created on {{ $gallery->created_at->format('d M, Y') }}</p>
                </div>
            </div>

            <ul id="kbi-gallery" role="list"
                class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-3 xl:gap-x-8">
                <!-- Photo -->

                @foreach ($photosWithDimensions as $photo)
                    @if ($photo['width'] && $photo['height'])
                        <li class="relative">
                            <a href="{{ url('storage/' . $photo['path']) }}"
                                class="group aspect-h-7 aspect-w-10 block w-full overflow-hidden rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 focus-within:ring-offset-gray-100"
                                data-pswp-width="{{ $photo['width'] }}" data-pswp-height="{{ $photo['height'] }}"
                                target="_blank">
                                <img src="{{ url('storage/' . $photo['path']) }}" alt=""
                                    class="pointer-events-none object-cover group-hover:opacity-75" />
                            </a>
                        </li>
                    @endif
                @endforeach



                <!-- Photo -->

            </ul>


        </div>
    </div>
</x-guest-layout>
