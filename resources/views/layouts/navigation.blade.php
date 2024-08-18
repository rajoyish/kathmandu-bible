 <header class="z-50 flex w-full flex-wrap bg-blue-900 xl:flex-nowrap xl:justify-start">
     <nav
         class="relative mx-auto w-full max-w-[85rem] px-4 py-2 xl:flex xl:items-center xl:justify-center xl:gap-3 xl:px-8">
         <!-- Logo w/ Collapse Button -->
         <div class="flex items-center">
             <!-- Collapse Button -->
             <div class="xl:hidden">
                 <button type="button"
                     class="hs-collapse-toggle relative flex size-10 items-center justify-center rounded-lg border border-blue-200 font-semibold text-white hover:bg-blue-900 focus:bg-blue-900 focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                     id="hs-header-classic-collapse" aria-expanded="false" aria-controls="hs-header-classic"
                     aria-label="Toggle navigation" data-hs-collapse="#hs-header-classic">
                     <x-icons.hamburger-nav />
                     <x-icons.x-mark-nav />
                     <span class="sr-only">Toggle navigation</span>
                 </button>
             </div>
             <!-- End Collapse Button -->
         </div>
         <!-- End Logo w/ Collapse Button -->

         <!-- Collapse -->
         <div id="hs-header-classic"
             class="hs-collapse hidden grow basis-full overflow-hidden transition-all duration-300 xl:block"
             aria-labelledby="hs-header-classic-collapse">
             <div
                 class="max-h-[75vh] overflow-hidden overflow-y-auto [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-thumb]:bg-slate-300 [&::-webkit-scrollbar-track]:bg-slate-100 [&::-webkit-scrollbar]:w-2">
                 <div class="flex flex-col gap-0.5 py-2 xl:flex-row xl:items-center xl:justify-center xl:gap-1 xl:py-0">
                     <x-nav.links />
                 </div>
             </div>
         </div>
     </nav>
 </header>
