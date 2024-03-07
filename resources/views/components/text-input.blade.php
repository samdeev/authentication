@props(['disabled' => false])

<input
    {{ $disabled ? '$disabled' : '' }}
    {{ $attributes->merge(['class' => 'block w-full rounded-md border-none py-2 px-4 text-gray-900 shadow-sm ring-1 ring-inset
    ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-500 focus:outline-none
    sm:text-sm sm:leading-6 mt-1']) }}
/>
