@props([
    'image' => '',
    'title' => 'Title',
    'subtitle' => 'Subtitiles',
    'url' => '#',
])

<div
    class="hover:bg-primary/5 project-card-group min-w-sm relative mx-auto max-h-80 w-full max-w-xs overflow-hidden rounded-xl bg-white shadow-xl transition-all duration-300 hover:scale-105 hover:border-green-800 hover:shadow-[0_0_32px_4px_rgba(16,80,16,0.5)] sm:max-w-sm md:max-w-md lg:max-w-[30%]">
    <a href="{{ $url }}" target="_blank"
        class="text-primary project-card-link transition-colors duration-300 hover:text-green-800">
        <div class="sm:h-50 flex h-40 items-center justify-center bg-yellow-400">
            <img src="{{ asset($image) }}" alt="{{ $title }} Logo" class="h-full w-full object-cover">
        </div>
        <div class="flex flex-col gap-2 p-4">
            <h3 class="text-primary text-lg font-bold sm:text-xl">{{ $title }}</h3>
            <p class="text-dark text-xs sm:text-sm">{{ $subtitle }}</p>
            <div class="mt-2 flex justify-end">
                <i class="fa-solid fa-arrow-up-right-from-square text-xl"></i>
            </div>
        </div>
    </a>
</div>
