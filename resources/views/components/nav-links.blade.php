<x-nav-item href="/" :active="request()->routeIs('home.index')">
    Home
</x-nav-item>

<li class="group relative max-md:border-b max-md:px-3 max-md:py-3">
    <a href="#"
        class="block text-slate-700 transition-colors hover:text-cyan-600 md:text-white hover:md:text-yellow-300">
        <span>About Us</span>
        <x-icons.chevron-down />
    </a>
    <ul
        class="absolute left-0 top-10 z-50 block max-h-0 min-w-[250px] space-y-2 overflow-hidden rounded-b-lg bg-white px-6 shadow-lg transition-all duration-500 group-hover:max-h-[700px] group-hover:pb-4 group-hover:pt-6 group-hover:opacity-100 max-md:top-8">
        <li class="border-b py-3 transition-all hover:border-cyan-600">
            <a href="{{ route('about-us.introduction') }}" class="block text-slate-700 hover:text-cyan-600">
                Introduction
            </a>
        </li>
        <li class="border-b py-3 transition-all hover:border-cyan-600">
            <a href="#" class="block text-slate-700 hover:text-cyan-600"> Statement of Faith </a>
        </li>
        <li class="border-b py-3 transition-all hover:border-cyan-600">
            <a href="#" class="block text-slate-700 hover:text-cyan-600"> Mission & Vision </a>
        </li>
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
        <li class="border-b py-3 transition-all hover:border-cyan-600">
            <a href="#" class="block text-slate-700 hover:text-cyan-600"> Certificate in Theology (C. Th.)
            </a>
        </li>
        <li class="border-b py-3 transition-all hover:border-cyan-600">
            <a href="#" class="block text-slate-700 hover:text-cyan-600"> Diploma in Theology (Dip. Th.) </a>
        </li>
        <li class="border-b py-3 transition-all hover:border-cyan-600">
            <a href="#" class="block text-slate-700 hover:text-cyan-600"> Bachelor of Theology (B. Th.) </a>
        </li>
        <li class="border-b py-3 transition-all hover:border-cyan-600">
            <a href="#" class="block text-slate-700 hover:text-cyan-600"> M.A. Christian Missions </a>
        </li>
    </ul>
</li>
{{-- <x-nav-item :href="route('faculty.index')" :active="request()->routeIs('faculty.index')"> --}}
<x-nav-item>Faculty & Staff</x-nav-item>
<x-nav-item>Students</x-nav-item>
<x-nav-item>Gallery</x-nav-item>
<x-nav-item>Blog</x-nav-item>
<x-nav-item>Donation</x-nav-item>
<x-nav-item>Contact</x-nav-item>
