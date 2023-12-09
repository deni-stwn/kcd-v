@extends('layouts.app')

@section('pageTitle', 'Link Terkait')

@push('styles')
    <style>
        .btn-outline-success {
            --bs-btn-border-color: transparent !important;
            --bs-btn-active-bg: #45BA97 !important;
            border: none !important;
            --bs-btn-hover-bg: #45BA97 !important;
        }
    </style>
@endpush

{{-- @include('linkTerkait.data') --}}

@section('content')
    <section class="tw-mt-[112px]">
        <div class="container">
            <x-HeaderTitle>
                <div class="tw-mb-4">
                    Layanan Penting
                </div>
            </x-HeaderTitle>
            <p class="tw-text-base tw-tect-[#434E56]">Semua layanan penting dari KCD Pendidikan Wilayah V </p>
            <ul class="nav nav-pills mb-3 tw-mt-14" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="btn btn-outline-success m-2 active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true">Lihat semua</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="btn btn-outline-success m-2" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">Kepegawaian</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="btn btn-outline-success m-2" id="pills-contact-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                        aria-selected="false">Keuangan</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="btn btn-outline-success m-2" id="pills-bidang-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-bidang" type="button" role="tab" aria-controls="pills-bidang"
                        aria-selected="false">Bidang PSMA, SLB &
                        PSMK</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row">
                        @foreach ($links as $link)
                            <div class="col-12 col-sm-6 col-lg-3">
                                <x-card image="{{ $link['image'] }}" title="{{ $link['title'] }}"
                                    description="{{ $link['description'] }}" url="{{ $link['url'] }}" />
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row">
                        @foreach ($filterBykepegawaian as $kepegawaian)
                            <div class="col-12 col-sm-6 col-lg-3">
                                <x-card image="{{ $kepegawaian['image'] }}" title="{{ $kepegawaian['title'] }}"
                                    description="{{ $kepegawaian['description'] }}" url="{{ $kepegawaian['url'] }}" />
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="row">
                        @foreach ($filterBykeuangan as $keuangan)
                            <div class="col-12 col-sm-6 col-lg-3">
                                <x-card image="{{ $keuangan['image'] }}" title="{{ $keuangan['title'] }}"
                                    description="{{ $keuangan['description'] }}" url="{{ $keuangan['url'] }}" />
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-bidang" role="tabpanel" aria-labelledby="pills-bidang-tab">
                    <div class="row">
                        @foreach ($filterBysekolah as $bidang)
                            <div class="col-12 col-sm-6 col-lg-3">
                                <x-card image="{{ $bidang['image'] }}" title="{{ $bidang['title'] }}"
                                    description="{{ $bidang['description'] }}" url="{{ $bidang['url'] }}" />
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
