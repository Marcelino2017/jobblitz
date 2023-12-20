@props(['value'])
@php
    $class = "
        block font-medium text-sm text-gray-700 dark:text-gray-300
        uppercase font-bold mb-2
    ";
@endphp

<label {{ $attributes->merge(['class' => $class ]) }}>
    {{ $value ?? $slot }}
</label>
