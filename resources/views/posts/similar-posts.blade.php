@if (count($similarPosts) >= 1)
    <div class="bg-slate-800 py-24 sm:py-32">
        <div class="mx-auto max-w-[100rem] px-6 lg:px-8">
            <div class="mx-auto text-center">
                <h3 class="text-center text-2xl sm:text-4xl font-bold text-slate-100 tracking-tight text-balance">
                    Explore More from
                    <span class="text-cyan-400 underline hover:text-blue-400">
                        <a href="#">{{ $post->author->name }}</a>
                    </span>
                </h3>
            </div>
            <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-14 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                {{-- Post --}}
                @foreach ($similarPosts as $post)
                    <article class="flex flex-col items-start justify-between">
                        <div class="relative w-full">
                            <img src="{{ url('storage/' . $post->thumbnail) }}" alt="Thumbnail of {{ $post->title }}"
                                class="aspect-[16/9] w-full rounded-2xl bg-slate-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]" />
                            <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-slate-900/10"></div>
                        </div>
                        <div class="max-w-xl">
                            <div class="mt-8 flex items-center gap-x-4">
                                <time datetime="{{ $post->created_at->format('F d, Y') }}"
                                    class="text-slate-400">{{ $post->created_at->format('F d, Y') }}</time>
                            </div>
                            <div class="group relative">
                                <h3 class="mt-3 text-2xl text-balance font-semibold leading-6 text-slate-100 group-hover:text-slate-200"
                                    style="line-height: 1.25">
                                    <a href="{{ route('post.show', $post) }}">
                                        <span class="absolute inset-0"></span>
                                        {{ $post->title }}
                                    </a>
                                </h3>
                                <p class="mt-5 line-clamp-3 leading-6 text-slate-400">
                                    {{ $post->excerpt }}
                                </p>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
@endif
