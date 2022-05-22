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
                            <a href="{{route('support')}}" class="-m-2 p-2 block font-medium text-gray-900">Support</a>
                        </div>

                        <div class="flow-root">
                            <a href="{{route('about')}}" class="-m-2 p-2 block font-medium text-gray-900">About</a>
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

                                                <a href="{{route('support')}}" class="flex items-center text-sm font-medium text-white">Support</a>

                                                <a href="{{route('about')}}" class="flex items-center text-sm font-medium text-white">About</a>
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
                <h1 class="text-4xl font-extrabold tracking-tight text-white lg:text-6xl">Introducing Student Shop</h1>
                <p class="mt-4 text-xl text-white">Enabling students to buy the things they need during education for a price that works for everyone.</p>
                <a href="#" class="mt-8 inline-block bg-white border border-transparent rounded-md py-3 px-8 text-base font-medium text-gray-900 hover:bg-gray-100">Shop for anything</a>
            </div>
        </div>

        <main>
            <!-- Category section -->
            <section aria-labelledby="category-heading" class="pt-24 sm:pt-32 xl:max-w-7xl xl:mx-auto xl:px-8">
                <div class="px-4 sm:px-6 sm:flex sm:items-center sm:justify-between lg:px-8 xl:px-0">
                    <h2 id="category-heading" class="text-2xl font-extrabold tracking-tight text-gray-900">Shop by Category</h2>
                    <a href="#" class="hidden text-sm font-semibold text-indigo-600 hover:text-indigo-500 sm:block">Browse all categories<span aria-hidden="true"> &rarr;</span></a>
                </div>

                <div class="mt-4 flow-root">
                    <div class="-my-2">
                        <div class="box-content py-2 relative h-80 overflow-x-auto xl:overflow-visible">
                            <div class="absolute min-w-screen-xl px-4 flex space-x-8 sm:px-6 lg:px-8 xl:relative xl:px-0 xl:space-x-0 xl:grid xl:grid-cols-5 xl:gap-x-8">
                                <a href="#" class="relative w-56 h-80 rounded-lg p-6 flex flex-col overflow-hidden hover:opacity-75 xl:w-auto">
                <span aria-hidden="true" class="absolute inset-0">
                  <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-category-01.jpg" alt="" class="w-full h-full object-center object-cover">
                </span>
                                    <span aria-hidden="true" class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                                    <span class="relative mt-auto text-center text-xl font-bold text-white">New Arrivals</span>
                                </a>

                                <a href="#" class="relative w-56 h-80 rounded-lg p-6 flex flex-col overflow-hidden hover:opacity-75 xl:w-auto">
                <span aria-hidden="true" class="absolute inset-0">
                  <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-category-02.jpg" alt="" class="w-full h-full object-center object-cover">
                </span>
                                    <span aria-hidden="true" class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                                    <span class="relative mt-auto text-center text-xl font-bold text-white">Productivity</span>
                                </a>

                                <a href="#" class="relative w-56 h-80 rounded-lg p-6 flex flex-col overflow-hidden hover:opacity-75 xl:w-auto">
                <span aria-hidden="true" class="absolute inset-0">
                  <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-category-04.jpg" alt="" class="w-full h-full object-center object-cover">
                </span>
                                    <span aria-hidden="true" class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                                    <span class="relative mt-auto text-center text-xl font-bold text-white">Workspace</span>
                                </a>

                                <a href="#" class="relative w-56 h-80 rounded-lg p-6 flex flex-col overflow-hidden hover:opacity-75 xl:w-auto">
                <span aria-hidden="true" class="absolute inset-0">
                  <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-category-05.jpg" alt="" class="w-full h-full object-center object-cover">
                </span>
                                    <span aria-hidden="true" class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                                    <span class="relative mt-auto text-center text-xl font-bold text-white">Accessories</span>
                                </a>

                                <a href="#" class="relative w-56 h-80 rounded-lg p-6 flex flex-col overflow-hidden hover:opacity-75 xl:w-auto">
                <span aria-hidden="true" class="absolute inset-0">
                  <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-category-03.jpg" alt="" class="w-full h-full object-center object-cover">
                </span>
                                    <span aria-hidden="true" class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                                    <span class="relative mt-auto text-center text-xl font-bold text-white">Sale</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6 px-4 sm:hidden">
                    <a href="#" class="block text-sm font-semibold text-indigo-600 hover:text-indigo-500">Browse all categories<span aria-hidden="true"> &rarr;</span></a>
                </div>
            </section>

            <!-- Featured section -->
            <section aria-labelledby="social-impact-heading" class="max-w-7xl mx-auto pt-24 px-4 sm:pt-32 sm:px-6 lg:px-8">
                <div class="relative rounded-lg overflow-hidden">
                    <div class="absolute inset-0">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-feature-section-01.jpg" alt="" class="w-full h-full object-center object-cover">
                    </div>
                    <div class="relative bg-gray-900 bg-opacity-75 py-32 px-6 sm:py-40 sm:px-12 lg:px-16">
                        <div class="relative max-w-3xl mx-auto flex flex-col items-center text-center">
                            <h2 id="social-impact-heading" class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                                <span class="block sm:inline">Level up</span>
                                <span class="block sm:inline">your desk</span>
                            </h2>
                            <p class="mt-3 text-xl text-white">Make your desk beautiful and organized. Post a picture to social media and watch it get more likes than life-changing announcements. Reflect on the shallow nature of existence. At least you have a really nice desk setup.</p>
                            <a href="#" class="mt-8 w-full block bg-white border border-transparent rounded-md py-3 px-8 text-base font-medium text-gray-900 hover:bg-gray-100 sm:w-auto">Shop Workspace</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Collection section -->
            <section aria-labelledby="collection-heading" class="max-w-xl mx-auto pt-24 px-4 sm:pt-32 sm:px-6 lg:max-w-7xl lg:px-8">
                <h2 id="collection-heading" class="text-2xl font-extrabold tracking-tight text-gray-900">Shop by Collection</h2>
                <p class="mt-4 text-base text-gray-500">Each season, we collaborate with world-class designers to create a collection inspired by the natural world.</p>

                <div class="mt-10 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-8">
                    <a href="#" class="group block">
                        <div aria-hidden="true" class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden group-hover:opacity-75 lg:aspect-w-5 lg:aspect-h-6">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-collection-01.jpg" alt="Brown leather key ring with brass metal loops and rivets on wood table." class="w-full h-full object-center object-cover">
                        </div>
                        <h3 class="mt-4 text-base font-semibold text-gray-900">Handcrafted Collection</h3>
                        <p class="mt-2 text-sm text-gray-500">Keep your phone, keys, and wallet together, so you can lose everything at once.</p>
                    </a>

                    <a href="#" class="group block">
                        <div aria-hidden="true" class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden group-hover:opacity-75 lg:aspect-w-5 lg:aspect-h-6">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-collection-02.jpg" alt="Natural leather mouse pad on white desk next to porcelain mug and keyboard." class="w-full h-full object-center object-cover">
                        </div>
                        <h3 class="mt-4 text-base font-semibold text-gray-900">Organized Desk Collection</h3>
                        <p class="mt-2 text-sm text-gray-500">The rest of the house will still be a mess, but your desk will look great.</p>
                    </a>

                    <a href="#" class="group block">
                        <div aria-hidden="true" class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden group-hover:opacity-75 lg:aspect-w-5 lg:aspect-h-6">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-collection-03.jpg" alt="Person placing task list card into walnut card holder next to felt carrying case on leather desk pad." class="w-full h-full object-center object-cover">
                        </div>
                        <h3 class="mt-4 text-base font-semibold text-gray-900">Focus Collection</h3>
                        <p class="mt-2 text-sm text-gray-500">Be more productive than enterprise project managers with a single piece of paper.</p>
                    </a>
                </div>
            </section>

            <!-- Featured section -->
            <section aria-labelledby="comfort-heading" class="max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
                <div class="relative rounded-lg overflow-hidden">
                    <div class="absolute inset-0">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-feature-section-02.jpg" alt="" class="w-full h-full object-center object-cover">
                    </div>
                    <div class="relative bg-gray-900 bg-opacity-75 py-32 px-6 sm:py-40 sm:px-12 lg:px-16">
                        <div class="relative max-w-3xl mx-auto flex flex-col items-center text-center">
                            <h2 id="comfort-heading" class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">Simple productivity</h2>
                            <p class="mt-3 text-xl text-white">Endless tasks, limited hours, a single piece of paper. Not really a haiku, but we're doing our best here. No kanban boards, burndown charts, or tangled flowcharts with our Focus system. Just the undeniable urge to fill empty circles.</p>
                            <a href="#" class="mt-8 w-full block bg-white border border-transparent rounded-md py-3 px-8 text-base font-medium text-gray-900 hover:bg-gray-100 sm:w-auto">Shop Focus</a>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer aria-labelledby="footer-heading" class="bg-gray-900">
            <h2 id="footer-heading" class="sr-only">Footer</h2>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="py-20 xl:grid xl:grid-cols-3 xl:gap-8">
                    <div class="grid grid-cols-2 gap-8 xl:col-span-2">
                        <div class="space-y-12 md:space-y-0 md:grid md:grid-cols-2 md:gap-8">
                            <div>
                                <h3 class="text-sm font-medium text-white">Shop</h3>
                                <ul role="list" class="mt-6 space-y-6">
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white"> Bags </a>
                                    </li>

                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white"> Tees </a>
                                    </li>

                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white"> Objects </a>
                                    </li>

                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white"> Home Goods </a>
                                    </li>

                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white"> Accessories </a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-white">Company</h3>
                                <ul role="list" class="mt-6 space-y-6">
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white"> Who we are </a>
                                    </li>

                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white"> Sustainability </a>
                                    </li>

                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white"> Press </a>
                                    </li>

                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white"> Careers </a>
                                    </li>

                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white"> Terms &amp; Conditions </a>
                                    </li>

                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white"> Privacy </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="space-y-12 md:space-y-0 md:grid md:grid-cols-2 md:gap-8">
                            <div>
                                <h3 class="text-sm font-medium text-white">Account</h3>
                                <ul role="list" class="mt-6 space-y-6">
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white"> Manage Account </a>
                                    </li>

                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white"> Returns &amp; Exchanges </a>
                                    </li>

                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white"> Redeem a Gift Card </a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-white">Connect</h3>
                                <ul role="list" class="mt-6 space-y-6">
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white"> Contact Us </a>
                                    </li>

                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white"> Twitter </a>
                                    </li>

                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white"> Instagram </a>
                                    </li>

                                    <li class="text-sm">
                                        <a href="#" class="text-gray-300 hover:text-white"> Pinterest </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12 md:mt-16 xl:mt-0">
                        <h3 class="text-sm font-medium text-white">Sign up for our newsletter</h3>
                        <p class="mt-6 text-sm text-gray-300">The latest deals and savings, sent to your inbox weekly.</p>
                        <form class="mt-2 flex sm:max-w-md">
                            <label for="email-address" class="sr-only">Email address</label>
                            <input id="email-address" type="text" autocomplete="email" required class="appearance-none min-w-0 w-full bg-white border border-white rounded-md shadow-sm py-2 px-4 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:border-white focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-900 focus:ring-white">
                            <div class="ml-4 flex-shrink-0">
                                <button type="submit" class="w-full bg-indigo-600 border border-transparent rounded-md shadow-sm py-2 px-4 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-900 focus:ring-indigo-500">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="border-t border-gray-800 py-10">
                    <p class="text-sm text-gray-400">Copyright &copy; {{now()->year}} Study Portal Ecosystem</p>
                </div>
            </div>
        </footer>
    </div>

</x-guest-layout>