<div class="bg-white relative isolate -z-50">
    <div class="relative isolate -z-10 px-6 pt-14 lg:px-8">
        <x-top-mesh-gradient />
        <!-- content -->
        <div class="text-center lg:flex lg:items-center lg:text-left">
            <div class="basis-1/3 xl:ml-32">
                <h1
                    class="mb-10 md:mb-16 w-full text-5xl font-bold text-slate-700 md:text-7xl lg:col-span-2 lg:max-w-6xl xl:col-auto">
                    Transform Your <span class="my-4 block text-blue-800">Ministry!</span></h1>
                <h2 class="space-y-4 text-xl leading-relaxed text-slate-700 md:mt-8">
                    <span class="block text-2xl font-medium leading-relaxed italic">
                        Are you passionate about pursuing a meaningful academic career rooted in biblical and
                        theological studies?
                    </span>
                    <span class="block">
                        The Kathmandu Bible Institute and Research Center (KBI) offers an unparalleled opportunity to
                        grow as a disciple and minister of Jesus Christ, dedicated to God's mission in Nepal.
                    </span>
                    <span class="block">Join us and make a lasting impact. Start your journey with KBI today!</span>
                </h2>
                <div
                    class="flex flex-col justify-center gap-2 pb-16 pt-10 sm:flex-row sm:items-center lg:justify-start">
                    <a href="{{ route('introduction') }}"
                        class="inline-flex group animate-bounce items-center justify-center gap-2 rounded-lg border border-blue-700 bg-blue-700 px-7 py-3.5 font-semibold leading-6 text-white hover:border-blue-600 hover:bg-slate-700 hover:text-white focus:ring focus:ring-blue-400/50 active:border-blue-700 active:bg-blue-700">
                        <x-icons.hand-raised />
                        <span class="uppercase">Knock<span class="text-blue-300 group-hover:text-slate-300"> | Matt.
                                7:7-8</span></span>
                    </a>
                </div>
            </div>
            <div class="basis-2/3">
                <img src="{{ asset('images/preacher-kbi-bkg.png') }}" class="block size-full" />
            </div>
        </div>

        <!-- content -->
        <x-bottom-mesh-gradient />
    </div>
</div>
