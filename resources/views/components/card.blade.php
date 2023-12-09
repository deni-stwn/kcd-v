@props([
    'image' => '',
    'title' => '',
    'description' => '',
    'url' => '',
])

<div
    class="bg-white tw-rounded-[18px] tw-w-full md:tw-max-w-[296px] tw-py-4 tw-mb-8 tw-flex tw-flex-col tw-justify-between">
    <div class="tw-flex tw-flex-col tw-items-center tw-justify-center tw-gap-2 tw-flex-grow">
        <div class="tw-h-24 tw-flex tw-items-center tw-justify-center">
            <img class="tw-object-contain tw-w-full" src="{{ $image }}" alt="">
        </div>
        <h3 class="tw-font-bold tw-text-lg tw-text-[#2D3439]">{{ $title }}</h3>
        <h4 class="tw-font-medium tw-text-[#808080] tw-text-sm">{{ $description }}</h4>
    </div>
    <div class="tw-flex tw-justify-center tw-mt-4">
        <x-button url="{{ $url }}" outline>
            Lihat Detail
        </x-button>
    </div>
</div>
