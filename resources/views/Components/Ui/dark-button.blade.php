<a href="{{ $attributes->get('href', '#') }}"
    {{ $attributes->except('href')->merge([
        'class' =>
            'font-primary border-2 border-lightButtonPrimary bg-darkButtonPrimary text-lightButtonPrimary transition-colors duration-300 hover:border-darkButtonPrimary hover:bg-lightButtonPrimary hover:text-darkButtonPrimary',
    ]) }}>
    {{ $slot }}
</a>
