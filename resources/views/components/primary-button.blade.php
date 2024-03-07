<button
    {{ $attributes->merge([
        'type' => 'submit',
        'class' => 'border-none px-4 py-2 items-center bg-gradient-to-r from-indigo-500 to-blue-600
        rounded-md text-white text-base'
    ])
}}>
    {{ $slot }}
</button>
