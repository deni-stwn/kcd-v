@extends('layouts.app')

@section('pageTitle', 'Berita')

@section('content')
    <section class="tw-mt-[112px]">
        <div class="container">
            <x-HeaderTitle>
                <div class="tw-mb-4">
                    Berita
                </div>
            </x-HeaderTitle>
            <p class="tw-text-base tw-tect-[#434E56]">Semua informasi seputar kegiatan KCD Pendidikan Wilayah V</p>

            <div id="carouselExampleControls" class="carousel slide tw-my-8" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($blogs->take(3) as $index => $blog)
                        <div
                            class="tw-h-[420px] md:tw-h-[620px] tw-w-full tw-overflow-hidden tw-relative carousel-item {{ $loop->first ? 'active' : '' }}">
                            <div
                                class="tw-text-white tw-z-10 tw-flex tw-justify-center tw-items-center tw-rounded-3xl tw-w-full tw-h-full tw-absolute">
                                <div class="tw-text-center">
                                    <a href="{{ route('blog.show', $blog->slug) }}" class="hover:tw-text-white">
                                        <h1 class="tw-text-3xl md:tw-text-5xl tracking-wider tw-font-bold">
                                            {{ $blog->title }}
                                        </h1>
                                        <h4
                                            class="tw-font-normal tw-text-white tw-mt-6 md:tw-px-60 tw-px-20 tw-text-sm tw-line-clamp-2">
                                            {!! $blog->content !!}</h4>
                                    </a>
                                </div>
                            </div>
                            <div
                                class="tw-bg-[#525252] tw-text-white inset-0 tw-block tw-rounded-3xl tw-w-full tw-h-full tw-absolute tw-opacity-50">
                            </div>
                            <img class="d-block inset-0 tw-w-full tw-h-full tw-rounded-3xl tw-object-cover"
                                src="{{ $blog->documents->first()['url'] ?? '' }}" alt="Slide {{ $index + 1 }}">
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev tw-z-40" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next tw-z-40" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


            <div class="tw-flex tw-flex-wrap tw-justify-center tw-gap-8 tw-mb-12">
                @foreach ($blogs as $blog)
                    <x-beritacard url="{{ route('blog.show', $blog->slug) }}"
                        date="{{ $blog->created_at ? $blog->created_at->format('d F Y') : '' }}" title="{{ $blog->title }}"
                        content="{!! $blog->content !!}" image="{{ $blog->documents->first()['url'] ?? '' }}" />
                @endforeach
            </div>
        </div>
        <div class="d-flex justify-content-center">
            {{ $blogs->links('pagination::bootstrap-4') }}
        </div>
        {{-- Struktur Organisasi --}}

    </section>
@endsection

@push('styles')
    <style>
        .active>.page-link,
        .page-link.active {
            z-index: 3;
            color: #fff !important;
            background-color: #45BA97 !important;
            border-color: #45BA97 !important;
        }

        .page-link {
            color: #45BA97 !important;
        }
    </style>
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
@endpush

@push('scripts')
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
@endpush
