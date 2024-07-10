<x-guest-layout>
    <div class="bg-slate-800 py-24 sm:py-32">
        <div class="mx-auto max-w-[100rem] px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="mb-8 text-center text-3xl sm:text-5xl font-bold text-slate-200 tracking-tight text-balance"
                    style="line-height: 1.5">
                    Posts from <span class="text-cyan-500">{{ $author->name }}</span>
                </h2>
            </div>
            <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-14 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                {{-- Post --}}
                @foreach ($posts as $post)
                    <x-post-card :$post :showAuthor='false' :dark='true' />
                @endforeach
            </div>
            <div class="mt-16">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</x-guest-layout>
