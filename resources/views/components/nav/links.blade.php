<x-nav.item :href="route('home.index')" :active="request()->routeIs('home.index')">
  Home
</x-nav.item>

<!-- About Us -->
<x-nav.sub-wrap>
  <button id="hs-header-classic-dropdown" type="button"
          class="hs-dropdown-toggle flex w-full items-center p-2 text-white hover:text-blue-300 focus:text-blue-300 focus:outline-none"
          aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
    About Us
    <x-icons.chevron-nav/>
  </button>

  <x-nav.sub-ul>
    <x-nav.sub-item-li :href="route('introduction')" :active="request()->routeIs('introduction')">
      Introduction
    </x-nav.sub-item-li>
    <x-nav.sub-item-li :href="route('vision-purpose-and-mission')"
                       :active="request()->routeIs('vision-purpose-and-mission')">
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
    <x-icons.chevron-nav/>
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
<!--KBI Board -->
<!-- Academic Programs -->
<x-nav.sub-wrap>
  <button id="hs-header-classic-dropdown" type="button"
          class="hs-dropdown-toggle flex w-full items-center p-2 text-white hover:text-blue-300 focus:text-blue-300 focus:outline-none"
          aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
    Academic Programs
    <x-icons.chevron-nav/>
  </button>
  <x-nav.sub-ul>
    <x-nav.sub-item-li :href="route('certificate-in-theology-c-th')"
                       :active="request()->routeIs('certificate-in-theology-c-th')">
      Certificate in Theology (C. Th.)
    </x-nav.sub-item-li>
    <x-nav.sub-item-li :href="route('diploma-in-theology-dip-th')"
                       :active="request()->routeIs('diploma-in-theology-dip-th')">
      Diploma in Theology (Dip. Th.)
    </x-nav.sub-item-li>
    <x-nav.sub-item-li :href="route('bachelor-of-theology-b-th')"
                       :active="request()->routeIs('bachelor-of-theology-b-th')">
      Bachelor of Theology (B. Th.)
    </x-nav.sub-item-li>
    <x-nav.sub-item-li :href="route('m-a-in-christian-missions')"
                       :active="request()->routeIs('m-a-in-christian-missions')">
      M.A. Christian Missions
    </x-nav.sub-item-li>
  </x-nav.sub-ul>
</x-nav.sub-wrap>
<!-- / Academic Programs -->
<a class="flex items-center p-2 text-white hover:text-blue-300 focus:text-blue-300 focus:outline-none" href="#">
  Testimonials </a>
<a class="flex items-center p-2 text-white hover:text-blue-300 focus:text-blue-300 focus:outline-none" href="#">
  Events </a>
<x-nav.item :href="route('posts.index')" :active="request()->routeIs('posts.index')">
  Blog
</x-nav.item>
<x-nav.item :href="route('galleries.index')" :active="request()->routeIs('galleries.index')">
  Galleries
</x-nav.item>
<a class="flex items-center p-2 text-white hover:text-blue-300 focus:text-blue-300 focus:outline-none" href="#">
  Downloads </a>
<x-nav.item :href="route('support-us')" :active="request()->routeIs('support-us')">
  Support Us
</x-nav.item>
<a class="flex items-center p-2 text-white hover:text-blue-300 focus:text-blue-300 focus:outline-none" href="#">
  Contact </a>
