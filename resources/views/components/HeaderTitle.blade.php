@props(['position' => 'tw-text-left'])

<header class="{{ $position }}">
    <h1 class="tw-text-4xl tw-font-semibold tw-text-[#2D3439]">
        {!! $slot !!}
    </h1>
</header>
