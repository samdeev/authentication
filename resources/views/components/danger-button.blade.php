<button
    {{ $attributes->merge([
    'type' => 'submit',
    'class' => 'border-none px-4 py-2 items-center bg-gradient-to-r from-red-500 to-rose-500 rounded-md text-white text-base'
    ]) }}
>
    {{ $slot }}
</button>
