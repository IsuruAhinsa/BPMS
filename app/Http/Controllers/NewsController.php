<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index', [
            'news' => $this->getNews()
        ]);
    }

    public function show($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        return view('news.show', [
            'news' => $news,
            'recentNews' => $this->getRecentNews(),
        ]);
    }

    public function getNews()
    {
        return News::orderBy('id', 'desc')->get();
    }

    public function getRecentNews()
    {
        return News::inRandomOrder()->take(4)->get();
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $news = News::where('title', 'like', "%$query%")->orwhere('body', 'like', "%$query%")->get();
        return view('news.search')->with(compact('news'));
    }
}
