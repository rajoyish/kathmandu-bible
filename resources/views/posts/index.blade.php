<x-guest-layout>
    <div class="bg-slate-50 py-24 sm:py-32">
        <div class="mx-auto px-6 lg:px-8">
            <div class="mx-auto lg:mx-0">
                <x-page-heading>Posts</x-page-heading>
            </div>
            <section>
                @foreach ($posts as $post)
                    <div class="mb-16 space-y-2">
                        <img class="h-40" src="{{ url('storage/' . $post->thumbnail) }}" alt="">
                        <a href="{{ route('post.show', $post) }}" class="text-blue-500">
                            <h2>{{ $post->title }}</h2>
                        </a>
                        <small>by {{ $post->author->name }}</small>
                        <p>{{ $post->excerpt }}</p>
                        <a href="#">Read More...</a>
                        <hr>
                    </div>
                @endforeach
            </section>

        </div>
    </div>
</x-guest-layout>
