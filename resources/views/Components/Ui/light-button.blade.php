<a href="{{ $attributes->get('href', '#') }}"
    {{ $attributes->except('href')->merge(['class' => 'font-primary transition-colors duration-300 border-2 border-darkButtonPrimary bg-lightButtonPrimary text-darkButtonPrimary hover:border-lightButtonPrimary hover:bg-darkButtonPrimary hover:text-lightButtonPrimary']) }}>
    {{ $slot }}
</a>
