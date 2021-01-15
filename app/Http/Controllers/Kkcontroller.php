<?php

namespace App\Http\Controllers;

use App\Http\Requests\KkRequest;
use Illuminate\Http\Request;
use App\Kk;

class Kkcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $kk = Kk::paginate(15);
        $cari = $request->get('keyword');
        if ($cari) {
            $kk = Kk::where('no_kk', 'LIKE', "%$cari%")->paginate(15);
        }
        return view('kk.index', compact('kk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KkRequest $request)
    {
        $kk = new Kk;
        $kk->no_kk = $request->get('no_kk');
        $kk->dusun = $request->get('dusun');
        $kk->rt = $request->get('rt');
        $kk->rw = $request->get('rw');
        $kk->desa = $request->get('desa');
        $kk->kecamatan = $request->get('kecamatan');
        $kk->kabupaten = $request->get('kabupaten');
        $kk->provinsi = $request->get('provinsi');
        $kk->save();

        return redirect()->route('kkindex');
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

        $kk = Kk::FindOrFail($id);
        return view('kk.edit', compact('kk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KkRequest $request, $id)
    {
        $kk = Kk::FindOrFail($id);
        $kk->dusun = $request->get('dusun');
        $kk->rt = $request->get('rt');
        $kk->rw = $request->get('rw');
        $kk->desa = $request->get('desa');
        $kk->kecamatan = $request->get('kecamatan');
        $kk->kabupaten = $request->get('kabupaten');
        $kk->provinsi = $request->get('provinsi');
        $kk->save();
        return redirect()->route('kkindex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kk = Kk::FindOrFail($id);
        $kk->delete();
        return redirect()->route('kkindex');
    }
}
