@vite('resources/js/navbar.js')

<nav
    class="bg-primary font-primary flex flex-wrap items-center justify-between px-4 py-5 sm:px-8 md:px-16 lg:px-[180px]">
    <div>
        <a href="#">
            <img class="h-10 w-12 sm:h-[43.48px] sm:w-[50px]" src="{{ asset('assets/RD Logo Light.png') }}" alt="RD">
        </a href="">
    </div>
    <!-- Hamburger Button -->
    <button id="navbar-hamburger" class="flex items-center rounded px-3 py-2 text-white focus:outline-none sm:hidden"
        aria-label="Toggle navigation">
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
            </path>
        </svg>
    </button>
    <!-- Fullscreen Navbar Overlay -->
    <div id="navbar-links"
        class="bg-primary fixed inset-0 z-50 flex hidden h-screen w-screen flex-col items-center justify-center sm:static sm:inset-auto sm:z-auto sm:flex sm:h-auto sm:w-auto sm:flex-row sm:gap-16 sm:p-0 md:gap-24">
        <ul
            class="flex flex-col items-center justify-center gap-10 text-2xl font-bold sm:flex-row sm:gap-16 sm:text-base sm:font-medium md:gap-24">
            <li>
                <div class="group flex flex-col items-center">
                    <a href="#hero" class="nav-link scroll-smooth px-2 pb-1 text-white">Home</a>
                    <div
                        class="nav-underline h-0.5 w-0 bg-white transition-all duration-300 group-hover:w-6 group-hover:bg-white">
                    </div>
                </div>
            </li>
            <li>
                <div class="group flex flex-col items-center">
                    <a href="#about" class="nav-link scroll-smooth px-2 pb-1 text-white">About</a>
                    <div
                        class="nav-underline h-0.5 w-0 bg-white transition-all duration-300 group-hover:w-6 group-hover:bg-white">
                    </div>
                </div>
            </li>
            <li>
                <div class="group flex flex-col items-center">
                    <a href="#projects" class="nav-link scroll-smooth px-2 pb-1 text-white">Projects</a>
                    <div
                        class="nav-underline h-0.5 w-0 bg-white transition-all duration-300 group-hover:w-6 group-hover:bg-white">
                    </div>
                </div>
            </li>
            <li>
                <div class="group flex flex-col items-center">
                    <a href="#contact" class="nav-link scroll-smooth px-2 pb-1 text-white">Contacts</a>
                    <div
                        class="nav-underline h-0.5 w-0 bg-white transition-all duration-300 group-hover:w-6 group-hover:bg-white">
                    </div>
                </div>
            </li>
        </ul>
        <!-- Close button for overlay -->
        <button id="navbar-close" class="absolute right-6 top-6 text-4xl text-white sm:hidden"
            aria-label="Close menu">&times;</button>
        <!-- whitebulb for mobile overlay -->
        <div class="absolute left-6 top-6 z-50 block sm:hidden" id="navbar-whitebulb">
            <i class="fa-solid fa-lightbulb text-3xl text-white"></i>
        </div>
    </div>
    <div class="hidden sm:block">
        <i class="fa-solid fa-lightbulb text-3xl text-white"></i>
    </div>
</nav>
