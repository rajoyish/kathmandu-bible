<x-nav-item href="/">
    Home
</x-nav-item>

<li class="group relative max-md:border-b max-md:px-3 max-md:py-3">
    <a href="#"
        class="block text-slate-700 transition-colors hover:text-cyan-600 md:text-white hover:md:text-yellow-300">
        <span>About Us</span>
        <x-icons.chevron-down />
    </a>
    <ul
        class="absolute
        left-0 top-10 z-50 block max-h-0 min-w-[300px] space-y-2 overflow-hidden rounded-b-lg bg-white px-6 shadow-lg
        transition-all duration-500 group-hover:max-h-[700px] group-hover:pb-4 group-hover:pt-6 group-hover:opacity-100
        max-md:top-8">
        <x-sub-li-nav :active="request()->routeIs('introduction')">
            <x-sub-nav-item :href="route('introduction')" :active="request()->routeIs('introduction')">
                Introduction
            </x-sub-nav-item>
        </x-sub-li-nav>
        <x-sub-li-nav :active="request()->routeIs('vision-purpose-and-mission')">
            <x-sub-nav-item :href="route('vision-purpose-and-mission')" :active="request()->routeIs('vision-purpose-and-mission')">
                Vision, Purpose and Mission
            </x-sub-nav-item>
        </x-sub-li-nav>
        <x-sub-li-nav :active="request()->routeIs('core-values')">
            <x-sub-nav-item :href="route('core-values')" :active="request()->routeIs('core-values')">
                Core Values
            </x-sub-nav-item>
        </x-sub-li-nav>
        <x-sub-li-nav :active="request()->routeIs('statement-of-faith')">
            <x-sub-nav-item :href="route('statement-of-faith')" :active="request()->routeIs('statement-of-faith')">
                Statement of Faith
            </x-sub-nav-item>
        </x-sub-li-nav>
    </ul>
</li>


<li class="group relative max-md:border-b max-md:px-3 max-md:py-3">
    <a href="#"
        class="block text-slate-700 transition-colors hover:text-cyan-600 md:text-white hover:md:text-yellow-300">
        <span>Academic Programs</span>
        <x-icons.chevron-down />
    </a>
    <ul
        class="absolute left-0 top-10 z-50 block max-h-0 min-w-[300px] space-y-2 overflow-hidden rounded-b-lg bg-white px-6 shadow-lg transition-all duration-500 group-hover:max-h-[700px] group-hover:pb-4 group-hover:pt-6 group-hover:opacity-100 max-md:top-8">
        <x-sub-li-nav :active="request()->routeIs('certificate-in-theology-c-th')">
            <x-sub-nav-item :href="route('certificate-in-theology-c-th')" :active="request()->routeIs('certificate-in-theology-c-th')">
                Certificate in Theology (C. Th.)
            </x-sub-nav-item>
        </x-sub-li-nav>
        <x-sub-li-nav>
            <x-sub-nav-item>
                Diploma in Theology (Dip. Th.)
            </x-sub-nav-item>
        </x-sub-li-nav>
        <x-sub-li-nav>
            <x-sub-nav-item>
                Bachelor of Theology (B. Th.)
            </x-sub-nav-item>
        </x-sub-li-nav>
        <x-sub-li-nav>
            <x-sub-nav-item>
                M.A. Christian Missions
            </x-sub-nav-item>
        </x-sub-li-nav>
    </ul>
</li>


<x-nav-item>Faculty & Staff</x-nav-item>
<x-nav-item>Students</x-nav-item>
<x-nav-item>Gallery</x-nav-item>
<x-nav-item>Blog</x-nav-item>
<x-nav-item>Donation</x-nav-item>
<x-nav-item>Contact</x-nav-item>
