@extends('layouts.app')

@section('pageTitle', 'Pegawai')

@section('content')
    <section class="tw-mt-[112px]">
        <div class="container">
            <x-HeaderTitle>
                <div class="tw-mb-4">
                    Struktur Organisasi & Data Pegawai
                </div>
            </x-HeaderTitle>
            <p class="tw-text-base tw-tect-[#434E56]">Struktur Organisasi & Data Semua Pegawai KCD Pendidikan Wilayah V</p>
        </div>

        {{-- Struktur Organisasi --}}
        <div class="container tw-py-20 md:tw-py-24">
            <div class="tw-flex tw-justify-center tw-items-center tw-mb-10">
                <div
                    class="tw-shadow-lg tw-rounded-2xl tw-bg-white tw-h-full  tw-p-4 md:tw-p-6 tw-gap-y-4 tw-flex tw-flex-col tw-justify-center tw-items-center">
                    <div class="tw-w-24 tw-h-24 md:tw-w-40 md:tw-h-40">
                        <img src="{{ asset('assets/teteh.jpg') }}" alt=""
                            class="tw-rounded-full object-fit-cover tw-w-full tw-h-full">
                    </div>
                    <h1 class="text-center tw-font-bold">SUHENDI, S.Pd., M.Pd</h1>
                </div>
            </div>

            <div class="tw-flex tw-justify-evenly tw-items-center tw-flex-wrap tw-gap-8">
                <div
                    class="tw-shadow-lg tw-rounded-2xl tw-bg-white tw-h-full  tw-p-4 md:tw-p-6 tw-gap-y-4 tw-flex tw-flex-col tw-justify-center tw-items-center">
                    <div class="tw-w-24 tw-h-24 md:tw-w-40 md:tw-h-40 ">
                        <img src="{{ asset('assets/teteh.jpg') }}" alt=""
                            class="tw-rounded-full object-fit-cover tw-w-full tw-h-full">
                    </div>
                    <h1 class="text-center tw-font-bold">SUHENDI, S.Pd., M.Pd</h1>
                </div>
                <div
                    class="tw-shadow-lg tw-rounded-2xl tw-bg-white tw-h-full  tw-p-4 md:tw-p-6 tw-gap-y-4 tw-flex tw-flex-col tw-justify-center tw-items-center">
                    <div class="tw-w-24 tw-h-24 md:tw-w-40 md:tw-h-40">
                        <img src="{{ asset('assets/teteh.jpg') }}" alt=""
                            class="tw-rounded-full object-fit-cover tw-w-full tw-h-full">
                    </div>
                    <h1 class="text-center tw-font-bold">SUHENDI, S.Pd., M.Pd</h1>
                </div>
            </div>

            <div id="accordion">
                <div class="card border-0">
                    <div class="card-header border-0" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                Collapsible Group Item #1
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body border-0 tw-bg-[#F7F7F7]">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                            laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                            of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card border-0">
                    <div class="card-header border-0" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                Collapsible Group Item #2
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body tw-bg-[#F7F7F7]">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                            laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                            of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card border-0">
                    <div class="card-header border-0" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                Collapsible Group Item #3
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse " aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body tw-bg-[#F7F7F7]">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                            laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                            of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection
