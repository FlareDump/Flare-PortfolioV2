@vite('resources/js/navbar.js')

<nav
    class="bg-primary font-primary flex flex-wrap items-center justify-between px-4 py-5 sm:px-8 md:px-16 lg:px-[180px]">
    <div>
        <img class="h-10 w-12 sm:h-[43.48px] sm:w-[50px]" src="{{ asset('assets/RD Logo Light.png') }}" alt="RD">
    </div>
    <!-- Hamburger Button -->
    <button id="navbar-hamburger"
        class="text-light border-light flex items-center rounded border px-3 py-2 focus:outline-none sm:hidden"
        aria-label="Toggle navigation">
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
            </path>
        </svg>
    </button>
    <!-- Fullscreen Navbar Overlay -->
    <div id="navbar-links"
        class="bg-primary fixed inset-0 z-50 hidden flex-col items-center justify-center gap-10 bg-opacity-95 sm:static sm:inset-auto sm:z-auto sm:flex sm:flex-row sm:gap-16 sm:bg-transparent sm:p-0 md:gap-24">
        <ul
            class="flex flex-col items-center justify-center gap-10 text-2xl font-bold sm:flex-row sm:gap-16 sm:text-base sm:font-medium md:gap-24">
            <li>
                <div class="group flex flex-col items-center">
                    <a href="#hero" class="nav-link scroll-smooth px-2 pb-1">Home</a>
                    <div
                        class="nav-underline bg-light group-hover:bg-light h-0.5 w-0 transition-all duration-300 group-hover:w-6">
                    </div>
                </div>
            </li>
            <li>
                <div class="group flex flex-col items-center">
                    <a href="#about" class="nav-link scroll-smooth px-2 pb-1">About</a>
                    <div
                        class="nav-underline bg-light group-hover:bg-light h-0.5 w-0 transition-all duration-300 group-hover:w-6">
                    </div>
                </div>
            </li>
            <li>
                <div class="group flex flex-col items-center">
                    <a href="#projects" class="nav-link scroll-smooth px-2 pb-1">Projects</a>
                    <div
                        class="nav-underline bg-light group-hover:bg-light h-0.5 w-0 transition-all duration-300 group-hover:w-6">
                    </div>
                </div>
            </li>
            <li>
                <div class="group flex flex-col items-center">
                    <a href="#contact" class="nav-link scroll-smooth px-2 pb-1">Contacts</a>
                    <div
                        class="nav-underline bg-light group-hover:bg-light h-0.5 w-0 transition-all duration-300 group-hover:w-6">
                    </div>
                </div>
            </li>
        </ul>
        <!-- Close button for overlay -->
        <button id="navbar-close" class="text-light absolute right-6 top-6 text-4xl sm:hidden"
            aria-label="Close menu">&times;</button>
        <!-- Lightbulb for mobile overlay -->
        <div class="absolute left-6 top-6 z-50 block sm:hidden" id="navbar-lightbulb">
            <i class="fa-solid fa-lightbulb text-light text-3xl"></i>
        </div>
    </div>
    <div class="hidden sm:block">
        <i class="fa-solid fa-lightbulb text-3xl"></i>
    </div>
</nav>
