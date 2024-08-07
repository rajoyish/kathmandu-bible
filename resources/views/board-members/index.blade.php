<x-guest-layout>
    <section class="isolate overflow-hidden bg-cyan-200/50 px-6 md:px-8">
        <div class="relative mx-auto max-w-2xl py-24 sm:py-32 md:max-w-4xl">
            <x-top-mesh-gradient />
            <x-page-heading>Board of Members</x-page-heading>

            <article>
                <ul role="list"
                    class="mx-auto text-center mt-20 grid max-w-2xl grid-cols-1 gap-x-14 gap-y-14 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 xl:grid-cols-3">
                    <!-- Advisor -->
                    @foreach ($members as $member)
                        <li>
                            <img class="aspect-[14/16] w-full rounded-xl object-cover"
                                src="{{ url('storage/' . $member->photo) }}" alt="Photo of {{ $member->name }}" />
                            <h3 class="mt-6 text-xl font-semibold leading-8 text-slate-800">{{ $member->name }}</h3>
                            <p class="leading-7 text-slate-700">{{ $member->designation }}</p>
                            <p class="text-sm leading-6 text-slate-700">{{ $member->organization }}</p>
                        </li>
                    @endforeach
                    <!-- Advisor -->
                </ul>
            </article>

            <x-bottom-mesh-gradient />
    </section>
</x-guest-layout>
