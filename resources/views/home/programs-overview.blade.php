<section class="bg-slate-50">
  <div class="mx-auto px-4 py-8 sm:py-32 md:px-16 lg:px-32">
    <x-page-heading class="mb-8 sm:mb-32">Academic Programs</x-page-heading>
    <div class="divide-y divide-slate-200 overflow-hidden rounded-lg bg-slate-200 shadow sm:grid sm:grid-cols-2 sm:gap-px sm:divide-y-0">
        @foreach(\App\Models\AcademicProgram::orderBy('order_column')->get() as $index => $program)
            @php
                $classes = match($index) {
                    0 => 'rounded-tl-lg rounded-tr-lg sm:rounded-tr-none',
                    1 => 'sm:rounded-tr-lg',
                    2 => 'sm:rounded-bl-lg',
                    3 => 'rounded-bl-lg rounded-br-lg sm:rounded-bl-none',
                    default => '',
                };
                $iconColorClasses = match($program->badge_color) {
                    'blue' => 'bg-blue-50 text-blue-700',
                    'purple' => 'bg-purple-50 text-purple-700',
                    'amber' => 'bg-amber-50 text-amber-700',
                    'emerald' => 'bg-emerald-50 text-emerald-700',
                    default => 'bg-slate-50 text-slate-700',
                };
                $iconSvgColorClass = match($program->badge_color) {
                    'blue' => 'text-blue-700',
                    'purple' => 'text-purple-700',
                    'amber' => 'text-amber-700',
                    'emerald' => 'text-emerald-700',
                    default => 'text-slate-700',
                };
                $badgeClasses = match($program->badge_color) {
                    'blue' => 'bg-blue-50 text-blue-600 ring-blue-500/10',
                    'purple' => 'bg-purple-50 text-purple-600 ring-purple-500/10',
                    'amber' => 'bg-amber-50 text-amber-600 ring-amber-500/10',
                    'emerald' => 'bg-emerald-50 text-emerald-600 ring-emerald-500/10',
                    default => 'bg-slate-50 text-slate-600 ring-slate-500/10',
                };
            @endphp
            <div class="group relative bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-cyan-500 {{ $classes }}">
                <div>
                    <span class="inline-flex rounded-lg p-3 ring-4 ring-white {{ $iconColorClasses }}">
                        <x-icons.graduate-cap class="size-6 lg:size-8 {{ $iconSvgColorClass }}"/>
                    </span>
                </div>
                <div class="mt-8">
                    <span class="mb-2 uppercase inline-flex items-center rounded-md px-2 py-1 text-xs font-medium ring-1 ring-inset {{ $badgeClasses }}">
                        {{ $program->badge_title }}
                    </span>
                    <h3 class="text-xl font-semibold leading-6 text-slate-600">
                        <a href="{{ route('academic-programs.show', $program->slug) }}" class="focus:outline-none">
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            {{ $program->title }}
                        </a>
                    </h3>
                    <p class="mt-2 text-slate-500">{{ $program->summary }}</p>
                </div>
                <span class="pointer-events-none absolute right-6 top-6 text-slate-300 group-hover:text-slate-400" aria-hidden="true">
                    <x-icons.angle-arrow/>
                </span>
            </div>
        @endforeach
    </div>
  </div>
</section>
