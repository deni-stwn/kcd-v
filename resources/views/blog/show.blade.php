@extends('layouts.app')

@section('pageTitle', 'Detail')

@section('content')
    <section class="tw-mt-[112px]">
        <div class="container">
            <img src="{{ $blog->documents->first()['url'] ?? '' }}" alt=""
                class="tw-w-full tw-h-[420px] md:tw-h-[620px] tw-object-cover tw-rounded-3xl"><br>
            <x-HeaderTitle>
                <div class="tw-mb-4">
                    {{ $blog->title }}
                </div>
            </x-HeaderTitle>
            <p class="tw-text-[#808080] tw-text-sm">{{ $blog->created_at ? $blog->created_at->format('d F Y') : '' }}
            </p><br>
            <hr class="tw-mb-6">
            <p class="tw-text-[#808080] tw-text-sm">{!! $blog->content !!}</p>
        </div>
    </section>
@endsection
