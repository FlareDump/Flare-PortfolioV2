<div class="flex min-h-screen flex-col items-center justify-center gap-10 text-center lg:flex-row">
    <div class="flex w-full flex-col items-center gap-10 text-center lg:items-start lg:text-left">
        <div class="hide-left flex w-full flex-col items-center gap-10 text-center lg:items-start lg:text-left">
            <h2 class="font-primary text-textPrimary text-5xl font-bold">I'm a Full-Stack Web Developer</h2>
            @php
                if (!isset($max)) {
                    $files = glob(public_path('assets/icons/tech/*.png'));
                    $max = $files ? count($files) : 0;
                }
            @endphp
            @php
                $iconNames = [
                    1 => 'Laravel',
                    2 => 'React.js',
                    3 => 'Tailwindcss',
                    4 => 'Javascript',
                    5 => 'C#',
                    6 => 'MySql',
                    7 => 'SqlServer',
                    8 => 'Figma',
                ];
            @endphp
            <ul id="tech-icon-list" class="flex w-full flex-wrap justify-center gap-6 lg:justify-start">
                @for ($i = 1; $i <= $max; $i++)
                    {{-- Tech icons list --}}
                    <li class="group relative" data-tech-index="{{ $i - 1 }}">
                        <img src="{{ asset('assets/icons/tech/' . $i . '.png') }}" alt="Tech {{ $i }}"
                            class="h-20 w-20 cursor-pointer object-contain drop-shadow-lg transition-all duration-300 group-hover:scale-110" />
                        @if (isset($iconNames[$i]))
                            <div
                                class="bg-primary/90 text-light border-primary pointer-events-none absolute bottom-full left-1/2 z-20 mb-3 -translate-x-1/2 scale-95 whitespace-nowrap rounded-lg border px-4 py-2 text-sm font-medium opacity-0 shadow-xl transition-all duration-300 group-hover:scale-100 group-hover:opacity-100">
                                {{ $iconNames[$i] }}
                            </div>
                        @endif
                    </li>
                @endfor
            </ul>
        </div>
        <div class="flex w-full justify-center gap-10">
            <x-ui.dark-button href="#"
                class="hide-bottom lg:px-15 md:px-15 px-4 py-2 text-center text-base md:py-4 lg:py-4">VIEW
                CV</x-ui.dark-button>
            <x-ui.light-button href="#contact"
                class="hide-bottom lg:px-15 md:px-15 px-4 py-2 text-center text-base md:py-4 lg:py-4">LET'S
                WORK
                TOGETHER</x-ui.light-button>
        </div>
    </div>
    {{-- Images --}}
    @php
        $techImages = glob(public_path('assets/icons/tech/*.png'));
        $techImages = array_map(function ($path) {
            return 'assets/icons/tech/' . basename($path);
        }, $techImages);
    @endphp
    <div class="hide-right flex w-full items-center justify-center">
        <img id="about-tech-carousel" src="{{ asset($techImages[0] ?? 'assets/profile.jpg') }}" alt="Tech Carousel"
            class="min-w-100 w-100 h-100 drop-shadow-primary/30 hidden object-contain drop-shadow-xl md:hidden lg:block">
    </div>
    <script>
        window.aboutTechImages = @json($techImages);
        document.addEventListener('DOMContentLoaded', function() {
            const images = window.aboutTechImages || [];
            let current = 0;
            const img = document.getElementById('about-tech-carousel');
            const iconList = document.getElementById('tech-icon-list');
            if (!img || images.length === 0 || !iconList) return;
            const lis = iconList.querySelectorAll('li[data-tech-index]');

            function highlightCurrent() {
                lis.forEach((li, idx) => {
                    const iconImg = li.querySelector('img');
                    if (idx === current) {
                        iconImg.classList.add('scale-130', 'drop-shadow-2xl', 'drop-shadow-primary/30');
                    } else {
                        iconImg.classList.remove('scale-130', 'drop-shadow-2xl', 'drop-shadow-primary/30');
                    }
                });
            }
            highlightCurrent();
            setInterval(function() {
                current = (current + 1) % images.length;
                img.src = '/' + images[current];
                highlightCurrent();
            }, 2500);
        });
    </script>
</div>

<div class="flex flex-col items-center gap-10 md:items-start md:gap-0 lg:items-start lg:gap-0">
    <h2 class="hide-left font-primary text-textPrimary mb-5 text-5xl font-bold">Skills</h2>
    <div class="hide-left flex w-full flex-col items-center justify-around gap-8 md:flex-row md:gap-8">
        {{-- prettier-ignore --}}
        <x-ui.skill-card 
        icon="fa-regular fa-object-group"
        title="Web Designing"
        description="I focus on creating responsive and user-friendly layouts that combine both aesthetics and usability. I apply UI/UX principles such as accessibility, color theory, and typography to ensure that every design looks good and feels intuitive. I also use tools like Figma and Canva to plan and refine my designs before development."
        />
        {{-- prettier-ignore --}}
        <x-ui.skill-card   
        icon="fa-regular fa-object-ungroup"
        title="Front-End Development"
        description=" I work with HTML, CSS, and JavaScript to bring designs to life and make them interactive. I have experience using frameworks and libraries such as React and TailwindCSS to build modern, responsive interfaces that work across different devices and browsers. I also pay attention to performance and optimization to provide a smooth user experience."
        />
        {{-- prettier-ignore --}}
        <x-ui.skill-card 
        icon="fa-solid fa-server"
        title="Back-End Development"
        description="I handle the server-side logic of applications. I work with Laravel and Node.js to build functional systems, manage databases like MySQL, and create RESTful APIs for smooth communication between the front end and the server. I also make sure that data handling, authentication, and security are properly implemented."
        />
    </div>


</div>
