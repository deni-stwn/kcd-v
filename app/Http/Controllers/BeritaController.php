<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Exception;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class BeritaController extends Controller
{
    public function berita() {
        $blogs = Blog::latest()->paginate(9);
        return view('blog.index', compact('blogs'));
    }

    public function show($slug) {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('blog.show', compact('blog'));
    }


    public function getMedia($id)
    {
        try {
            $location = Blog::findOrFail($id);
            $mediaItems = $location->getMedia('document');
            return response()->json(['status' => 'success', 'data' => $mediaItems]);
        } catch (Exception $e) {
            return redirect()->route('blog.index')->with('error', 'Location not found.');
        }
    }

    // public function getMedia($id)
    // {
    //     try {
    //         $location = Blog::findOrFail($id);
    //         $mediaItems = $location->getMedia('document');

    //         $formattedMediaItems = $mediaItems->map(function ($item) {
    //             return [
    //                 'url' => $item->getUrl(),
    //                 'thumbnail' => $item->getUrl('thumb'),
    //                 'preview' => $item->getUrl('preview'),
    //                 'original_url' => $item->getUrl(), // Added this line for original URL
    //             ];
    //         });

    //         return response()->json(['status' => 'success', 'data' => $formattedMediaItems]);
    //     } catch (Exception $e) {
    //         return redirect()->route('locations.index')->with('error', 'Location not found.');
    //     }
    // }

    public function storeMedia(Request $request)
    {
        $path = storage_path('tmp/uploads');
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $file = $request->file('file');
        $name = uniqid() . '_' . trim($file->getClientOriginalName());
        $file->move($path, $name);
        return response()->json([
            'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }

    public function index() {
        $blogs = Blog::paginate(25);
        return view('adminBlog.index', compact('blogs'));
    }

    public function create() {
        return view('adminBlog.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            // 'slug' => 'required|unique:blogs,slug',
            'content' => 'required|max:65535000',
            'image' => 'nullable'
        ]);

        $blog = Blog::create([
            'title' => $request->title,
            // 'slug' => $request->slug,
            'content' => $request->content,
            'user_id' => 1
        ]);

        foreach ($request->input('document', []) as $file) {
            $blog->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('document');
        }
        return redirect()->route('blog.index')->with('success', 'Berhasil menambahkan berita baru')->with('failed', 'Gagal menambahkan berita baru');
    }

    public function edit(Blog $blog) {
        return view('adminBlog.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog) {
        $request->validate([
            'title' => 'required',
            // 'slug' => 'required|unique:blogs,slug,' . $blog->id,
            'content' => 'required',
            'image' => 'nullable'
        ]);

        $blog->update([
            'title' => $request->title,
            // 'slug' => $request->slug,
            'content' => $request->content,
            'user_id' => 1
        ]);

        if (count($request->input('document', [])) > 0) {
            $blog->clearMediaCollection('document');
            foreach ($request->input('document', []) as $file) {
                if (!$blog->document || $file !== $blog->document->file_name) {
                    $blog->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('document');
                }
            }
        } elseif ($blog->document) {
            $blog->document->delete();
        }

        return redirect()->route('blog.index')->with('success', 'Berhasil mengubah berita')->with('failed', 'Gagal mengubah berita');
    }

    public function destroy(Blog $blog) {
        $blog->delete();
        return redirect()->route('blog.index');
    }
}
