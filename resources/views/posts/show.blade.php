<x-guest-layout>
    <div class="min-h-screen bg-slate-50 px-6 py-32 lg:px-8">
        <x-page-heading class="mb-8 md:mb-16" style="line-height: 1.5">{{ $post->title }}</x-page-heading>
        <!-- ShareThis BEGIN -->
        <div class="sharethis-inline-share-buttons"></div>
        <!-- ShareThis END -->

        <div class="mx-auto mb-16 flex max-w-3xl justify-center">
            <div class="relative mt-8 flex items-center gap-x-4 md:gap-x-8">
                <img src="{{ url('storage/' . $post->author->photo) }}" alt="Author {{ $post->author->name }}"
                    class="size-16 rounded-full bg-gray-100 md:size-32" />
                <div class="leading-6">
                    <p class="sm:text-2xl font-bold text-gray-800">
                        <a href="{{ route('author.posts', $post->author->slug) }}">
                            <span class="absolute inset-0"></span>
                            {{ $post->author->name }}
                        </a>
                    </p>
                    <p class="text-sm text-gray-600 md:text-lg">{{ $post->author->email }}</p>
                    <div class="flex text-sm text-gray-600 mt-2">
                        <span class="inline-flex items-center">
                            <x-icons.published-at />
                            <span class="sr-only">Published at:</span>
                        </span>
                        <span class="inline-flex"> {{ $post->created_at->format('F d, Y') }} </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="prose-lg prose-slate mx-auto max-w-3xl leading-7 text-slate-700">
            <figure class="mt-8 md:mt-16">
                <img class="rounded-md" src="{{ url('storage/' . $post->thumbnail) }}"
                    alt="Thumbnail of {{ $post->title }}" />
            </figure>
            <div style="line-height: 1.8">{!! $post->body !!}</div>
        </div>
    </div>

    @include('posts.similar-posts')
</x-guest-layout>
