 {{-- Nav Links --}}
 <x-nav.item :href="route('home.index')" :active="request()->routeIs('home.index')">
     Home
 </x-nav.item>

 <!-- About Us -->
 <x-nav.sub-wrap>
     <button id="hs-header-classic-dropdown" type="button"
         class="hs-dropdown-toggle flex w-full items-center p-2 text-white hover:text-blue-300 focus:text-blue-300 focus:outline-none"
         aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
         About Us
         <x-icons.chevron-nav />
     </button>

     <x-nav.sub-ul>
         <x-nav.sub-item-li :href="route('introduction')" :active="request()->routeIs('introduction')">
             Introduction
         </x-nav.sub-item-li>
         <x-nav.sub-item-li :href="route('vision-purpose-and-mission')" :active="request()->routeIs('vision-purpose-and-mission')">
             Vision, Purpose and Mission
         </x-nav.sub-item-li>
         <x-nav.sub-item-li :href="route('core-values')" :active="request()->routeIs('core-values')">
             Core Values
         </x-nav.sub-item-li>
         <x-nav.sub-item-li :href="route('statement-of-faith')" :active="request()->routeIs('statement-of-faith')">
             Statement of Faith
         </x-nav.sub-item-li>
         <x-nav.sub-item-li :href="route('message-from-president')" :active="request()->routeIs('message-from-president')">
             Message from the President
         </x-nav.sub-item-li>
     </x-nav.sub-ul>
 </x-nav.sub-wrap>
 <!--About Us -->
 <!-- KBI Board -->
 <x-nav.sub-wrap>
     <button id="hs-header-classic-dropdown" type="button"
         class="hs-dropdown-toggle flex w-full items-center p-2 text-white hover:text-blue-300 focus:text-blue-300 focus:outline-none"
         aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
         KBI Board
         <x-icons.chevron-nav />
     </button>

     <x-nav.sub-ul>
         <x-nav.sub-item-li :href="route('board-members')" :active="request()->routeIs('board-members')">
             Board of Members
         </x-nav.sub-item-li>
         <x-nav.sub-item-li :href="route('advisors')" :active="request()->routeIs('advisors')">
             Board of Advisors
         </x-nav.sub-item-li>
         <x-nav.sub-item-li :href="route('faculty')" :active="request()->routeIs('faculty')">
             Faculty
         </x-nav.sub-item-li>
     </x-nav.sub-ul>
 </x-nav.sub-wrap>
 <!--About Us -->

 <!-- Dropdown -->
 <div
     class="hs-dropdown [--adaptive:none] [--is-collapse:true] [--strategy:static] xl:[--is-collapse:false] xl:[--strategy:fixed]">
     <button id="hs-header-classic-dropdown" type="button"
         class="hs-dropdown-toggle flex w-full items-center p-2 text-white hover:text-blue-300 focus:text-blue-300 focus:outline-none"
         aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
         Academic Programs
         <svg class="hs-dropdown-open:-rotate-180 xl:hs-dropdown-open:rotate-0 ms-auto size-4 shrink-0 duration-300 xl:ms-1"
             width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
             stroke-linecap="round" stroke-linejoin="round">
             <path d="m6 9 6 6 6-6" />
         </svg>
     </button>

     <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 relative top-full z-10 hidden w-full ps-7 opacity-0 transition-[opacity,margin] duration-[0.1ms] before:absolute before:-top-4 before:start-0 before:h-5 before:w-full after:absolute after:start-[18px] after:top-1 after:h-[calc(100%-0.25rem)] after:w-0.5 after:bg-blue-500 xl:w-72 xl:rounded-lg xl:bg-white xl:ps-0 xl:shadow-md xl:duration-[150ms] xl:after:hidden"
         role="menu" aria-orientation="vertical" aria-labelledby="hs-header-classic-dropdown">
         <div class="space-y-0.5 py-1 xl:px-1">
             <a class="flex items-center px-2 py-1.5 text-white hover:text-blue-300 focus:outline-none xl:text-slate-700 xl:hover:text-blue-500 xl:focus:text-blue-300"
                 href="#"> Certificate in Theology (C. Th.) </a>
             <a class="flex items-center px-2 py-1.5 text-white hover:text-blue-300 focus:outline-none xl:text-slate-700 xl:hover:text-blue-500 xl:focus:text-blue-300"
                 href="#"> Diploma in Theology (Dip. Th.) </a>
             <a class="flex items-center px-2 py-1.5 text-white hover:text-blue-300 focus:outline-none xl:text-slate-700 xl:hover:text-blue-500 xl:focus:text-blue-300"
                 href="#"> Bachelor of Theology (B. Th.) </a>
             <a class="flex items-center px-2 py-1.5 text-white hover:text-blue-300 focus:outline-none xl:text-slate-700 xl:hover:text-blue-500 xl:focus:text-blue-300"
                 href="#"> M.A. Christian Missions </a>
         </div>
     </div>
 </div>
 <!-- End Dropdown -->
 <a class="flex items-center p-2 text-white hover:text-blue-300 focus:text-blue-300 focus:outline-none" href="#">
     Testimonials </a>
 <a class="flex items-center p-2 text-white hover:text-blue-300 focus:text-blue-300 focus:outline-none" href="#">
     Events </a>
 <a class="flex items-center p-2 text-white hover:text-blue-300 focus:text-blue-300 focus:outline-none" href="#">
     Blog </a>
 <a class="flex items-center p-2 text-white hover:text-blue-300 focus:text-blue-300 focus:outline-none" href="#">
     Galleries </a>
 <a class="flex items-center p-2 text-white hover:text-blue-300 focus:text-blue-300 focus:outline-none" href="#">
     Downloads </a>
 <a class="flex items-center p-2 text-white hover:text-blue-300 focus:text-blue-300 focus:outline-none" href="#">
     Support Us </a>
 <a class="flex items-center p-2 text-white hover:text-blue-300 focus:text-blue-300 focus:outline-none" href="#">
     Contact </a>
 {{-- Nav- --}}
