<section class="bg-slate-800 p-8 md:p-16 text-center text-slate-100">
    <!-- Heading -->
    <div class="mx-auto mb-16 max-w-7xl">
        <div class="mt-2 md:flex md:items-center md:justify-between">
            <div class="min-w-0 flex-1">
                <h2 class="text-center text-3xl font-bold text-slate-200 sm:text-5xl">
                    Recent Gallery
                </h2>
            </div>
            <div class="mt-4 flex flex-shrink-0 justify-center md:ml-4 md:mt-0">
                <a href="{{ route('galleries.index') }}"
                    class="inline-flex items-center gap-2 rounded-md bg-cyan-500 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-cyan-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-cyan-500">
                    <span>
                        <x-icons.link />
                    </span>
                    View All Galleries
                </a>
            </div>
        </div>
    </div>

    <!-- Heading -->
    <div class="embla">
        <div class="embla__viewport">
            <div class="embla__container">
                <!-- Image -->
                @foreach ($galleries as $gallery)
                    <div class="embla__slide">
                        <a href="{{ route('galleries.show', $gallery) }}"
                            class="relative block pt-2.5 hover:opacity-75">
                            <x-gallery-line-dark />
                            <img class="relative aspect-[3/2] w-full rounded-2xl border-t-2 border-slate-800 object-cover"
                                src="{{ url('storage/' . $gallery->cover_photo) }}"
                                alt="Gallery of {{ $gallery->title }}" />
                            <h3 class="mt-6 text-xl font-semibold leading-8">
                                {{ $gallery->title }}
                            </h3>
                            <p class="leading-7 text-slate-400 mt-2">&bull; {{ count($gallery->photos) }} Photos</p>
                        </a>
                    </div>
                @endforeach
                <!-- Image -->
            </div>
        </div>
        <div class="embla__controls">
            <div class="embla__buttons">
                <button class="embla__button embla__button--prev" type="button" disabled="">
                    <svg class="embla__button__svg text-slate-400" viewBox="0 0 532 532">
                        <path fill="currentColor"
                            d="M355.66 11.354c13.793-13.805 36.208-13.805 50.001 0 13.785 13.804 13.785 36.238 0 50.034L201.22 266l204.442 204.61c13.785 13.805 13.785 36.239 0 50.044-13.793 13.796-36.208 13.796-50.002 0a5994246.277 5994246.277 0 0 0-229.332-229.454 35.065 35.065 0 0 1-10.326-25.126c0-9.2 3.393-18.26 10.326-25.2C172.192 194.973 332.731 34.31 355.66 11.354Z">
                        </path>
                    </svg></button><button class="embla__button embla__button--next" type="button" disabled="">
                    <svg class="embla__button__svg text-slate-400" viewBox="0 0 532 532">
                        <path fill="currentColor"
                            d="M176.34 520.646c-13.793 13.805-36.208 13.805-50.001 0-13.785-13.804-13.785-36.238 0-50.034L330.78 266 126.34 61.391c-13.785-13.805-13.785-36.239 0-50.044 13.793-13.796 36.208-13.796 50.002 0 22.928 22.947 206.395 206.507 229.332 229.454a35.065 35.065 0 0 1 10.326 25.126c0 9.2-3.393 18.26-10.326 25.2-45.865 45.901-206.404 206.564-229.332 229.52Z">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="embla__dots"></div>
        </div>
    </div>
</section>
