<x-guest-layout>
    <div class="bg-white py-12 sm:py-16">
        <div class="mx-auto max-w-[85rem] px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Search Results</h2>
                @if(empty(trim($query)))
                    <p class="mt-4 text-lg leading-8 text-slate-600">Please enter a search term.</p>
                @else
                    <p class="mt-4 text-lg leading-8 text-slate-600">
                        Showing results for <span class="font-semibold text-slate-900">"{{ $query }}"</span>
                    </p>
                @endif
            </div>

            @if(!empty(trim($query)))
                <div class="mx-auto mt-16 max-w-7xl">
                    @php
                        $hasResults = $programs->isNotEmpty() || $posts->isNotEmpty() || $galleries->isNotEmpty();
                    @endphp

                    @if(!$hasResults)
                        <div class="text-center py-12">
                            <x-icons.magnifying-glass class="mx-auto h-12 w-12 text-slate-400" />
                            <h3 class="mt-4 text-sm font-semibold text-slate-900">No results found</h3>
                            <p class="mt-1 text-sm text-slate-500">We couldn't find anything matching your search term.</p>
                        </div>
                    @else
                        
                        <!-- Programs Section -->
                        @if($programs->isNotEmpty())
                            <div class="mb-16">
                                <h3 class="text-2xl font-bold tracking-tight text-slate-900 mb-6 border-b pb-4">Academic Programs ({{ $programs->count() }})</h3>
                                <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                                    @foreach($programs as $program)
                                        <a href="{{ route('academic-programs.show', $program->slug) }}" class="flex flex-col items-start justify-between rounded-2xl bg-slate-50 p-6 shadow-sm ring-1 ring-slate-200 transition hover:shadow-md hover:ring-cyan-600">
                                            <div class="flex items-center gap-x-4 text-xs">
                                                <span class="relative z-10 rounded-full {{ $program->badge_color ?? 'bg-blue-50 text-blue-700' }} px-3 py-1.5 font-medium">
                                                    {{ $program->badge_title }}
                                                </span>
                                            </div>
                                            <div class="group relative">
                                                <h4 class="mt-3 text-lg font-semibold leading-6 text-slate-900 group-hover:text-cyan-600">
                                                    <span class="absolute inset-0"></span>
                                                    {{ $program->title }}
                                                </h4>
                                                <p class="mt-5 line-clamp-3 text-sm leading-6 text-slate-600">{{ Str::limit($program->description, 120) }}</p>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <!-- Posts Section -->
                        @if($posts->isNotEmpty())
                            <div class="mb-16">
                                <h3 class="text-2xl font-bold tracking-tight text-slate-900 mb-6 border-b pb-4">Blog Posts ({{ $posts->count() }})</h3>
                                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-12 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                                    @foreach($posts as $post)
                                        <x-post-card :post="$post" :dark="false" />
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <!-- Galleries Section -->
                        @if($galleries->isNotEmpty())
                            <div>
                                <h3 class="text-2xl font-bold tracking-tight text-slate-900 mb-6 border-b pb-4">Galleries ({{ $galleries->count() }})</h3>
                                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                                    @foreach($galleries as $gallery)
                                        <a href="{{ route('galleries.show', $gallery->slug) }}" class="group relative block w-full overflow-hidden rounded-lg bg-slate-100 focus-within:ring-2 focus-within:ring-cyan-500 focus-within:ring-offset-2 focus-within:ring-offset-slate-100">
                                            <img src="{{ Storage::disk('public')->url($gallery->cover_photo) }}" alt="{{ $gallery->title }}" class="pointer-events-none aspect-[10/7] object-cover transition-transform duration-300 group-hover:scale-105">
                                            <div class="absolute inset-0 flex flex-col justify-end bg-gradient-to-t from-black/60 to-transparent p-4 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                                <p class="text-sm font-medium text-white">{{ $gallery->title }}</p>
                                                <p class="text-xs text-slate-200 line-clamp-1">{{ $gallery->description }}</p>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                    @endif
                </div>
            @endif
        </div>
    </div>
</x-guest-layout>
