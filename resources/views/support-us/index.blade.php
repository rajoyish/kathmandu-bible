<x-guest-layout>
    <section class="isolate overflow-hidden bg-blue-50 px-6 md:px-8">
        <div class="relative mx-auto max-w-2xl py-24 sm:py-32 md:max-w-4xl">
            <x-top-mesh-gradient />
            <x-page-heading class="">Support Us</x-page-heading>
            <article class="space-y-4 py-8 md:py-16">
                <p>The Kathmandu Bible Institute and Research Center (KBI) is a non-profit Christian organization that
                    relies on your generous donations to continue its mission. Our work includes a range of projects,
                    publishing activities, administrative tasks, and providing for our dedicated teachers. We also
                    strive to support local churches and believers in Christ.</p>

                <p>Many of our students face financial challenges, yet we are committed to providing them with 100%
                    scholarships, made possible through funds from various sources and believers like you. When students
                    are unable to meet their monthly fees, we step in to support them in their time of need. However, we
                    also need to ensure our teachers and professors are compensated in a timely manner.</p>

                <p>We believe in the power of collective effort and generosity. If you are committed to God's mission
                    and wish to make a difference, we welcome any donations. Your contribution, regardless of its size,
                    is greatly appreciated and will make a significant impact. Thank you!</p>
            </article>
            <section class="md:flex-row flex-col flex gap-8 lg:gap-16">
                <aside class="flex-1">
                    {{-- Table --}}
                    <div>
                        <div class="sm:flex sm:items-center">
                            <div class="sm:flex-auto mb-4">
                                <h1 class="font-semibold leading-6 text-slate-700">Bank/Wire Transfer</h1>
                                <p class="text-slate-500">Here are our banking details for your convenience:</p>
                            </div>
                        </div>
                        <div class="flow-root">
                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                    <table class="min-w-full divide-y divide-gray-300">
                                        <tbody class="bg-blue-50">
                                            <tr class="even:bg-gray-50">
                                                <td class="whitespace-nowrap px-3 py-4 text-slate-500">Account Name:
                                                </td>
                                                <td
                                                    class="whitespace-nowrap py-4 pl-4 pr-3 font-medium text-slate-700 sm:pl-3">
                                                    Devilal Shrestha</td>
                                            </tr>
                                            <tr class="even:bg-gray-50">
                                                <td class="whitespace-nowrap px-3 py-4 text-slate-500">Account No.:</td>
                                                <td
                                                    class="whitespace-nowrap py-4 pl-4 pr-3 font-medium text-slate-700 sm:pl-3">
                                                    5240524589128018</td>
                                            </tr>
                                            <tr class="even:bg-gray-50">
                                                <td class="whitespace-nowrap px-3 py-4 text-slate-500">Bank’s Name</td>
                                                <td
                                                    class="whitespace-nowrap py-4 pl-4 pr-3 font-medium text-slate-700 sm:pl-3">
                                                    Machhapuchchhre Bank Ltd.</td>
                                            </tr>
                                            <tr class="even:bg-gray-50">
                                                <td class="whitespace-nowrap px-3 py-4 text-slate-500">SWIFT Code:</td>
                                                <td
                                                    class="whitespace-nowrap py-4 pl-4 pr-3 font-medium text-slate-700 sm:pl-3">
                                                    MBLNNPKA</td>
                                            </tr>
                                            <tr class="even:bg-gray-50">
                                                <td class="whitespace-nowrap px-3 py-4 text-slate-500">Bank Address</td>
                                                <td
                                                    class="whitespace-nowrap py-4 pl-4 pr-3 font-medium text-slate-700 sm:pl-3">
                                                    Naxal, Kathmandu</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Table --}}
                </aside>
                <aside>
                    <div>
                        <div class="sm:flex sm:items-center">
                            <div class="mb-4 sm:flex-auto">
                                <h1 class="font-semibold leading-6 text-slate-700">QR Code to Transfer</h1>
                                <p class="text-slate-500">For Fonepay / eSewa / Khalti, please use: 9841086379</p>
                            </div>
                        </div>
                        <div class="flow-root">
                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                    <img class="size-full" src="{{ asset('images/QR-code-KBI.png') }}"
                                        alt="QR Code of KBI to support" />
                                </div>
                            </div>
                        </div>
                    </div>

                </aside>
            </section>
        </div>
        {{-- <x-bottom-mesh-gradient /> --}}
    </section>
</x-guest-layout>
