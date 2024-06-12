<x-guest-layout>
  <div class="bg-white">
    <section class="relative isolate px-6 lg:px-8 md:my-32 my-16">
      <x-top-mesh-gradient />
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto w-full lg:mx-0">
          <h2 class="text-center text-3xl font-bold text-slate-700 sm:text-4xl">Our Advisors</h2>
        </div>
        <ul role="list" class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-14 gap-y-14 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 xl:grid-cols-3">
          <!-- Advisor -->
          <li>
            <img class="aspect-[14/16] w-full rounded-xl object-cover" src="{{ asset('images/advisors/kiran-kumar-das.jpg') }}" alt="" />
            <h3 class="mt-6 text-xl font-semibold leading-8 text-slate-600">Rev. Dr. Kiran Kumar Das</h3>
            <p class="leading-7 text-slate-500">Chairman</p>
            <p class="text-sm leading-6 text-slate-500">Grace Church Ministries of Nepal</p>
          </li>
          <li>
            <img class="aspect-[14/16] w-full rounded-xl object-cover" src="{{ asset('images/advisors/hem-bahadur-thapa.jpg') }}" alt="" />
            <h3 class="mt-6 text-xl font-semibold leading-8 text-slate-600">Rev. Hem Bahadur Thapa</h3>
            <p class="leading-7 text-slate-500">Pastor</p>
            <p class="text-sm leading-6 text-slate-500">Siloam Raniban Church, Kathmandu</p>
          </li>
          <li>
            <img class="aspect-[14/16] w-full rounded-xl object-cover" src="{{ asset('images/advisors/simon-gurung.jpg') }}" alt="" />
            <h3 class="mt-6 text-xl font-semibold leading-8 text-slate-600">Rev. Simon Gurung</h3>
            <p class="leading-7 text-slate-500">Pastor</p>
            <p class="text-sm leading-6 text-slate-500">Emanuel Baptist Church, Kathmandu</p>
          </li>
          <li>
            <img class="aspect-[14/16] w-full rounded-xl object-cover" src="{{ asset('images/advisors/rudra-rai.jpg') }}" alt="" />
            <h3 class="mt-6 text-xl font-semibold leading-8 text-slate-600">Rev. Rudra Rai</h3>
            <p class="leading-7 text-slate-500">Pastor</p>
            <p class="text-sm leading-6 text-slate-500">Ray of Hope Church, Kathmandu</p>
          </li>
          <li>
            <img class="aspect-[14/16] w-full rounded-xl object-cover" src="{{ asset('images/advisors/purna-bahadur-tamang.jpg') }}" alt="" />
            <h3 class="mt-6 text-xl font-semibold leading-8 text-slate-600">Rev. Purna Bahadur Tamang</h3>
            <p class="leading-7 text-slate-500">Pastor</p>
            <p class="text-sm leading-6 text-slate-500">Greenland Church, Kathmandu</p>
          </li>
          <!-- Advisor -->
        </ul>
      </div>
      <x-bottom-mesh-gradient />
    </section>
  </div>
</x-guest-layout>
