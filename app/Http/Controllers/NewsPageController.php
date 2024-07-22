<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;


class NewsPageController extends Controller
{
    public $news;
    public function __construct()
    {
        $this->news = new News();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->get();
        $title = 'Delete News   !';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('admin.page.news-page.index', compact('news'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('admin.page.news-page.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'title' => 'required|min:10',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Membuat instansi objek News
        $news = new News();

        // Mengisi atribut-atribut dari request
        $news->title = $request->title;
        $news->content = $request->content;

        // Store the image file
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images/news', $imageName);
            $news->image = $imageName;
        }

        // Menyimpan data ke dalam database
        $news->save();

        // Redirect ke halaman indeks news dengan pesan sukses
        return redirect()->route('news-page.index')->with('sweetalert', 'News Created Successfully!');
    }




    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Mengambil data news berdasarkan id dan relasi user
        $news = News::with('user')->findOrFail($id);
        return view('admin.page.news-page.show', compact('news'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news_page)
    {
        return view('admin.page.news-page.edit', compact('news_page'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news_page)
    {
        // Validasi data input
        $request->validate([
            'title' => 'required|min:10',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Update atribut-atribut dari request
        $news_page->title = $request->title;
        $news_page->content = $request->content;

        // Update image if new image is uploaded
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($news_page->image) {
                Storage::delete('public/images/news/' . $news_page->image);
            }
            // Upload gambar baru
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images/news', $imageName);
            $news_page->image = $imageName;
        }

        // Save the updated news item
        $news_page->save();

        // Redirect to the news index page with a success message
        return redirect()->route('news-page.index')->with('success', 'News Updated Successfully!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);

        //delete post
        $news->delete();

        //redirect to index
        return redirect()->route('news-page.index')->with(['success' => 'News Deleted Successfully!']);
    }

    public function toggleStatus(Request $request, $id)
    {
        News::where('id', $id)->updated(
            [
                'status' => $request->status
            ]
        );
        return redirect()->back();
    }
    public function updateStatus(Request $request, $id)
    {
        $news = News::findOrFail($id);
        $news->status = $request->has('status') ? 1 : 0;
        $news->save();

        return redirect()->route('news-page.index')->with('success', 'Status Updated Successfully!');
    }
}
