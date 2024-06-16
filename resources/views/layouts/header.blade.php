@php use Illuminate\Support\Facades\Auth; @endphp
<section class="p-4 lg:flex lg:items-center z-50 lg:justify-between lg:p-8">
  <a href="/">
    <header class="flex flex-col items-center justify-center gap-2 md:flex-row md:gap-4">
      <img src="{{ asset('images/KBI-logo-new.jpg') }}" alt="Logo of Kathmandu Bible Institute And Research Center"
           class="block object-contain h-28 "/>
      <div
        class="text-center text-xl font-bold uppercase tracking-tight text-blue-800 md:space-y-2 md:text-left md:text-3xl">
        <h1>Kathmandu Bible Institute</h1>
        <h2>And Research Center</h2>
      </div>
    </header>
  </a>
  <div class="mt-8 flex flex-col items-center justify-center gap-4 sm:flex-row xl:mt-0">
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
      @guest()
        <a href="{{ route('filament.admin.auth.login') }}"
           class="flex items-center justify-center gap-2 rounded-full bg-cyan-600 px-8 py-2.5 font-semibold text-white hover:bg-cyan-700 focus:border-none focus:outline-none focus:ring focus:ring-cyan-400 active:bg-cyan-600 md:w-40">
          <span class="shrink-0">Admin</span>
          <x-icons.admin-user/>
        </a>
      @endguest
      @auth()
        <a href="/admin"
           class="flex items-center justify-center gap-2 rounded-full bg-blue-600 px-8 py-2.5 font-semibold text-white hover:bg-blue-700 focus:border-none focus:outline-none focus:ring focus:ring-blue-400 active:bg-blue-600 md:w-40">
          <span class="shrink-0">{{ auth::user()->name }}</span>
        </a>
      @endauth
    </div>
  </div>
</section>
