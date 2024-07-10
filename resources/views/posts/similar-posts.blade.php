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
                    <x-post-card :$post :showAuthor='false' :dark="true" />
                @endforeach
            </div>
        </div>
    </div>
@endif
