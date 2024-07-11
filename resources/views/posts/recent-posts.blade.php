@if (count($recentPosts) >= 1)
    <div class="bg-slate-200 py-24 sm:py-32">
        <div class="mx-auto max-w-[100rem] px-6 lg:px-8">
            <div class="mx-auto mb-16 max-w-7xl">
                <div class="mt-2 md:flex md:items-center md:justify-between">
                    <div class="min-w-0 flex-1">
                        <h2 class="text-center text-3xl font-bold text-slate-700 sm:text-5xl">
                            Recent Posts
                        </h2>
                    </div>
                    <div class="mt-4 flex flex-shrink-0 justify-center md:ml-4 md:mt-0">
                        <a href="{{ route('posts.index') }}"
                            class="inline-flex items-center gap-2 rounded-md bg-blue-500 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500">
                            <span>
                                <x-icons.link />
                            </span>
                            View All Posts
                        </a>
                    </div>
                </div>
            </div>
            <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-14 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                {{-- Post --}}
                @foreach ($recentPosts as $post)
                    <x-post-card :$post :showAuthor='true' :dark="false" />
                @endforeach
            </div>
        </div>
    </div>
@endif
