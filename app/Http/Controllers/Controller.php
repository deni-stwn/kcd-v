<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index() {
        $links = [
            [
                'image' => asset('assets/link/siapJabar.svg'),
                'title' => 'SIAP JABAR',
                'description' => 'Kepegawaian',
                'url' => 'https://siap.jabarprov.go.id/',
                'category' => 'kepegawaian',
            ],
            [
                'image' => asset('assets/link/image 7.png'),
                'title' => 'DAPODIK',
                'description' => 'Data GTK & Siswa',
                'url' => 'https://sso.datadik.kemdikbud.go.id/',
                'category' => 'sekolah',
            ],
            [
                'image' => asset('assets/link/Group 19.png'),
                'title' => 'TRK JABAR',
                'description' => 'Kinerja Pegawai',
                'url' => 'https://kinerja.jabarprov.go.id/login',
                'category' => 'kepegawaian',
            ],
            [
                'image' => asset('assets/link/image 8.png'),
                'title' => 'K-MOB',
                'description' => 'Absensi Pegawai',
                'url' => 'https://kmob.jabarprov.go.id/',
                'category' => 'kepegawaian',
            ],
        ];

        $blogs = Blog::take(3)->latest()->get();
        return view('home.index', compact('blogs', 'links'));
    }

    public function linkTerkait() {
        $links = [
            [
                'image' => asset('assets/link/siapJabar.svg'),
                'title' => 'SIAP JABAR',
                'description' => 'Kepegawaian',
                'url' => 'https://siap.jabarprov.go.id/',
                'category' => 'kepegawaian',
            ],
            [
                'image' => asset('assets/link/image 7.png'),
                'title' => 'DAPODIK',
                'description' => 'Data GTK & Siswa',
                'url' => 'https://sso.datadik.kemdikbud.go.id/',
                'category' => 'sekolah',
            ],
            [
                'image' => asset('assets/link/Group 19.png'),
                'title' => 'TRK JABAR',
                'description' => 'Kinerja Pegawai',
                'url' => 'https://kinerja.jabarprov.go.id/login',
                'category' => 'kepegawaian',
            ],
            [
                'image' => asset('assets/link/image 8.png'),
                'title' => 'K-MOB',
                'description' => 'Absensi Pegawai',
                'url' => 'http://example.com/2',
                'category' => 'kepegawaian',
            ],
            [
                'image' => asset('assets/link/image 21 (1).png'),
                'title' => 'SIGESIT JUARA',
                'description' => 'DSO Pegawai & Penjadwalan',
                'url' => 'https://sigesitjuara.jabarprov.go.id/',
                'category' => 'kepegawaian',
            ],
            [
                'image' => asset('assets/link/image 22.png'),
                'title' => 'ARKAS',
                'description' => 'Keuangan',
                'url' => 'https://arkas.kemdikbud.go.id/',
                'category' => 'keuangan',
            ],
            [
                'image' => asset('assets/link/image 23.png'),
                'title' => 'SIPD BOPD',
                'description' => 'Pengelolaan Anggaran',
                'url' => 'https://sipd-sekolah.jabarprov.go.id/',
                'category' => 'keuangan',
            ],
            [
                'image' => asset('assets/link/image 21.png'),
                'title' => 'PERSEDIAAN ASSET',
                'description' => 'Persediaan  Asset',
                'url' => 'https://bit.ly/PERSEDIAAN_2023_KCD5',
                'category' => 'keuangan',
            ],
            [
                'image' => asset('assets/link/image 24.png'),
                'title' => 'SIDEBAR',
                'description' => 'Pelayanan Persuratan',
                'url' => 'https://sidebar.jabarprov.go.id/',
                'category' => 'kepegawaian',
            ],
            [
                'image' => asset('assets/link/image 25.png'),
                'title' => 'SI PINTAR',
                'description' => 'Data PIP Siswa',
                'url' => 'https://pip.kemdikbud.go.id/',
                'category' => 'sekolah',
            ],
            [
                'image' => asset('assets/link/Creative Studio 1.png'),
                'title' => 'SI SITI',
                'description' => 'Sistem  Informasi Cuti',
                'url' => 'http://example.com/2',
                'category' => 'kepegawaian',
            ],
            [
                'image' => asset('assets/link/image 26.png'),
                'title' => 'E-PENGHARGAAN',
                'description' => 'Informasi Penghargaan Pegawai',
                'url' => 'http://example.com/2',
                'category' => 'kepegawaian',
            ],
        ];

        $filterBykepegawaian = array_filter($links, function($link) {
            return $link['category'] == 'kepegawaian';
        });

        $filterBykeuangan = array_filter($links, function($link) {
            return $link['category'] == 'keuangan';
        });

        $filterBysekolah = array_filter($links, function($link) {
            return $link['category'] == 'sekolah';
        });

        return view('linkTerkait.index', compact('links', 'filterBykepegawaian', 'filterBykeuangan', 'filterBysekolah'));
    }

    public function contact() {
        return view('contact.index');
    }

    public function Pegawai() {
        return view('pegawai.index');
    }
}
