<x-guest-layout>
    <div class="bg-white isolate relative -z-50 sm:mb-24">
        <section class="relative isolate -z-10 px-6 pt-14 lg:px-8">
            <x-top-mesh-gradient />
            <div class="px-6 py-8 lg:px-8">
                <div class="mx-auto max-w-4xl text-center">
                    <h2 class="text-4xl font-bold leading-tight text-slate-700 sm:text-6xl">
                        {{ $program->title }}
                    </h2>
                </div>
            </div>
            <!-- Content -->
            <div class="mx-auto sm:px-4 py-8 sm:py-16 lg:px-6">
                <div class="mb-8 text-center lg:mb-16">
                    <div
                        class="mb-8 uppercase font-bold inline-flex items-center justify-between rounded-full bg-white shadow-md px-1 py-1 pr-4 text-slate-600">
                        @php
                            $badgeColorClass = match($program->badge_color) {
                                'blue' => 'bg-blue-600',
                                'purple' => 'bg-purple-600',
                                'amber' => 'bg-amber-600',
                                'emerald' => 'bg-emerald-500',
                                default => 'bg-slate-600',
                            };
                        @endphp
                        <span class="mr-3 rounded-full {{ $badgeColorClass }} px-4 py-1.5 text-white"> {{ $program->badge_title }} </span>
                        <span class="mr-2">{{ $program->language }}</span>
                    </div>
                    <div class="text-slate-600 leading-relaxed max-w-4xl mx-auto prose">
                        {!! nl2br(e($program->description)) !!}
                    </div>
                </div>
                <div class="space-y-8 md:gap-10 md:grid md:grid-cols-2 md:space-y-0 lg:grid-cols-3">
                    <div class="bg-white p-8 shadow-xl rounded-lg">
                        <div
                            class="mb-4 flex h-10 w-10 items-center justify-center rounded bg-blue-100 lg:h-16 lg:w-16">
                            <x-icons.graduate-cap class="size-6 text-blue-600 lg:size-8 " />
                        </div>
                        <div class="space-y-6">
                            <div>
                                <h3 class="font-bold text-slate-700 text-xl">Purpose</h3>
                                <div class="space-y-2">
                                    <div class="text-slate-600 prose prose-p:my-2">{!! nl2br(e($program->purpose)) !!}</div>
                                </div>
                            </div>
                            <div>
                                <h3 class="font-bold text-slate-700 text-xl">Vision</h3>
                                <div class="space-y-2">
                                    <div class="text-slate-600 prose prose-p:my-2">{!! nl2br(e($program->vision)) !!}</div>
                                </div>
                            </div>
                            <div>
                                <h3 class="font-bold text-slate-700 text-xl">Program Requirements</h3>
                                <div class="space-y-2">
                                    <p class="text-slate-600">
                                        Students must complete <strong>{{ $program->credits }}</strong> to graduate.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-8">
                        <div
                            class="mb-4 flex h-10 w-10 items-center justify-center rounded bg-cyan-100 lg:h-16 lg:w-16 ">
                            <x-icons.briefcase />
                        </div>
                        <h3 class="mb-2 text-xl font-bold text-slate-700">Admission Requirements</h3>
                        <ul role="list" class="my-6 space-y-4 lg:mb-0">
                            @foreach($program->admission_requirements ?? [] as $req)
                            <li class="flex space-x-2.5">
                                <x-icons.check-cyan />
                                <span class="leading-tight text-slate-600 ">{{ $req }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="p-8">
                        <div
                            class="mb-4 flex h-10 w-10 items-center justify-center rounded bg-purple-100 lg:h-16 lg:w-16">
                            <x-icons.document />
                        </div>
                        <h3 class="mb-2 text-xl font-bold text-slate-700">Admission Process</h3>
                        <ul role="list" class="my-6 space-y-4 lg:mb-0">
                            @foreach($program->admission_process ?? [] as $process)
                            <li class="flex space-x-2.5">
                                <x-icons.check-purple />
                                <span class="leading-tight text-slate-600">{{ $process }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Content -->
            <x-bottom-mesh-gradient />
        </section>
    </div>
</x-guest-layout>
