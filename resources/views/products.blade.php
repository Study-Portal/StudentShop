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
                                        Basic Tees
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
                                        Carry
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
                                                                        <a href="#" class="mt-4 block font-medium text-gray-900">
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
                                                                            Basic Tees
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
                                                                            Carry
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
                <h1 class="text-4xl font-extrabold tracking-tight text-white lg:text-6xl">Our Products</h1>
                <p class="mt-4 text-xl text-white">High quality products especially picked and crafted for students in mind.</p>
            </div>
        </div>

        <main class="pb-24">
            <!-- Filters -->
            <section aria-labelledby="filter-heading" class="relative z-10 border-t border-b border-gray-200 grid items-center" x-data="{filter:false}">
                <h2 id="filter-heading" class="sr-only">Filters</h2>
                <div class="relative col-start-1 row-start-1 py-4">
                    <div class="max-w-7xl mx-auto flex space-x-6 divide-x divide-gray-200 text-sm px-4 sm:px-6 lg:px-8">
                        <div>
                            <button @click="filter = true" @click.away="filter = false" type="button" class="group text-gray-700 font-medium flex items-center" aria-controls="disclosure-1" aria-expanded="false">
                                <!-- Heroicon name: solid/filter -->
                                <svg class="flex-none w-5 h-5 mr-2 text-gray-400 group-hover:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                                </svg>
                                Filters
                            </button>
                        </div>
                        <div class="pl-6">
                            <button type="button" class="text-gray-500">Clear all</button>
                        </div>
                    </div>
                </div>
                <div class="border-t border-gray-200 py-10" id="disclosure-1" x-show="filter" x-cloak>
                    <div class="max-w-7xl mx-auto grid grid-cols-2 gap-x-4 px-4 text-sm sm:px-6 md:gap-x-6 lg:px-8">
                        <div class="grid grid-cols-1 gap-y-10 auto-rows-min md:grid-cols-2 md:gap-x-6">
                            <fieldset>
                                <legend class="block font-medium">Price</legend>
                                <div class="pt-6 space-y-6 sm:pt-4 sm:space-y-4">
                                    <div class="flex items-center text-base sm:text-sm">
                                        <input id="price-0" name="price[]" value="0" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="price-0" class="ml-3 min-w-0 flex-1 text-gray-600"> $0 - $25 </label>
                                    </div>

                                    <div class="flex items-center text-base sm:text-sm">
                                        <input id="price-1" name="price[]" value="25" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="price-1" class="ml-3 min-w-0 flex-1 text-gray-600"> $25 - $50 </label>
                                    </div>

                                    <div class="flex items-center text-base sm:text-sm">
                                        <input id="price-2" name="price[]" value="50" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="price-2" class="ml-3 min-w-0 flex-1 text-gray-600"> $50 - $75 </label>
                                    </div>

                                    <div class="flex items-center text-base sm:text-sm">
                                        <input id="price-3" name="price[]" value="75" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="price-3" class="ml-3 min-w-0 flex-1 text-gray-600"> $75+ </label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="block font-medium">Color</legend>
                                <div class="pt-6 space-y-6 sm:pt-4 sm:space-y-4">
                                    <div class="flex items-center text-base sm:text-sm">
                                        <input id="color-0" name="color[]" value="white" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="color-0" class="ml-3 min-w-0 flex-1 text-gray-600"> White </label>
                                    </div>

                                    <div class="flex items-center text-base sm:text-sm">
                                        <input id="color-1" name="color[]" value="beige" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="color-1" class="ml-3 min-w-0 flex-1 text-gray-600"> Beige </label>
                                    </div>

                                    <div class="flex items-center text-base sm:text-sm">
                                        <input id="color-2" name="color[]" value="blue" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500" checked>
                                        <label for="color-2" class="ml-3 min-w-0 flex-1 text-gray-600"> Blue </label>
                                    </div>

                                    <div class="flex items-center text-base sm:text-sm">
                                        <input id="color-3" name="color[]" value="brown" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="color-3" class="ml-3 min-w-0 flex-1 text-gray-600"> Brown </label>
                                    </div>

                                    <div class="flex items-center text-base sm:text-sm">
                                        <input id="color-4" name="color[]" value="green" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="color-4" class="ml-3 min-w-0 flex-1 text-gray-600"> Green </label>
                                    </div>

                                    <div class="flex items-center text-base sm:text-sm">
                                        <input id="color-5" name="color[]" value="purple" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="color-5" class="ml-3 min-w-0 flex-1 text-gray-600"> Purple </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="grid grid-cols-1 gap-y-10 auto-rows-min md:grid-cols-2 md:gap-x-6">
                            <fieldset>
                                <legend class="block font-medium">Size</legend>
                                <div class="pt-6 space-y-6 sm:pt-4 sm:space-y-4">
                                    <div class="flex items-center text-base sm:text-sm">
                                        <input id="size-0" name="size[]" value="xs" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="size-0" class="ml-3 min-w-0 flex-1 text-gray-600"> XS </label>
                                    </div>

                                    <div class="flex items-center text-base sm:text-sm">
                                        <input id="size-1" name="size[]" value="s" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500" checked>
                                        <label for="size-1" class="ml-3 min-w-0 flex-1 text-gray-600"> S </label>
                                    </div>

                                    <div class="flex items-center text-base sm:text-sm">
                                        <input id="size-2" name="size[]" value="m" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="size-2" class="ml-3 min-w-0 flex-1 text-gray-600"> M </label>
                                    </div>

                                    <div class="flex items-center text-base sm:text-sm">
                                        <input id="size-3" name="size[]" value="l" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="size-3" class="ml-3 min-w-0 flex-1 text-gray-600"> L </label>
                                    </div>

                                    <div class="flex items-center text-base sm:text-sm">
                                        <input id="size-4" name="size[]" value="xl" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="size-4" class="ml-3 min-w-0 flex-1 text-gray-600"> XL </label>
                                    </div>

                                    <div class="flex items-center text-base sm:text-sm">
                                        <input id="size-5" name="size[]" value="2xl" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="size-5" class="ml-3 min-w-0 flex-1 text-gray-600"> 2XL </label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="block font-medium">Category</legend>
                                <div class="pt-6 space-y-6 sm:pt-4 sm:space-y-4">
                                    <div class="flex items-center text-base sm:text-sm">
                                        <input id="category-0" name="category[]" value="all-new-arrivals" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="category-0" class="ml-3 min-w-0 flex-1 text-gray-600"> All New Arrivals </label>
                                    </div>

                                    <div class="flex items-center text-base sm:text-sm">
                                        <input id="category-1" name="category[]" value="tees" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="category-1" class="ml-3 min-w-0 flex-1 text-gray-600"> Tees </label>
                                    </div>

                                    <div class="flex items-center text-base sm:text-sm">
                                        <input id="category-2" name="category[]" value="objects" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="category-2" class="ml-3 min-w-0 flex-1 text-gray-600"> Objects </label>
                                    </div>

                                    <div class="flex items-center text-base sm:text-sm">
                                        <input id="category-3" name="category[]" value="sweatshirts" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="category-3" class="ml-3 min-w-0 flex-1 text-gray-600"> Sweatshirts </label>
                                    </div>

                                    <div class="flex items-center text-base sm:text-sm">
                                        <input id="category-4" name="category[]" value="pants-and-shorts" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="category-4" class="ml-3 min-w-0 flex-1 text-gray-600"> Pants &amp; Shorts </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="col-start-1 row-start-1 py-4" x-data="{sort:false}">
                    <div class="flex justify-end max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="relative inline-block">
                            <div class="flex">
                                <button @click="sort = true" @click.away="sort = false" type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" id="menu-button" aria-expanded="false" aria-haspopup="true">
                                    Sort
                                    <!-- Heroicon name: solid/chevron-down -->
                                    <svg class="flex-shrink-0 -mr-1 ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>

                            <!--
                              Dropdown menu, show/hide based on menu state.

                              Entering: "transition ease-out duration-100"
                                From: "transform opacity-0 scale-95"
                                To: "transform opacity-100 scale-100"
                              Leaving: "transition ease-in duration-75"
                                From: "transform opacity-100 scale-100"
                                To: "transform opacity-0 scale-95"
                            -->
                            <div x-show="sort" x-cloak class="origin-top-right absolute right-0 mt-2 w-40 rounded-md shadow-2xl bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div class="py-1" role="none">
                                    <!--
                                      Active: "bg-gray-100", Not Active: ""

                                      Selected: "font-medium text-gray-900", Not Selected: "text-gray-500"
                                    -->
                                    <a href="#" class="font-medium text-gray-900 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0"> Most Popular </a>

                                    <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1"> Best Rating </a>

                                    <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2"> Newest </a>

                                    <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-3"> Price: Low to High </a>

                                    <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-4"> Price: High to Low </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Product grid -->
            <section aria-labelledby="products-heading" class="max-w-7xl mx-auto overflow-hidden sm:px-6 lg:px-8">
                <h2 id="products-heading" class="sr-only">Products</h2>

                <div class="-mx-px border-l border-gray-200 grid grid-cols-4 space-x-6 space-y-6 sm:mx-0 md:grid-cols-4 lg:grid-cols-4">

                    @foreach($products as $p)
                    <div class="group relative p-4 border-r border-b border-gray-200 sm:p-6">
                        <div class="rounded-lg overflow-hidden bg-gray-200 aspect-w-1 aspect-h-1 group-hover:opacity-75">
                            <img src="https://tailwindui.com/img/ecommerce-images/category-page-05-image-card-01.jpg" alt="TODO" class="w-full h-full object-center object-cover">
                        </div>
                        <div class="pt-10 pb-4 text-center">
                            <h3 class="text-sm font-medium text-gray-900">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    {{$p->name}}
                                </a>
                            </h3>
                            <div class="mt-3 flex flex-col items-center">
                                <p class="sr-only">5 out of 5 stars</p>
                                <div class="flex items-center">
                                    <!-- Heroicon name: solid/star -->
                                    <svg class="text-yellow-400 flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>

                                    <!-- Heroicon name: solid/star -->
                                    <svg class="text-yellow-400 flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>

                                    <!-- Heroicon name: solid/star -->
                                    <svg class="text-yellow-400 flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>

                                    <!-- Heroicon name: solid/star -->
                                    <svg class="text-yellow-400 flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>

                                    <!-- Heroicon name: solid/star -->
                                    <svg class="text-yellow-400 flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                                <p class="mt-1 text-sm text-gray-500">38 reviews</p>
                            </div>
                            <p class="mt-4 text-base font-medium text-gray-900">£{{$p->price}}</p>
                        </div>
                    </div>
                    @endforeach

                    <!-- More products... -->
                </div>
            </section>

            <!-- Pagination -->
            <nav aria-label="Pagination" class="max-w-7xl mx-auto px-4 mt-6 flex justify-between text-sm font-medium text-gray-700 sm:px-6 lg:px-8">
                <div class="min-w-0 flex-1">
                    <a href="#" class="inline-flex items-center px-4 h-10 border border-gray-300 rounded-md bg-white hover:bg-gray-100 focus:outline-none focus:border-indigo-600 focus:ring-2 focus:ring-offset-1 focus:ring-offset-indigo-600 focus:ring-indigo-600 focus:ring-opacity-25"> Previous </a>
                </div>
                <div class="hidden space-x-2 sm:flex">
                    <!-- Current: "border-indigo-600 ring-1 ring-indigo-600", Default: "border-gray-300" -->
                    <a href="#" class="inline-flex items-center px-4 h-10 border border-gray-300 rounded-md bg-white hover:bg-gray-100 focus:outline-none focus:border-indigo-600 focus:ring-2 focus:ring-offset-1 focus:ring-offset-indigo-600 focus:ring-indigo-600 focus:ring-opacity-25"> 1 </a>
                    <a href="#" class="inline-flex items-center px-4 h-10 border border-gray-300 rounded-md bg-white hover:bg-gray-100 focus:outline-none focus:border-indigo-600 focus:ring-2 focus:ring-offset-1 focus:ring-offset-indigo-600 focus:ring-indigo-600 focus:ring-opacity-25"> 2 </a>
                    <a href="#" class="inline-flex items-center px-4 h-10 border border-indigo-600 ring-1 ring-indigo-600 rounded-md bg-white hover:bg-gray-100 focus:outline-none focus:border-indigo-600 focus:ring-2 focus:ring-offset-1 focus:ring-offset-indigo-600 focus:ring-indigo-600 focus:ring-opacity-25"> 3 </a>
                    <span class="inline-flex items-center text-gray-500 px-1.5 h-10"> ... </span>
                    <a href="#" class="inline-flex items-center px-4 h-10 border border-gray-300 rounded-md bg-white hover:bg-gray-100 focus:outline-none focus:border-indigo-600 focus:ring-2 focus:ring-offset-1 focus:ring-offset-indigo-600 focus:ring-indigo-600 focus:ring-opacity-25"> 8 </a>
                    <a href="#" class="inline-flex items-center px-4 h-10 border border-gray-300 rounded-md bg-white hover:bg-gray-100 focus:outline-none focus:border-indigo-600 focus:ring-2 focus:ring-offset-1 focus:ring-offset-indigo-600 focus:ring-indigo-600 focus:ring-opacity-25"> 9 </a>
                    <a href="#" class="inline-flex items-center px-4 h-10 border border-gray-300 rounded-md bg-white hover:bg-gray-100 focus:outline-none focus:border-indigo-600 focus:ring-2 focus:ring-offset-1 focus:ring-offset-indigo-600 focus:ring-indigo-600 focus:ring-opacity-25"> 10 </a>
                </div>
                <div class="min-w-0 flex-1 flex justify-end">
                    <a href="#" class="inline-flex items-center px-4 h-10 border border-gray-300 rounded-md bg-white hover:bg-gray-100 focus:outline-none focus:border-indigo-600 focus:ring-2 focus:ring-offset-1 focus:ring-offset-indigo-600 focus:ring-indigo-600 focus:ring-opacity-25"> Next </a>
                </div>
            </nav>
        </main>


    </div>
</x-guest-layout>