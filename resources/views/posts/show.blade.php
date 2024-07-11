<x-guest-layout>
    <div class="min-h-screen bg-slate-50 px-6 py-32 lg:px-8">
        <x-page-heading class="mb-8 md:mb-16" style="line-height: 1.5">{{ $post->title }}</x-page-heading>

        <div class="mx-auto max-w-3xl mb-16 flex justify-center">
            <div class="relative mt-8 flex items-center md:gap-x-8 gap-x-4">
                <img src="{{ url('storage/' . $post->author->photo) }}" alt="Author {{ $post->author->name }}"
                    class="md:size-32 size-16 rounded-full bg-gray-100">
                <div class="leading-6">
                    <p class="font-bold text-xl md:mb-2 text-gray-800">
                        <a href="#">
                            <span class="absolute inset-0"></span>
                            {{ $post->author->name }}
                        </a>
                    </p>
                    <p class="text-gray-600 text-sm md:text-lg">{{ $post->author->email }}</p>
                </div>
            </div>
        </div>


        <div class="mx-auto prose-lg prose-slate max-w-3xl leading-7 text-slate-700">

            <div class="flex gap-2 border-b border-slate-200 pb-4">
                <span class="inline-flex text-slate-400">
                    <x-icons.published-at />
                    Published at:
                </span>
                <span class="inline-flex">
                    {{ $post->created_at->format('F d, Y') }}
                </span>
            </div>

            <figure class="md:mt-16 mt-8">
                <img class="rounded-md" src="{{ url('storage/' . $post->thumbnail) }}"
                    alt="Thumbnail of {{ $post->title }}" />
            </figure>
            <div style="line-height: 1.8">
                {!! $post->body !!}
            </div>
        </div>
    </div>


    @include('posts.similar-posts')

</x-guest-layout>
