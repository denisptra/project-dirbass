<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Models\User;


class NewsController extends Controller
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
        return view('admin.page.news.index', compact('news'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('admin.page.news.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
        ]);

        // Membuat instansi objek News
        $news = new News();

        // Mengisi atribut-atribut dari request
        $news->image = $request->image;
        $news->title = $request->title;
        $news->content = $request->content;
        $news->author = $request->author;

        // Set created_at to current timestamp
        $news->created_at = now();

        // Menyimpan data ke dalam database
        $news->save();

        // Redirect ke halaman indeks news dengan pesan sukses
        return redirect()->route('news.index')->with('success', 'Data Berhasil Disimpan!');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $news = News::with('user')->find($id);

        return view('admin.page.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        $users = User::all();
        return view('admin.page.news.edit', compact('news', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        // Validasi data input
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
        ]);

        // Update atribut-atribut dari request
        $news->title = $request->title;
        $news->content = $request->content;
        $news->author = $request->author;

        // Update image if new image is uploaded
        if ($request->hasFile('image')) {
            $news->image = $request->image->store('public/news');
        }

        // Save the updated news item
        $news->save();

        // Redirect to the news index page
        return redirect()->route('news.index');
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
        return redirect()->route('news.index')->with(['success' => 'Data Berhasil Dihapus!']);
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
    // public function updateStatus(Request $request, $id)
    // {
    //     $news = News::find($id);
    //     $news->status = $request->input('status');
    //     $news->save();

    //     return redirect()->back();
    // }
}
