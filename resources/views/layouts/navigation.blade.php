<nav class="relative z-50 shadow-md">
    <div class="relative flex flex-wrap justify-center bg-blue-800 px-10 py-3">
        <div id="collapseMenu"
             class="max-md:hidden max-md:before:fixed max-md:before:inset-0 max-md:before:z-50 max-md:before:bg-black max-md:before:opacity-40 md:!block">
            <button id="toggleClose" class="fixed right-4 top-2 z-[100] rounded-full bg-white p-3 md:hidden">
                <x-icons.hamburger/>
            </button>

            <ul class="z-50 items-center max-md:fixed max-md:left-0 max-md:top-0 max-md:h-full max-md:w-2/3 max-md:min-w-[300px] max-md:space-y-3 max-md:overflow-auto max-md:bg-white max-md:p-4 max-md:shadow-md md:flex md:gap-x-10">
                <li class="max-md:border-b max-md:px-3 max-md:py-3">
                    <a href="#"
                       class="block text-slate-800 transition-colors hover:text-cyan-600 md:text-white">Home</a>
                </li>
                <li class="group relative max-md:border-b max-md:px-3 max-md:py-3">
                    <a href="#"
                       class="block text-slate-800 transition-colors hover:text-cyan-600 md:text-white hover:md:text-yellow-300">
                        <span>About Us</span>
                        <x-icons.chevron-down/>
                    </a>
                    <ul class="absolute left-0 top-10 z-50 block max-h-0 min-w-[250px] space-y-2 overflow-hidden rounded-b-lg bg-white px-6 shadow-lg transition-all duration-500 group-hover:max-h-[700px] group-hover:pb-4 group-hover:pt-6 group-hover:opacity-100 max-md:top-8">
                        <li class="border-b py-3 transition-all hover:border-cyan-600">
                            <a href="#" class="block text-slate-800 hover:text-cyan-600"> Introduction </a>
                        </li>
                        <li class="border-b py-3 transition-all hover:border-cyan-600">
                            <a href="#" class="block text-slate-800 hover:text-cyan-600"> Statement of Faith </a>
                        </li>
                        <li class="border-b py-3 transition-all hover:border-cyan-600">
                            <a href="#" class="block text-slate-800 hover:text-cyan-600"> Mission & Vision </a>
                        </li>
                    </ul>
                </li>
                <li class="max-md:border-b max-md:px-3 max-md:py-3">
                    <a href="#"
                       class="block text-slate-800 transition-colors hover:text-cyan-600 md:text-white hover:md:text-yellow-300">Programs</a>
                </li>
                <li class="max-md:border-b max-md:px-3 max-md:py-3">
                    <a href="#"
                       class="block text-slate-800 transition-colors hover:text-cyan-600 md:text-white hover:md:text-yellow-300">Staff
                        & Faculty</a>
                </li>
                <li class="max-md:border-b max-md:px-3 max-md:py-3">
                    <a href="#"
                       class="block text-slate-800 transition-colors hover:text-cyan-600 md:text-white hover:md:text-yellow-300">Students</a>
                </li>
                <li class="max-md:border-b max-md:px-3 max-md:py-3">
                    <a href="#"
                       class="block text-slate-800 transition-colors hover:text-cyan-600 md:text-white hover:md:text-yellow-300">Gallery</a>
                </li>
                <li class="max-md:border-b max-md:px-3 max-md:py-3">
                    <a href="#"
                       class="block text-slate-800 transition-colors hover:text-cyan-600 md:text-white hover:md:text-yellow-300">Blog</a>
                </li>
                <li class="max-md:border-b max-md:px-3 max-md:py-3">
                    <a href="#"
                       class="block text-slate-800 transition-colors hover:text-cyan-600 md:text-white hover:md:text-yellow-300">Donation</a>
                </li>
                <li class="max-md:border-b max-md:px-3 max-md:py-3">
                    <a href="#"
                       class="block text-slate-800 transition-colors hover:text-cyan-600 md:text-white hover:md:text-yellow-300">Contact</a>
                </li>
            </ul>
        </div>

        <div id="toggleOpen" class="ml-auto flex md:hidden">
            <button>
                <!-- bars-4 -->
                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5"/>
                </svg>
                <!-- bars-4 -->
            </button>
        </div>
    </div>
</nav>
