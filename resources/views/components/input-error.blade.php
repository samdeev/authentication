@props(['field' => null])

@error($field)
    <p {{ $attributes->merge(['class' => 'text-sm text-red-400 mt-0.5']) }}>
        {{ $message }}
    </p>
@enderror
