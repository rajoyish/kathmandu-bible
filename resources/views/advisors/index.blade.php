<x-guest-layout>
  <section class="isolate overflow-hidden bg-blue-100 px-6 md:px-8">
    <div class="relative mx-auto max-w-2xl py-24 sm:py-32 md:max-w-4xl">
      <x-top-mesh-gradient/>
      <x-page-heading>Board of Advisors</x-page-heading>

      <article>
        <ul role="list"
            class="mx-auto text-center mt-20 grid max-w-2xl grid-cols-1 gap-x-14 gap-y-14 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 xl:grid-cols-3">
          <!-- Advisor -->
          @foreach($advisors as $advisor)
            <li>
              <img class="aspect-[14/16] w-full rounded-xl object-cover"
                   src="{{ url('storage/' . $advisor->photo) }}" alt="Photo of {{ $advisor->name }}"/>
              <h3 class="mt-6 text-xl font-semibold leading-8 text-slate-800">{{ $advisor->name }}</h3>
              <p class="leading-7 text-slate-700">{{ $advisor->designation }}</p>
              <p class="text-sm leading-6 text-slate-700">{{ $advisor->organization }}</p>
            </li>
          @endforeach
          <!-- Advisor -->
        </ul>
      </article>

      <x-bottom-mesh-gradient/>
  </section>
</x-guest-layout>
