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
        $blogs = Blog::take(3)->latest()->get();
        return view('home.index', compact('blogs'));
    }

    public function linkTerkait() {
        return view('linkTerkait.index');
    }

    public function contact() {
        return view('contact.index');
    }

    public function Pegawai() {
        return view('pegawai.index');
    }
}
