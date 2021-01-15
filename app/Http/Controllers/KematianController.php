<?php

namespace App\Http\Controllers;

use App\Http\Requests\KematianRequest;
use App\Kematian;
use App\Penduduk;
use Illuminate\Http\Request;

class KematianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $kematian = Kematian::paginate(15);
        $cari = $request->get('keyword');
        if ($cari) {
            $kematian = Kematian::where('nik', 'LIKE', "%$cari%")->paginate(15);
        }
        return view('kematian.index', compact('kematian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kematian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KematianRequest $request)
    {
        $kematian = new Kematian;
        $kematian->no_kematian = $request->get('no_kematian');
        $kematian->tempat_meninggal = $request->get('tempat_meninggal');
        $kematian->tgl_meninggal = $request->get('tgl_meninggal');
        $kematian->umur = $request->get('umur');
        $kematian->sebab = $request->get('sebab');
        $kematian->tempat_makam = $request->get('tempat_makam');
        $kematian->nik = $request->get('nik');
        $kematian->save();

        return redirect()->route('kematianindex');
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
        $kematian = Kematian::FindOrFail($id);
        return view('kematian.edit', compact('kematian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KematianRequest $request, $id)
    {
        $kematian = Kematian::FindOrFail($id);
        $kematian->sebab = $request->get('sebab');
        $kematian->tempat_makam = $request->get('tempat_makam');
        $kematian->save();
        return redirect()->route('kematianindex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kematian = Kematian::FindOrFail($id);
        $kematian->delete();
        return redirect()->route('kematianindex');
    }

    public function ajax(Request $request, $nik)
    {
        $data = Penduduk::where('nik', $nik)->first();
        return response()->json($data);
    }
}
