@props(['url', 'outline' => false])

@php
    $buttonClass = $outline ? 'tw-bg-white tw-border-2 tw-border-[#DAF1EA] tw-text-[#45BA97]' : 'tw-bg-[#45BA97] tw-text-white';
@endphp

<a href="{{ $url }}" class="{{ $buttonClass }} tw-font-semibold"
    style="border-radius: 18px; text-decoration: none; padding: 10px 20px;">
    {!! $slot !!}
</a>
