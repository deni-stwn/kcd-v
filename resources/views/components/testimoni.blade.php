@props(['title' => '', 'description' => ''])
<div class="bg-white tw-rounded-[18px] tw-w-full md:tw-max-w-[405px] tw-p-6">
    <div class="tw-flex tw-flex-col gap-2">
        <div class="tw-flex tw-justify-start tw-items-center tw-gap-3">
            <img src="{{ asset('assets/Testimoni.png') }}" alt="">
            <h3 class="tw-font-bold tw-text-lg tw-text-[#2D3439]">{{ $title }}</h3>
        </div>
        <h4 class="tw-font-medium tw-text-[#808080] tw-text-sm">{{ $description }}</h4>
    </div>
</div>
