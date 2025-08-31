<a href="{{ $attributes->get('href', '#') }}"
    {{ $attributes->except('href')->merge(['class' => 'font-primary bg-light text-primary hover:bg-primary border-primary hover:text-light border-2 text-xl transition-colors duration-300 hover:border-2']) }}>
    {{ $slot }}
</a>
