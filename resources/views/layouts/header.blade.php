<section class="p-4 lg:flex lg:items-center lg:justify-between lg:p-8">
    <header class="flex flex-col items-center justify-center gap-2 md:flex-row md:gap-4">
        <img src="{{ asset('images/logo-KBI.jpg') }}" alt="Logo of Kathmandu Bible Institute And Research Center"
             class="block size-20 object-contain sm:size-32"/>
        <div
            class="text-center text-xl font-bold uppercase tracking-tight text-blue-800 md:space-y-2 md:text-left md:text-3xl">
            <h1>Kathmandu Bible Institute</h1>
            <h2>And Research Center</h2>
        </div>
    </header>
    <div class="mt-8 flex flex-col justify-center gap-4 sm:flex-row xl:mt-0">
        <div class="relative">
            <input
                class="peer/changeIconColor h-14 w-full rounded-full border-2 border-cyan-600 bg-cyan-50 pl-14 pr-4 text-slate-800 placeholder:text-cyan-600 focus:border-none focus:outline-none focus:ring focus:ring-cyan-400 xl:w-96"
                placeholder="Search..."/>
            <span
                class="absolute left-5 top-1/2 grid -translate-y-1/2 place-items-center text-xl text-cyan-600 transition-colors duration-300 peer-focus/changeIconColor:text-cyan-400">
                <x-icons.magnifying-glass/>
        </span>
        </div>
        <div>
            <a href="#"
               class="flex items-center justify-center gap-2 rounded-full bg-cyan-600 px-8 py-2.5 font-semibold text-white hover:bg-cyan-700 focus:border-none focus:outline-none focus:ring focus:ring-cyan-400 active:bg-cyan-600 md:w-40">
                <span class="shrink-0">Admin</span>
                <x-icons.admin-user/>
            </a>
        </div>
    </div>
</section>
