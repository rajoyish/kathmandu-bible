<x-guest-layout>
  <section class="px-8 py-20 text-center">
    <h2 class="text-4xl mb-8 font-bold">{{ $gallery->title }}</h2>
    <p class="mb-8">{{ $gallery->description }}</p>
    <div id="kbi-gallery" class="pswp-gallery md:columns-3 gap-8">
      <!-- Photo -->
      @foreach($photosWithDimensions as $photo)
        @if ($photo['width'] && $photo['height'])
          <a
            href="{{ url('storage/'.$photo['path']) }}"
            class="mb-8"
            data-pswp-width="{{ $photo['width'] }}"
            data-pswp-height="{{ $photo['height'] }}"
            target="_blank"
          >
            <img
              class="mb-2 aspect-video w-full rounded-lg object-cover object-top"
              src="{{ url('storage/'.$photo['path']) }}"
            />
          </a>
        @else
          <p>Unable to get the image dimensions for {{ $photo['path'] }}.</p>
        @endif
      @endforeach
      <!-- / Photo -->
    </div>
  </section>
</x-guest-layout>
