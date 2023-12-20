@php
    $classes = "
        text-xs text-gray-400 dark:text-gray-200
        hover:text-gray-900 dark:hover:text-gray-500 rounded-md
        focus:outline-none focus:ring-2 focus:ring-offset-2
        focus:ring-indigo-500 dark:focus:ring-offset-gray-800
        font-bold
    ";
@endphp

<a
   {{ $attributes->merge(['class' => $classes]) }}
    href="{{ $href }}"
>
    {{ $slot }}
</a>
