@props([
    'icon' => 'fa-regular fa-object-group',
    'title' => 'Web Designing',
    'description' =>
        'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero nisi ducimus vitae natus illum praesentium quasi repudiandae, atque eum earum doloribus molestias perferendis quis, esse temporibus minus reiciendis adipisci nemo.',
])

<div
    class="border-primary/10 md:border-primary/20 hover:bg-primary/5 flex w-full min-w-[270px] max-w-xs flex-col space-y-4 rounded-2xl border bg-white p-4 shadow-lg transition-all duration-300 hover:-translate-y-2 hover:border-green-800 hover:shadow-[0_0_32px_4px_rgba(16,80,16,0.5)] sm:max-w-sm md:max-w-md md:flex-wrap md:p-6 md:shadow-xl lg:max-w-[30%]">
    {{-- Icon and Title --}}
    <div class="flex items-center gap-2">
        <i class="{{ $icon }} text-primary text-xl sm:text-2xl"></i>
        <h4 class="text-primary text-base font-bold sm:text-lg md:text-2xl">{{ $title }}</h4>
    </div>
    {{-- Contents --}}
    <div>
        <p class="text-primary text-justify text-base font-medium sm:text-lg md:text-lg">
            {{ $description }}
        </p>
    </div>
</div>
