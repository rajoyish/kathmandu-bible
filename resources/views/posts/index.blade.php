<x-guest-layout>
    <div class="bg-slate-50 py-24 sm:py-32">
        <div class="mx-auto max-w-[100rem] px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <x-page-heading class="mb-8" style="line-height: 1.5">From the blog</x-page-heading>
                <p class="mt-2 leading-8 text-slate-600">Blog written by our students, professors, teachers, staff, and
                    guest authors</p>
            </div>
            <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-14 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                {{-- Post --}}
                @foreach ($posts as $post)
                    <x-post-card :$post :showAuthor='true' :dark='false' />
                @endforeach
            </div>
            <div class="mt-16">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</x-guest-layout>
