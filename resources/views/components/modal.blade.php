@props([
    'isOpen' => false,
])

<div
    class="fixed inset-0 flex items-center justify-center bg-gray-900/30"
    x-show="isOpen"
    x-transition:enter="ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="ease-in duration-300"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
>

    {{-- Modal Content --}}
    <div
         class="bg-white p-4 rounded shadow-md w-1/3"
    >
        <div class="flex justify-between items-center mb-4">
            {{ $slot }}
        </div>
    </div>

</div>
