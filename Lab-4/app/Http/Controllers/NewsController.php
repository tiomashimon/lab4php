<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\News;

class NewsController extends Controller
{
    // Перегляд списку новин
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    // Форма для створення нової новини
    public function create()
    {
        return view('news.create');
    }

    // Збереження нової новини
    public function store(Request $request)
    {
        $news = new News;
        $news->title = $request->title;
        $news->short_description = $request->short_description;
        $news->content = $request->content;
        $news->publication_date = $request->publication_date;
        $news->save();
        return redirect()->route('news.index');
    }

    // Перегляд окремої новини
    public function show($id)
    {
        $news = News::find($id);
        return view('news.show', compact('news'));
    }

    // Форма для редагування новини
    public function edit($id)
    {
        $news = News::find($id);
        return view('news.edit', compact('news'));
    }

    // Оновлення новини
    public function update(Request $request, $id)
    {
        $news = News::find($id);
        $news->title = $request->title;
        $news->short_description = $request->short_description;
        $news->content = $request->content;
        $news->publication_date = $request->publication_date;
        $news->save();
        return redirect()->route('news.index');
    }

    // Видалення новини
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect()->route('news.index');
    }
}