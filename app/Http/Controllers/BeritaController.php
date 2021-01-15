<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Http\Requests\BeritaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $berita = Berita::orderBy('created_at', 'desc')->paginate(7);
        $cari = $request->get('keyword');
        if ($cari) {
            $berita = Berita::where('judul', 'LIKE', "%$cari%")->paginate(7);
        }
        return view('berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BeritaRequest $request)
    {
        $judul = $request->get('judul');
        $berita = new Berita;
        $berita->judul = $judul;
        $berita->slug = str::slug($judul, '-');
        $berita->content = $request->get('content');
        $berita->user_id = \Auth::user()->id;
        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('gambar', 'public');
            $berita->gambar = $file;
        }
        $berita->save();

        return redirect()->route('beritaindex');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        return view('berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BeritaRequest $request, $slug)
    {
        $judul = $request->get('judul');
        $berita = Berita::where('slug', $slug)->first();
        $berita->judul = $judul;
        $berita->slug = str::slug($judul);
        $berita->content = $request->get('content');
        if ($request->file('gambar')) {
            if ($berita->gambar && file_exists(storage_path('app/public/' . $berita->gambar))) {
                Storage::delete('public/' . $berita->gambar);
            }
            $file = $request->file('gambar')->store('gambar', 'public');
            $berita->gambar = $file;
        }
        $berita->save();
        return redirect()->route('beritaindex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        Storage::delete('public/' . $berita->gambar);
        $berita->delete();
        return redirect()->route('beritaindex');
    }
}
