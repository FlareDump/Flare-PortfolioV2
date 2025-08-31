<a href="{{ $attributes->get('href', '#') }}"
    {{ $attributes->except('href')->merge(['class' => 'font-primary bg-primary text-light hover:bg-light border-primary hover:text-primary border-2 text-xl transition-colors duration-300 hover:border-2']) }}>
    {{ $slot }}
</a>
