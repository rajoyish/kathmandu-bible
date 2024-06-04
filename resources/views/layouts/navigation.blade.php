<nav class="relative z-50 shadow-md">
    <div class="relative flex flex-wrap justify-center bg-blue-800 px-10 py-3">
        <div id="collapseMenu"
             class="max-md:hidden max-md:before:fixed max-md:before:inset-0 max-md:before:z-50 max-md:before:bg-black max-md:before:opacity-40 md:!block">
            <button id="toggleClose" class="fixed right-4 top-2 z-[100] rounded-full bg-white p-3 md:hidden">
                <x-icons.x-mark/>
            </button>

            <ul class="z-50 items-center max-md:fixed max-md:left-0 max-md:top-0 max-md:h-full max-md:w-2/3 max-md:min-w-[300px] max-md:space-y-3 max-md:overflow-auto max-md:bg-white max-md:p-4 max-md:shadow-md md:flex md:gap-x-10">
                <x-nav-links/>
            </ul>
        </div>

        <div id="toggleOpen" class="ml-auto flex md:hidden">
            <button>
                <x-icons.bars-4/>
            </button>
        </div>
    </div>
</nav>
