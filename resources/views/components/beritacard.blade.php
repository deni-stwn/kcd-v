@props(['url' => '', 'date' => '', 'title' => '', 'image' => '', 'slug' => '', 'content' => '', 'id'])

<a href="{{ $url }}" class="bg-white tw-rounded-[18px] tw-w-full md:tw-max-w-[403px] tw-h-full tw-pb-4">
    <div class="tw-flex tw-flex-col gap-2">
        <img src="{{ $image }}" alt="" class="tw-w-full tw-h-[256px] tw-rounded-t-[18px] tw-object-cover">
        <div class="tw-p-4 tw-flex tw-flex-col gap-2">
            <p id="date" class="tw-text-[#808080] tw-text-sm">{{ $date }}</p>
            <h3 class="tw-font-bold tw-text-lg tw-text-[#2D3439]">{{ $title }}</h3>
            <h4 class="tw-font-medium tw-text-[#808080] tw-text-sm tw-line-clamp-2">{!! $content !!}</h4>
        </div>
    </div>
</a>
