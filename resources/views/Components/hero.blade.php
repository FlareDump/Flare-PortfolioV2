@php
    $profileImages = [
        'assets/profiles/me_1.png',
        'assets/profiles/me_2.png',
        'assets/profiles/me_3.png',
        'assets/profiles/me_4.png',
        'assets/profiles/me_5.png',
        'assets/profiles/me_6.png',
    ];
@endphp
<script>
    window.profileImages = @json($profileImages);
</script>
@vite('resources/js/carousel.js')

<main class="grid h-[90vh] place-items-center">
    <div class="flex w-full flex-col gap-10 md:gap-20 lg:gap-20">
        <div
            class="flex w-full flex-col-reverse justify-between gap-2 sm:py-2 md:flex-col-reverse md:gap-16 lg:flex-row lg:gap-16">
            <div class="hide-left flex flex-1 flex-col justify-center space-y-5">
                <p class="font-primary text-secondary/50 md:ml-30 text-lg font-semibold lg:ml-0"><i>Hi, I'm</i></p>
                <h1
                    class="font-primary text-primary md:ml-30 text-left text-6xl font-black md:text-7xl lg:ml-0 lg:text-8xl">
                    RAYVER </h1>
                <h1
                    class="font-primary text-primary md:mr-30 text-right text-6xl font-black md:text-7xl lg:mr-0 lg:text-8xl">
                    DASALLA
                </h1>
                <p class="font-primary text-secondary/50 md:mr-30 text-end text-lg font-semibold lg:mr-0"><i>(Flare)</i>
                </p>
            </div>
            {{-- My Images --}}
            @php
                $profileImages = [
                    'assets/profiles/me_1.png',
                    'assets/profiles/me_2.png',
                    'assets/profiles/me_3.png',
                    'assets/profiles/me_4.png',
                    'assets/profiles/me_5.png',
                    'assets/profiles/me_6.png',
                ];
            @endphp
            <div class="hide-right relative flex items-center justify-center">
                <img id="carousel-image" src="{{ asset($profileImages[0]) }}" alt="Profile"
                    class="lg:w-100 lg:h-100 md:w-100 md:h-100 h-70 w-70 min-w-70 lg:min-w-100 md:min-w-100 mx-auto rounded-xl object-cover transition-all duration-300">
            </div>
        </div>

        {{-- CTA Button --}}
        <div class="hide-bottom flex justify-center">
            <x-ui.dark-button href="#contact" class="px-15 py-5">LET'S TALK</x-ui.dark-button>
        </div>

    </div>
</main>

@vite('resources/js/app.js')
