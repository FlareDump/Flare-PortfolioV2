<!doctype html>
<html class="bg-light scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/cce20cf791.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('assets/RD Logo Light.png') }}">
    <title> {{ config('app.name') }} </title>
</head>

<body class="max-w-100vw flex flex-col overflow-x-hidden">
    <header class="text-light hide-top-long sticky top-0 z-50">
        @include('components.header')
    </header>
    <div class="flex flex-col">

        <section id="hero" class="mb-20 min-h-screen scroll-mt-10 px-5 py-2 md:px-6 lg:px-[180px]">
            @include('components.hero')
        </section>

        <section id="about" class="space-y-30 min-h-screen scroll-mt-10 px-5 md:px-[80px] lg:px-[180px]">
            @include('components.about')
        </section>


        <section id="projects" class="my-20 min-h-screen scroll-mt-10 px-5 md:px-[80px] lg:px-[160px]">
            @include('components.projects')
        </section>

        <section class="my-10 min-h-screen px-5 md:px-[80px] lg:px-[180px]">
            @include('components.philosophy')
        </section>

        <section id="contact" class="min-h-screen -scroll-mt-10 px-5 md:px-[80px] lg:px-[180px]">
            @include('components.contact')
        </section>

    </div>
    <footer class="bg-primary text-lg text-white">
        @include('components.footer')
    </footer>

</body>

</html>

@vite('resources/js/app.js')
