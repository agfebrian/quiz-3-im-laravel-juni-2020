<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArticleController extends Controller
{
    public function index()
    {
        $items = ArtikelModel::all();
        return view('index', ['items' => $items]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $slug = \Slug::create($request->judul);
        $item = ArtikelModel::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'slug' => $slug,
            'tag' => $request->tag
        ]);
        return view('index')->with('pesan', 'Data berhasil disimpan');
    }
}
