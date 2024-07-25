<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryPageController extends Controller
{
    public $gallery;
    public function __construct()
    {
        $this->gallery = new Gallery();
    }

    public function index()
    {
        $gallery = Gallery::orderBy('created_at', 'desc')->get();
        $title = 'Delete Gallery   !';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('admin.page.gallery-page.index', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.page.gallery-page.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $gallery = new Gallery();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images/gallery', $imageName);
            $gallery->image = $imageName;
        }

        $gallery->save();

        return redirect()->route('gallery-page.index')->with('success', 'Gallery Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.page.gallery-page.show', compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.page.gallery-page.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $gallery = Gallery::findOrFail($id);
    
        // Update properti lain dari galeri yang tidak terkait dengan gambar
        // $gallery->fill($request->except('image'));
    
        if ($request->hasFile('image')) {
            // Menghandle upload image baru
            if ($gallery->image) {
                Storage::delete('public/images/gallery/' . $gallery->image);
            }
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images/gallery', $imageName);
            $gallery->image = $imageName;
        }
    
        // Simpan perubahan
        $gallery->save();
    
        return redirect()->route('gallery-page.index')->with('success', 'Gallery Updated Successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        $gallery->delete();

        return redirect()->route('gallery-page.index')->with(['success' => 'Gallery Deleted Successfully!']);
    }
}
