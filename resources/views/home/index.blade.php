@extends('layouts.app')

@section('pageTitle', 'Home')

@push('styles')
    <style>
        .carousel-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #222222;
            opacity: 0.3;
        }
    </style>
@endpush

@section('content')
    <section>
        <div class="bg-auto hero-graphics tw-mt-20 tw-relative">
            {{-- style="background-image: url('./Banner.png'); background-size: cover; background-position: center center;"> --}}

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 tw-h-[700px] tw-object-cover tw-object-bottom"
                            src="{{ asset('assets/scott-graham-OQMZwNd3ThU-unsplash.jpg') }} " alt="First slide">
                        <div class="carousel-overlay"></div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 tw-h-[700px] tw-object-cover tw-object-top"
                            src="{{ asset('Banner.png') }}" alt="Second slide">
                        <div class="carousel-overlay"></div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="container tw-absolute tw-top-1/2 tw-left-1/2 tw-transform tw--translate-x-1/2 tw--translate-y-1/2">
                <!-- Hero Section -->
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-12">
                        <div class="py-8 py-lg-0 text-center">
                            <h1 class="display-2 fw-bold mb-3 text-primary"><span class="text-light px-3 px-md-0">KCD
                                    WILAYAH
                                    V
                            </h1>
                            <p class="text-light" style=" font-weight: 400; margin-bottom: 30px">
                                Selamat datang di KCD Wilayah! Lihat berita, link penting, kontak kami, dan data tentang
                                KCD.
                                Jelajahi dan sambut kehangatan kami. Hubungi melalui bagian Kontak untuk informasi lebih
                                lanjut
                                tentang KCD.
                            </p>
                            <x-button url="/link-terkait">
                                Layanan Kami
                            </x-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Hero Section -->

        {{-- Layanan --}}
        <div class="container">
            <x-HeaderTitle position='text-center'>
                <div class="tw-mt-[112px] tw-mb-[56px]">
                    Layanan Terfavorit
                </div>
            </x-HeaderTitle>
            <div class="tw-mb-12">
                <div class="row">
                    @foreach ($links as $link)
                        <div class="col-12 col-sm-6 col-lg-3">
                            <x-card image="{{ $link['image'] }}" title="{{ $link['title'] }}"
                                description="{{ $link['description'] }}" url="{{ $link['url'] }}" />
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <x-button url="/link-terkait">
                    Layanan Selengkapnya <i class="fa-solid fa-share"></i>
                </x-button>
            </div>
        </div>
        {{-- end Layanan --}}

        {{-- visi misi --}}
        <div class="container">
            <x-HeaderTitle position='text-center'>
                <div class="tw-mt-[112px] tw-mb-[56px]">
                    Visi Misi
                </div>
            </x-HeaderTitle>
            <div class="tw-bg-[#F6FEFE] tw-text-center tw-p-7 tw-rounded-[18px] tw-mb-6">
                <h2 class="tw-text-[#389479] tw-font-bold tw-text-3xl">Visi</h2>
                <p class="tw-text-[#45BA97] tw-pt-3">“Terwujudnya Jawa Barat Juara Lahir Batin dengan Inovasi dan
                    Kolaborasi” <br>
                    (Nilai Religius, Nilai Bahagia, Nilai Adil, Nilai Kolaboratif dan Nilai Inovatif)“</p>
            </div>
            <div class="tw-bg-[#F6FEFE] tw-py-7 tw-rounded-[18px]">
                <h2 class="tw-text-[#389479] tw-text-center tw-font-bold tw-text-3xl">Misi</h2>
                <ol class="tw-text-[#45BA97] tw-list-decimal tw-mx-7 md:tw-mx-20 tw-pt-3">
                    <li>
                        Membentuk manusia pancasila yang bertaqwa, melalui peningkatan peran masjid dan tempat ibadah
                        sebagai pusat peradaban,dengan sasaran misi yaitu pesantren juara, masjid juara, dan ulama juara.
                    </li><br>
                    <li>
                        Melahirkan manusia yang berbudaya, berkualitas, bahagia dan produktif melalui peningkatan pelayanan
                        publik yang inovatif, dengan sasaran misi yaitu kesehatan juara, perempuan juara, olahraga juara,
                        budaya juara, sekolah juara, guru juara, ibu juara, millenial juara, perguruan tinggi juara, dan smk
                        juara.
                    </li><br>
                    <li>
                        Mempercepat pertumbuhan dan pemerataan pembangunan berbasis lingkungan dan tata ruang yang
                        bekelanjutan melalui peningkatan konektivitas wilayah dan penataan daerah, dengan sasaran misi yaitu
                        transportasi juara, logistik juara, gerbang desa juara, kota juar, pantura juara, pansela juara, dan
                        energi juara
                    </li><br>
                    <li>
                        Meningkatkan produktivitas dan daya saing ekonomi umat yang sejahtera dan adil melalui pemanfaatan
                        teknologi digital dan kolaborasi dengan pusat-pusat inovasi serta pelaku pembangunan, dengan sasaran
                        misi yaitu nelayan juara, pariwisata juara, lingkungan juara, kelola sampah juara, tanggap bencana
                        juara, ekonomi kreatif juara, buruh juara, industri juara, pasar juara, petani juara, umat juara,
                        umkm juara, dan wirausaha juara; serta.
                    </li><br>
                    <li>
                        Mewujudkan tata kelola pemerintahan yang inovatif dan kepemimpinan yang kolaboratif antara
                        pemerintahan pusat, provinsi, dan kabupaten/kota, dengan sasaran misi yaitu birokrasi juara, apbd
                        juara, asn juara, dan bumd juara
                    </li>
                </ol>
            </div>

        </div>
        {{-- end visi misi --}}


        {{-- Berita terkini --}}
        <div class="container">
            <x-HeaderTitle position='text-center'>
                <div class="tw-mt-[112px] tw-mb-[56px]">
                    Berita Terkini
                </div>
            </x-HeaderTitle>
            <div class="tw-flex tw-flex-wrap tw-justify-center tw-gap-8 tw-mb-12">
                @foreach ($blogs as $blog)
                    <x-beritacard url="{{ route('blog.show', $blog->slug) }}"
                        date="{{ $blog->created_at ? $blog->created_at->format('d F Y') : '' }}" title="{{ $blog->title }}"
                        content="{!! $blog->content !!}" image="{{ $blog->documents->first()['url'] ?? '' }}" />
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                <x-button url="/berita">
                    Baca Selengkapnya <i class="fa-solid fa-share"></i>
                </x-button>
            </div>
        </div>
        {{-- end Berita Terkini --}}


        {{-- Tanggapan --}}
        <div class="container">
            <x-HeaderTitle position='text-center'>
                <div class="tw-mt-[112px] tw-mb-[56px]">
                    Bagaimana <br>
                    Tanggapan Warga
                </div>
            </x-HeaderTitle>
            <div class="tw-flex tw-flex-wrap tw-justify-center tw-gap-8 tw-mb-12">
                <x-testimoni title="Siti Haryati"
                    description="KCD merupakan platform yang sangat bermanfaat dan mudah digunakan oleh warga. Informasi terkini, layanan publik, dan interaksi komunitas semuanya tersedia dalam satu tempat." />
                <x-testimoni title="Siti Haryati"
                    description="KCD merupakan platform yang sangat bermanfaat dan mudah digunakan oleh warga. Informasi terkini, layanan publik, dan interaksi komunitas semuanya tersedia dalam satu tempat." />
                <x-testimoni title="Siti Haryati"
                    description="KCD merupakan platform yang sangat bermanfaat dan mudah digunakan oleh warga. Informasi terkini, layanan publik, dan interaksi komunitas semuanya tersedia dalam satu tempat." />
                <x-testimoni title="Siti Haryati"
                    description="KCD merupakan platform yang sangat bermanfaat dan mudah digunakan oleh warga. Informasi terkini, layanan publik, dan interaksi komunitas semuanya tersedia dalam satu tempat." />
                <x-testimoni title="Siti Haryati"
                    description="KCD merupakan platform yang sangat bermanfaat dan mudah digunakan oleh warga. Informasi terkini, layanan publik, dan interaksi komunitas semuanya tersedia dalam satu tempat." />
            </div>
        </div>
        {{-- end tanggapan --}}


        {{-- lokasi --}}
        <div class="container tw-pb-20 md:tw-pb-40">
            <x-HeaderTitle position='text-center'>
                <div class="tw-mt-[112px] tw-mb-[56px]">
                    Lokasi
                </div>
            </x-HeaderTitle>
            <div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0693659951276!2d106.94392507499612!3d-6.882293993116616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e684823a3c5baa5%3A0x3e87310caf62efa7!2sKANTOR%20CABANG%20DINAS%20PENDIDIKAN%20WILAYAH%20V%20PROVINSI%20JAWA%20BARAT!5e0!3m2!1sid!2sid!4v1701008903174!5m2!1sid!2sid"
                    class="tw-h-[325px] md:tw-h-[650px]" width="100%" style="border:0; border-radius: 18px"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        {{-- end Lokasi --}}
    </section>
@endsection
