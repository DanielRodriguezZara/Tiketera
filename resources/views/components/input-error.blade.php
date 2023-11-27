@props(['for'])

@error($for)
    <p {{ $attributes->merge(['class' => 'px-2 border-l-4 border-red-600 text-red-600 font-bold']) }}>{{ $message }}</p>
@enderror
