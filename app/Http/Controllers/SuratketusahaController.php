<?php

namespace App\Http\Controllers;

use App\Suratketusaha;
use Illuminate\Http\Request;
use PDF;
use Carbon\Carbon;

class SuratketusahaController extends Controller
{
    public function create()
    {
        return view('suratketusaha.create');
    }

    public function store(Request $request)
    {
        \Validator::make($request->all(), [
            "nik" => "required|min:16|max:16",
            "pelapor" => "required|min:3|max:30",
            "jenis_usaha" => "required|min:5|max:50",
        ])->validate();
        $suratusaha = new Suratketusaha;
        $suratusaha->nik = $request->get('nik');
        $suratusaha->nama = $request->get('nama');
        $suratusaha->tempat_lahir = $request->get('tempat_lahir');
        $suratusaha->tgl_lahir = $request->get('tgl_lahir');
        $suratusaha->pekerjaan = $request->get('pekerjaan');
        $suratusaha->jenis_usaha = $request->get('jenis_usaha');
        $suratusaha->agama = $request->get('agama');
        $suratusaha->jenis_kelamin = $request->get('jenis_kelamin');
        $suratusaha->alamat = $request->get('alamat');
        $suratusaha->pelapor = $request->get('pelapor');
        $suratusaha->status = ('Approve');
        $suratusaha->user_id = \Auth::user()->id;
        $nomorSurat = Suratketusaha::whereYear("created_at", Carbon::now()->year)->where("status", "Approve")->count();
        $suratusaha->no_surat = $nomorSurat + 1;
        $suratusaha->save();

        return redirect()->route('suratusahaindex');
    }

    public function index(Request $request)
    {
        $status = $request->get('status');

        if ($status) {
            $suratusaha = Suratketusaha::where('status', $status)->paginate(15);
        } else {
            $suratusaha = Suratketusaha::orderBy('id', 'desc')->paginate(20);
        }

        $cari = $request->get('keyword');
        if ($cari) {
            if ($status) {
                $suratusaha = Suratketusaha::where('nik', 'LIKE', "%$cari%")->where('status', $status)->paginate(15);
            } else {
                $suratusaha = Suratketusaha::where('nik', 'LIKE', "%$cari%")->paginate(15);
            }
        }
        return view('suratketusaha.index', compact('suratusaha'));
    }

    public function show($id)
    {
        $suratusaha = Suratketusaha::FindOrFail($id);
        return view('suratketusaha.detail', compact('suratusaha'));
    }

    public function edit($id)
    {
        $suratusaha = Suratketusaha::FindOrFail($id);
        return view('suratketusaha.edit', compact('suratusaha'));
    }

    public function update(Request $request, $id)
    {
        $suratusaha = Suratketusaha::FindOrFail($id);
        $suratusaha->pelapor = $request->get('pelapor');
        $suratusaha->user_id = \Auth::user()->id;
        $suratusaha->save();
        return redirect()->route('suratusahaindex');
    }

    public function cetak_surat($id)
    {
        $suratusaha = Suratketusaha::FindOrFail($id);
        $pdf = PDF::loadview('suratketusaha.cetak', ['suratusaha' => $suratusaha]);
        return $pdf->stream('surat_keterangan_usaha.pdf');
    }
}
