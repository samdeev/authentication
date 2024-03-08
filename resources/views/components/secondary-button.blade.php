<button
    {{ $attributes->merge([
        'type' => 'button',
        'class' => 'border border-gray-300 px-4 py-2 items-center bg-white text-base rounded-md hover:bg-gray-200
        transition duration-150 ease-in-out'
    ])
}}>
    {{ $slot }}
</button>
