<?php

namespace App\Http\Controllers;

use App\Kepindahan;
use Illuminate\Http\Request;
use App\Http\Requests\KepindahanRequest;

class KepindahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pindah = Kepindahan::paginate(15);
        $cari = $request->get('keyword');
        if ($cari) {
            $pindah = Kepindahan::where('nik', 'LIKE', "%$cari%")->paginate(15);
        }
        return view('kepindahan.index', compact('pindah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kepindahan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KepindahanRequest $request)
    {
        $pindah = new Kepindahan;
        $pindah->no_pindah = $request->get('no_pindah');
        $pindah->tanggal_pindah = date('Y-m-d', strtotime($request->get('tanggal_pindah')));
        $pindah->keterangan = $request->get('keterangan');
        $pindah->nik = $request->get('nik');
        $pindah->save();
        return redirect()->route('kepindahanindex');
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
    public function edit($id)
    {
        $pindah = Kepindahan::FindOrFail($id);
        return view('kepindahan.edit', compact('pindah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KepindahanRequest $request, $id)
    {
        $pindah = Kepindahan::FindOrFail($id);
        $pindah->tanggal_pindah = date('Y-m-d', strtotime($request->get('tanggal_pindah')));
        $pindah->keterangan = $request->get('keterangan');
        $pindah->save();
        return redirect()->route('kepindahanindex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pindah = Kepindahan::FindOrFail($id);
        $pindah->delete();
        return redirect()->route('kepindahanindex');
    }
}
