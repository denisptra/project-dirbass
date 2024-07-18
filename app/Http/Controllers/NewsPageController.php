<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsPageController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('user.page.news.index', compact('news'));
    }
}
