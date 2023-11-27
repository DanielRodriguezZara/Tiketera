@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-matisse-700 focus:border-matisse-700 focus:ring-matisse-700 rounded-md shadow-sm']) !!}>
