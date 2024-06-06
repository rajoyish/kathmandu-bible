<ul
    class="absolute left-0 top-10 z-50 block max-h-0 min-w-[250px] space-y-2 overflow-hidden rounded-b-lg bg-white px-6 shadow-lg transition-all duration-500 group-hover:max-h-[700px] group-hover:pb-4 group-hover:pt-6 group-hover:opacity-100 max-md:top-8">

    <x-sub-li-nav :active="request()->routeIs('about-us.introduction')">
        <x-sub-nav-item :href="route('about-us.introduction')" :active="request()->routeIs('about-us.introduction')">
            Introduction
        </x-sub-nav-item>
    </x-sub-li-nav>

    <x-sub-li-nav>
        <x-sub-nav-item>
            Statement of Faith
        </x-sub-nav-item>
    </x-sub-li-nav>

    <x-sub-li-nav>
        <x-sub-nav-item>
            Mission & Vision
        </x-sub-nav-item>
    </x-sub-li-nav>
</ul>
