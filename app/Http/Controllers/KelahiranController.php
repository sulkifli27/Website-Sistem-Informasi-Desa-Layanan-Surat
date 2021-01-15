<?php

namespace App\Http\Controllers;

use App\Kelahiran;
use Illuminate\Http\Request;
use App\Http\Requests\KelahiranRequest;

class KelahiranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $kelahiran = Kelahiran::paginate(15);
        $cari = $request->get('keyword');
        if ($cari) {
            $kelahiran = Kelahiran::where('nama_bayi', 'LIKE', "%$cari%")->paginate(15);
        }
        return view('kelahiran.index', compact('kelahiran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelahiran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KelahiranRequest $request)
    {
        $kelahiran =  new Kelahiran;
        $kelahiran->no_kelahiran = $request->get('no_kelahiran');
        $kelahiran->nama_bayi = $request->get('nama_bayi');
        $kelahiran->tempat_lahir = $request->get('tempat_lahir');
        $kelahiran->tgl_lahir = date('Y-m-d', strtotime($request->get('tgl_lahir')));
        $kelahiran->berat = $request->get('berat');
        $kelahiran->jenis_kelamin = $request->get('jenis_kelamin');
        $kelahiran->nama_ayah = $request->get('nama_ayah');
        $kelahiran->nama_ibu = $request->get('nama_ibu');
        $kelahiran->alamat = $request->get('alamat');
        $kelahiran->nama_pelapor = $request->get('nama_pelapor');
        $kelahiran->save();
        return redirect()->route('kelahiranindex');
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
        $kelahiran = Kelahiran::FindOrFail($id);
        return view('kelahiran.edit', compact('kelahiran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KelahiranRequest $request, $id)
    {
        $kelahiran = Kelahiran::FindOrFail($id);
        $kelahiran->nama_bayi = $request->get('nama_bayi');
        $kelahiran->tempat_lahir = $request->get('tempat_lahir');
        $kelahiran->tgl_lahir = date('Y-m-d', strtotime($request->get('tgl_lahir')));
        $kelahiran->berat = $request->get('berat');
        $kelahiran->jenis_kelamin = $request->get('jenis_kelamin');
        $kelahiran->nama_ayah = $request->get('nama_ayah');
        $kelahiran->nama_ibu = $request->get('nama_ibu');
        $kelahiran->alamat = $request->get('alamat');
        $kelahiran->nama_pelapor = $request->get('nama_pelapor');
        $kelahiran->save();
        return redirect()->route('kelahiranindex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelahiran = Kelahiran::FindOrFail($id);
        $kelahiran->delete();
        return redirect()->route('kelahiranindex');
    }
}
