<?php

namespace App\Http\Controllers;

use App\Http\Requests\PendudukRequest;
use Illuminate\Http\Request;
use App\Penduduk;


class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $penduduk = Penduduk::paginate(15);
        $cari = $request->get('keyword');
        $status = $request->get('status');

        if ($cari && $status == 'nik') {
            $penduduk = Penduduk::where('nik', 'LIKE', "%$cari%")->paginate(15);
        }
        if ($cari && $status == 'kk') {
            $penduduk = Penduduk::where('no_kk', 'LIKE', "%$cari%")->paginate(15);
        }
        return view('penduduk.index', compact('penduduk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penduduk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PendudukRequest $request)
    {
        $penduduk = new Penduduk;
        $penduduk->nik = $request->get('nik');
        $penduduk->no_kk = $request->get('no_kk');
        $penduduk->nama_lengkap = $request->get('nama_lengkap');
        $penduduk->tempat_lahir = $request->get('tempat_lahir');
        $penduduk->tanggal_lahir = date('Y-m-d', strtotime($request->get('tanggal_lahir')));
        $penduduk->jenis_kelamin = $request->get('jenis_kelamin');
        $penduduk->agama = $request->get('agama');
        $penduduk->pendidikan = $request->get('pendidikan');
        $penduduk->pekerjaan = $request->get('pekerjaan');
        $penduduk->status = $request->get('status');
        $penduduk->status_keluarga = $request->get('status_keluarga');
        $penduduk->golongan_darah = $request->get('golongan_darah');
        $penduduk->kewarganegaraan = $request->get('kewarganegaraan');
        $penduduk->nama_ayah = $request->get('nama_ayah');
        $penduduk->nama_ibu = $request->get('nama_ibu');
        $penduduk->email = $request->get('email');
        $penduduk->no_hp = $request->get('no_hp');
        $penduduk->save();

        return redirect()->route('pendudukindex');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penduduk = Penduduk::FindOrFail($id);

        return view('penduduk.detail', compact('penduduk'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penduduk = Penduduk::FindOrFail($id);

        return view('penduduk.edit', compact('penduduk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PendudukRequest $request, $id)
    {
        $penduduk = Penduduk::FindOrFail($id);
        $penduduk->nik = $request->get('nik');
        $penduduk->no_kk = $request->get('no_kk');
        $penduduk->nama_lengkap = $request->get('nama_lengkap');
        $penduduk->tempat_lahir = $request->get('tempat_lahir');
        $penduduk->tanggal_lahir = date('Y-m-d', strtotime($request->get('tanggal_lahir')));
        $penduduk->jenis_kelamin = $request->get('jenis_kelamin');
        $penduduk->agama = $request->get('agama');
        $penduduk->pendidikan = $request->get('pendidikan');
        $penduduk->pekerjaan = $request->get('pekerjaan');
        $penduduk->status = $request->get('status');
        $penduduk->status_keluarga = $request->get('status_keluarga');
        $penduduk->golongan_darah = $request->get('golongan_darah');
        $penduduk->kewarganegaraan = $request->get('kewarganegaraan');
        $penduduk->nama_ayah = $request->get('nama_ayah');
        $penduduk->nama_ibu = $request->get('nama_ibu');
        $penduduk->email = $request->get('email');
        $penduduk->no_hp = $request->get('no_hp');
        $penduduk->save();

        return redirect()->route('pendudukindex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penduduk = Penduduk::FindOrFail($id);
        $penduduk->delete();
        return redirect()->route('pendudukindex');
    }
}
