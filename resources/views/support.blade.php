<x-guest-layout>
    <div class="bg-white" x-data="{menu: false}">
        <!--
          Mobile menu

          Off-canvas menu for mobile, show/hide based on off-canvas menu state.
        -->
        <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
            <!--
              Off-canvas menu backdrop, show/hide based on off-canvas menu state.

              Entering: "transition-opacity ease-linear duration-300"
                From: "opacity-0"
                To: "opacity-100"
              Leaving: "transition-opacity ease-linear duration-300"
                From: "opacity-100"
                To: "opacity-0"
            -->
            <div class="fixed inset-0 bg-black bg-opacity-25"></div>

            <div class="fixed inset-0 flex z-40">
                <!--
                  Off-canvas menu, show/hide based on off-canvas menu state.

                  Entering: "transition ease-in-out duration-300 transform"
                    From: "-translate-x-full"
                    To: "translate-x-0"
                  Leaving: "transition ease-in-out duration-300 transform"
                    From: "translate-x-0"
                    To: "-translate-x-full"
                -->
                <div class="relative max-w-xs w-full bg-white shadow-xl pb-12 flex flex-col overflow-y-auto" x-show="menu" x-cloak>
                    <div class="px-4 pt-5 pb-2 flex">
                        <button @click="menu = false" type="button" class="-m-2 p-2 rounded-md inline-flex items-center justify-center text-gray-400">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <!-- Links -->
                    <div class="mt-2" x-data="{women: false, men: false}">
                        <div class="border-b border-gray-200">
                            <div class="-mb-px flex px-4 space-x-8" aria-orientation="horizontal" role="tablist">
                                <!-- Selected: "text-indigo-600 border-indigo-600", Not Selected: "text-gray-900 border-transparent" -->
                                <button @click="women = true; men = false" id="tabs-1-tab-1" class="text-gray-900 border-transparent flex-1 whitespace-nowrap py-4 px-1 border-b-2 text-base font-medium" aria-controls="tabs-1-panel-1" role="tab" type="button">Education</button>

                                <!-- Selected: "text-indigo-600 border-indigo-600", Not Selected: "text-gray-900 border-transparent" -->
                                <button @click="men = true; women = false" id="tabs-1-tab-2" class="text-gray-900 border-transparent flex-1 whitespace-nowrap py-4 px-1 border-b-2 text-base font-medium" aria-controls="tabs-1-panel-2" role="tab" type="button">Products</button>
                            </div>
                        </div>

                        <!-- 'Women' tab panel, show/hide based on tab state. -->
                        <div x-show="women" x-cloak id="tabs-1-panel-1" class="px-4 py-6 space-y-12" aria-labelledby="tabs-1-tab-1" role="tabpanel" tabindex="0">
                            <div class="grid grid-cols-2 gap-x-4 gap-y-10">
                                <div class="group relative">
                                    <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                        <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg" alt="Models sitting back to back, wearing Basic Tee in black and bone." class="object-center object-cover">
                                    </div>
                                    <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                                        <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                        New Arrivals
                                    </a>
                                    <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                                </div>

                                <div class="group relative">
                                    <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                        <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg" alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees." class="object-center object-cover">
                                    </div>
                                    <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                                        <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                        Basic Tees
                                    </a>
                                    <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                                </div>

                                <div class="group relative">
                                    <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                        <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-03.jpg" alt="Model wearing minimalist watch with black wristband and white watch face." class="object-center object-cover">
                                    </div>
                                    <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                                        <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                        Accessories
                                    </a>
                                    <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                                </div>

                                <div class="group relative">
                                    <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                        <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-04.jpg" alt="Model opening tan leather long wallet with credit card pockets and cash pouch." class="object-center object-cover">
                                    </div>
                                    <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                                        <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                        Carry
                                    </a>
                                    <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                                </div>
                            </div>
                        </div>

                        <!-- 'Men' tab panel, show/hide based on tab state. -->
                        <div x-show="men" x-cloak id="tabs-1-panel-2" class="px-4 py-6 space-y-12" aria-labelledby="tabs-1-tab-2" role="tabpanel" tabindex="0">
                            <div class="grid grid-cols-2 gap-x-4 gap-y-10">
                                <div class="group relative">
                                    <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                        <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-01.jpg" alt="Hats and sweaters on wood shelves next to various colors of t-shirts on hangers." class="object-center object-cover">
                                    </div>
                                    <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                                        <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                        New Arrivals
                                    </a>
                                    <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                                </div>

                                <div class="group relative">
                                    <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                        <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-02.jpg" alt="Model wearing light heather gray t-shirt." class="object-center object-cover">
                                    </div>
                                    <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                                        <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                        Productivity
                                    </a>
                                    <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                                </div>

                                <div class="group relative">
                                    <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                        <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-03.jpg" alt="Grey 6-panel baseball hat with black brim, black mountain graphic on front, and light heather gray body." class="object-center object-cover">
                                    </div>
                                    <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                                        <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                        Accessories
                                    </a>
                                    <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                                </div>

                                <div class="group relative">
                                    <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                        <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-04.jpg" alt="Model putting folded cash into slim card holder olive leather wallet with hand stitching." class="object-center object-cover">
                                    </div>
                                    <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                                        <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                        Stationary
                                    </a>
                                    <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-gray-200 py-6 px-4 space-y-6">
                        <div class="flow-root">
                            <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Support</a>
                        </div>

                        <div class="flow-root">
                            <a href="#" class="-m-2 p-2 block font-medium text-gray-900">About</a>
                        </div>
                    </div>

                    <div class="border-t border-gray-200 py-6 px-4 space-y-6">
                        <div class="flow-root">
                            <a href="{{route('register')}}" class="-m-2 p-2 block font-medium text-gray-900">Create an account</a>
                        </div>
                        <div class="flow-root">
                            <a href="{{route('login')}}" class="-m-2 p-2 block font-medium text-gray-900">Sign in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hero section -->
        <div class="relative bg-gray-900">
            <!-- Decorative image and overlay -->
            <div aria-hidden="true" class="absolute inset-0 overflow-hidden">
                <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-hero-full-width.jpg" alt="" class="w-full h-full object-center object-cover">
            </div>
            <div aria-hidden="true" class="absolute inset-0 bg-gray-900 opacity-50"></div>

            <!-- Navigation -->
            <header class="relative z-10">
                <nav aria-label="Top">
                    <!-- Secondary navigation -->
                    <div class="backdrop-blur-md backdrop-filter bg-opacity-10 bg-white">
                        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                            <div>
                                <div class="h-16 flex items-center justify-between">
                                    <!-- Logo (lg+) -->
                                    <div class="hidden lg:flex-1 lg:flex lg:items-center">
                                        <a href="#">
                                            <span class="sr-only">Workflow</span>
                                            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=white" alt="">
                                        </a>
                                    </div>

                                    <div class="hidden h-full lg:flex" x-data="{men: false, women: false}">
                                        <!-- Flyout menus -->
                                        <div class="px-4 bottom-0 inset-x-0">
                                            <div class="h-full flex justify-center space-x-8">
                                                <div class="flex">
                                                    <div class="relative flex">
                                                        <button @click="women = true; men = false" @click.away="women = false" type="button" class="relative z-10 flex items-center justify-center transition-colors ease-out duration-200 text-sm font-medium text-white" aria-expanded="false">
                                                            Products
                                                            <!-- Open: "bg-white", Closed: "" -->
                                                            <span class="absolute -bottom-px inset-x-0 h-0.5 transition ease-out duration-200" aria-hidden="true"></span>
                                                        </button>
                                                    </div>

                                                    <!--
                                                      'Women' flyout menu, show/hide based on flyout menu state.

                                                      Entering: "transition ease-out duration-200"
                                                        From: "opacity-0"
                                                        To: "opacity-100"
                                                      Leaving: "transition ease-in duration-150"
                                                        From: "opacity-100"
                                                        To: "opacity-0"
                                                    -->
                                                    <div x-show="women" x-cloak class="absolute top-full inset-x-0 text-sm text-gray-500">
                                                        <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                                        <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

                                                        <div class="relative bg-white">
                                                            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                                                <div class="grid grid-cols-4 gap-y-10 gap-x-8 py-16">
                                                                    <div class="group relative">
                                                                        <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                                                            <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg" alt="Models sitting back to back, wearing Basic Tee in black and bone." class="object-center object-cover">
                                                                        </div>
                                                                        <a href="{{route('products')}}" class="mt-4 block font-medium text-gray-900">
                                                                            <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                                                            New Arrivals
                                                                        </a>
                                                                        <p aria-hidden="true" class="mt-1">Shop now</p>
                                                                    </div>

                                                                    <div class="group relative">
                                                                        <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                                                            <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg" alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees." class="object-center object-cover">
                                                                        </div>
                                                                        <a href="#" class="mt-4 block font-medium text-gray-900">
                                                                            <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                                                            Productivity
                                                                        </a>
                                                                        <p aria-hidden="true" class="mt-1">Shop now</p>
                                                                    </div>

                                                                    <div class="group relative">
                                                                        <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                                                            <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-03.jpg" alt="Model wearing minimalist watch with black wristband and white watch face." class="object-center object-cover">
                                                                        </div>
                                                                        <a href="#" class="mt-4 block font-medium text-gray-900">
                                                                            <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                                                            Accessories
                                                                        </a>
                                                                        <p aria-hidden="true" class="mt-1">Shop now</p>
                                                                    </div>

                                                                    <div class="group relative">
                                                                        <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                                                            <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-04.jpg" alt="Model opening tan leather long wallet with credit card pockets and cash pouch." class="object-center object-cover">
                                                                        </div>
                                                                        <a href="#" class="mt-4 block font-medium text-gray-900">
                                                                            <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                                                            Stationary
                                                                        </a>
                                                                        <p aria-hidden="true" class="mt-1">Shop now</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="flex">
                                                    <div class="relative flex">
                                                        <button @click="men = true; women = false" @click.away="men = false" type="button" class="relative z-10 flex items-center justify-center transition-colors ease-out duration-200 text-sm font-medium text-white" aria-expanded="false">
                                                            Education
                                                            <!-- Open: "bg-white", Closed: "" -->
                                                            <span class="absolute -bottom-px inset-x-0 h-0.5 transition ease-out duration-200" aria-hidden="true"></span>
                                                        </button>
                                                    </div>

                                                    <!--
                                                      'Women' flyout menu, show/hide based on flyout menu state.

                                                      Entering: "transition ease-out duration-200"
                                                        From: "opacity-0"
                                                        To: "opacity-100"
                                                      Leaving: "transition ease-in duration-150"
                                                        From: "opacity-100"
                                                        To: "opacity-0"
                                                    -->
                                                    <div x-show="men" x-cloak class="absolute top-full inset-x-0 text-sm text-gray-500">
                                                        <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                                        <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

                                                        <div class="relative bg-white">
                                                            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                                                <div class="grid grid-cols-4 gap-y-10 gap-x-8 py-16">
                                                                    <div class="group relative">
                                                                        <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                                                            <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-01.jpg" alt="Hats and sweaters on wood shelves next to various colors of t-shirts on hangers." class="object-center object-cover">
                                                                        </div>
                                                                        <a href="#" class="mt-4 block font-medium text-gray-900">
                                                                            <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                                                            New Arrivals
                                                                        </a>
                                                                        <p aria-hidden="true" class="mt-1">Shop now</p>
                                                                    </div>

                                                                    <div class="group relative">
                                                                        <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                                                            <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-02.jpg" alt="Model wearing light heather gray t-shirt." class="object-center object-cover">
                                                                        </div>
                                                                        <a href="#" class="mt-4 block font-medium text-gray-900">
                                                                            <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                                                            Basic Tees
                                                                        </a>
                                                                        <p aria-hidden="true" class="mt-1">Shop now</p>
                                                                    </div>

                                                                    <div class="group relative">
                                                                        <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                                                            <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-03.jpg" alt="Grey 6-panel baseball hat with black brim, black mountain graphic on front, and light heather gray body." class="object-center object-cover">
                                                                        </div>
                                                                        <a href="#" class="mt-4 block font-medium text-gray-900">
                                                                            <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                                                            Accessories
                                                                        </a>
                                                                        <p aria-hidden="true" class="mt-1">Shop now</p>
                                                                    </div>

                                                                    <div class="group relative">
                                                                        <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                                                            <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-04.jpg" alt="Model putting folded cash into slim card holder olive leather wallet with hand stitching." class="object-center object-cover">
                                                                        </div>
                                                                        <a href="#" class="mt-4 block font-medium text-gray-900">
                                                                            <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                                                            Carry
                                                                        </a>
                                                                        <p aria-hidden="true" class="mt-1">Shop now</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a href="#" class="flex items-center text-sm font-medium text-white">Support</a>

                                                <a href="#" class="flex items-center text-sm font-medium text-white">About</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Mobile menu and search (lg-) -->
                                    <div class="flex-1 flex items-center lg:hidden">
                                        <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
                                        <button @click="menu = true" type="button" class="-ml-2 p-2 text-white">
                                            <span class="sr-only">Open menu</span>
                                            <!-- Heroicon name: outline/menu -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                                            </svg>
                                        </button>

                                        <!-- Search -->
                                        <a href="{{route('login')}}" class="ml-2 p-2 text-white">
                                            <span class="sr-only">Login / Register</span>
                                            <!-- Heroicon name: outline/search -->
                                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                            </svg>
                                        </a>
                                    </div>

                                    <!-- Logo (lg-) -->
                                    <a href="#" class="lg:hidden">
                                        <span class="sr-only">Workflow</span>
                                        <img src="https://tailwindui.com/img/logos/workflow-mark.svg?color=white" alt="" class="h-8 w-auto">
                                    </a>

                                    <div class="flex-1 flex items-center justify-end">
                                        <a href="{{route('login')}}">
                                            <x-button class="hidden text-sm font-medium text-white lg:block"> Login / Register </x-button>
                                        </a>

                                        <div class="flex items-center lg:ml-8">
                                            <!-- Cart -->
                                            @auth()
                                                <div class="ml-4 flow-root lg:ml-8">
                                                    <a href="#" class="group -m-2 p-2 flex items-center">
                                                        <!-- Heroicon name: outline/shopping-bag -->
                                                        <svg class="flex-shrink-0 h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                                        </svg>
                                                        <span class="ml-2 text-sm font-medium text-white">0</span>
                                                        <span class="sr-only">items in cart, view bag</span>
                                                    </a>
                                                </div>
                                            @endauth()
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>

            <div class="relative max-w-3xl mx-auto py-32 px-6 flex flex-col items-center text-center sm:py-64 lg:px-0">
                <h1 class="text-4xl font-extrabold tracking-tight text-white lg:text-6xl">Support</h1>
{{--                <p class="mt-4 text-xl text-white">Enabling students to buy the things they need during education for a price that works for everyone.</p>--}}
{{--                <a href="#" class="mt-8 inline-block bg-white border border-transparent rounded-md py-3 px-8 text-base font-medium text-gray-900 hover:bg-gray-100">Shop for anything</a>--}}
            </div>
        </div>

        <section class="relative bg-white" aria-labelledby="contact-heading">
            <div class="absolute w-full h-1/2 bg-warm-gray-50" aria-hidden="true"></div>
            <!-- Decorative dot pattern -->
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <svg class="absolute z-0 top-0 right-0 transform -translate-y-16 translate-x-1/2 sm:translate-x-1/4 md:-translate-y-24 lg:-translate-y-72" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
                    <defs>
                        <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-warm-gray-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="384" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)" />
                </svg>
            </div>
            <div class=" w-full mx-auto">
                <div class="relative bg-white shadow-xl">
                    <h2 id="contact-heading" class="sr-only">Contact us</h2>

                    <div class="grid grid-cols-1 lg:grid-cols-3">
                        <!-- Contact information -->
                        <div class="relative overflow-hidden py-10 px-6 bg-gradient-to-b from-gray-500 to-gray-600 sm:px-10 xl:p-12">
                            <!-- Decorative angle backgrounds -->
                            <div class="absolute inset-0 pointer-events-none sm:hidden" aria-hidden="true">
                                <svg class="absolute inset-0 w-full h-full" width="343" height="388" viewBox="0 0 343 388" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M-99 461.107L608.107-246l707.103 707.107-707.103 707.103L-99 461.107z" fill="url(#linear1)" fill-opacity=".1" />
                                    <defs>
                                        <linearGradient id="linear1" x1="254.553" y1="107.554" x2="961.66" y2="814.66" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#fff"></stop>
                                            <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <div class="hidden absolute top-0 right-0 bottom-0 w-1/2 pointer-events-none sm:block lg:hidden" aria-hidden="true">
                                <svg class="absolute inset-0 w-full h-full" width="359" height="339" viewBox="0 0 359 339" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M-161 382.107L546.107-325l707.103 707.107-707.103 707.103L-161 382.107z" fill="url(#linear2)" fill-opacity=".1" />
                                    <defs>
                                        <linearGradient id="linear2" x1="192.553" y1="28.553" x2="899.66" y2="735.66" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#fff"></stop>
                                            <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <div class="hidden absolute top-0 right-0 bottom-0 w-1/2 pointer-events-none lg:block" aria-hidden="true">
                                <svg class="absolute inset-0 w-full h-full" width="160" height="678" viewBox="0 0 160 678" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M-161 679.107L546.107-28l707.103 707.107-707.103 707.103L-161 679.107z" fill="url(#linear3)" fill-opacity=".1" />
                                    <defs>
                                        <linearGradient id="linear3" x1="192.553" y1="325.553" x2="899.66" y2="1032.66" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#fff"></stop>
                                            <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-white">Contact information</h3>
                            <p class="mt-6 text-base text-teal-50 max-w-3xl">Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien tortor lacus arcu.</p>
                            <dl class="mt-8 space-y-6">
                                <dt><span class="sr-only">Phone number</span></dt>
                                <dd class="flex text-base text-teal-50">
                                    <!-- Heroicon name: outline/phone -->
                                    <svg class="flex-shrink-0 w-6 h-6 text-teal-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    <span class="ml-3">+1 (555) 123-4567</span>
                                </dd>
                                <dt><span class="sr-only">Email</span></dt>
                                <dd class="flex text-base text-teal-50">
                                    <!-- Heroicon name: outline/mail -->
                                    <svg class="flex-shrink-0 w-6 h-6 text-teal-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <span class="ml-3">support@workcation.com</span>
                                </dd>
                            </dl>
                            <ul role="list" class="mt-8 flex space-x-12">
                                <li>
                                    <a class="text-teal-200 hover:text-teal-100" href="#">
                                        <span class="sr-only">Facebook</span>
                                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-teal-200 hover:text-teal-100" href="#">
                                        <span class="sr-only">GitHub</span>
                                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-teal-200 hover:text-teal-100" href="#">
                                        <span class="sr-only">Twitter</span>
                                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Contact form -->
                        <div class="py-10 px-6 sm:px-10 lg:col-span-2 xl:p-12">
                            <h3 class="text-lg font-medium text-warm-gray-900">Send us a message</h3>
                            <form action="#" method="POST" class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                                <div>
                                    <label for="first-name" class="block text-sm font-medium text-warm-gray-900">First name</label>
                                    <div class="mt-1">
                                        <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-teal-500 focus:border-teal-500 border-warm-gray-300 rounded-md">
                                    </div>
                                </div>
                                <div>
                                    <label for="last-name" class="block text-sm font-medium text-warm-gray-900">Last name</label>
                                    <div class="mt-1">
                                        <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-teal-500 focus:border-teal-500 border-warm-gray-300 rounded-md">
                                    </div>
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-warm-gray-900">Email</label>
                                    <div class="mt-1">
                                        <input id="email" name="email" type="email" autocomplete="email" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-teal-500 focus:border-teal-500 border-warm-gray-300 rounded-md">
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between">
                                        <label for="phone" class="block text-sm font-medium text-warm-gray-900">Phone</label>
                                        <span id="phone-optional" class="text-sm text-warm-gray-500">Optional</span>
                                    </div>
                                    <div class="mt-1">
                                        <input type="text" name="phone" id="phone" autocomplete="tel" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-teal-500 focus:border-teal-500 border-warm-gray-300 rounded-md" aria-describedby="phone-optional">
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="subject" class="block text-sm font-medium text-warm-gray-900">Subject</label>
                                    <div class="mt-1">
                                        <input type="text" name="subject" id="subject" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-teal-500 focus:border-teal-500 border-warm-gray-300 rounded-md">
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <div class="flex justify-between">
                                        <label for="message" class="block text-sm font-medium text-warm-gray-900">Message</label>
                                        <span id="message-max" class="text-sm text-warm-gray-500">Max. 500 characters</span>
                                    </div>
                                    <div class="mt-1">
                                        <textarea id="message" name="message" rows="4" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-teal-500 focus:border-teal-500 border border-warm-gray-300 rounded-md" aria-describedby="message-max"></textarea>
                                    </div>
                                </div>
                                <div class="sm:col-span-2 sm:flex sm:justify-end">
                                    <button type="submit" class="mt-2 w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-teal-500 hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500 sm:w-auto">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</x-guest-layout>