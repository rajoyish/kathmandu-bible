@props(['post', 'showAuthor' => true, 'dark' => true]) @php
    $titleClasses = 'mt-3 text-2xl text-balance font-semibold leading-6';
    $excerptClasses = 'mt-5 line-clamp-3 leading-6';
    if ($dark === true) {
        $titleClasses .= ' text-slate-100 group-hover:text-cyan-600';
        $excerptClasses .= ' text-slate-400';
    }
    if ($dark === false) {
        $titleClasses .= ' text-slate-900 group-hover:text-slate-600';
    }
@endphp

<article class="flex flex-col items-start justify-between">
    <div class="relative w-full">
        <img src="{{ url('storage/' . $post->thumbnail) }}" alt="Thumbnail of {{ $post->title }}"
            class="aspect-[16/9] w-full rounded-2xl bg-slate-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]" />
        <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-slate-900/10"></div>
    </div>
    <div class="max-w-xl">
        <div class="mt-8 flex items-center text-sm">
            <time title="{{ $post->created_at->diffForHumans() }}" datetime="{{ $post->created_at->format('F d, Y') }}"
                class="text-slate-500">{{ $post->created_at->format('F d, Y') }}</time>
        </div>
        <div class="group relative">
            <h3 class="{{ $titleClasses }}" style="line-height: 1.5">
                <a href="{{ route('post.show', $post) }}">
                    <span class="absolute inset-0"></span>
                    {{ $post->title }}
                </a>
            </h3>
            <p class="{{ $excerptClasses }}" style="line-height: 1.5">{{ $post->excerpt }}</p>
        </div>
        {{-- Author Block --}}
        @if ($showAuthor)
            <div class="relative mt-8 flex items-center gap-x-4">
                <img src="{{ url('storage/' . $post->author->photo) }}"
                    alt="Photo of author {{ $post->author->name }}" class="size-14 rounded-full bg-slate-100" />
                <div class="leading-6">
                    <p class="font-semibold text-slate-900">
                        <a href="{{ route('author.posts', $post->author->slug) }}">
                            <span class="absolute inset-0"></span>
                            {{ $post->author->name }}
                        </a>
                    </p>
                    <p class="text-sm text-slate-600">{{ $post->author->email }}</p>
                </div>
            </div>
            {{-- Author Block --}}
        @endif
    </div>
</article>
