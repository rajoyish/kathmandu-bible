<x-guest-layout>
  <div class="bg-slate-50 py-24 sm:py-32">
    <div class="mx-auto px-6 text-center lg:px-8">
      <div class="mx-auto lg:mx-0">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Gallery</h2>
      </div>
      <ul role="list"
          class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
        <!-- Gallery -->
        @foreach($galleries as $gallery)
          <a href="{{ route('galleries.show', $gallery) }}">
            <li>
              <img class="aspect-[3/2] w-full rounded-2xl object-cover"
                   src="{{ url('storage/'.$gallery->cover_photo) }}"
                   alt="Gallery of {{ $gallery->title }}"/>
              <h3 class="mt-6 text-xl font-semibold leading-8 text-gray-900">{{ $gallery->title }}</h3>
              <p class="leading-7 text-gray-600">{{ count($gallery->photos) }} Photos</p>
            </li>
          </a>
        @endforeach
        <!-- / Gallery -->
      </ul>
    </div>
  </div>
</x-guest-layout>
