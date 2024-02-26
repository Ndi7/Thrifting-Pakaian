@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-lime-400 '
            : 'hover:bg-lime-200 duration-150 ease-in-out';
@endphp

<a {{ $attributes->class(['block mt-2 py-2.5 px-4 rounded'])->merge(['class' => $classes]) }} >
    {{ $slot }}
</a>