<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use PDF;
use App\Kk;
use App\Suratkm;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SuratkmController extends Controller
{
    public function create()
    {
        return view('suratkm.create');
    }



    public function store(Request $request)
    {
        \Validator::make($request->all(), [
            "nik" => "required|min:16|max:16",
            "pelapor" => "required|min:3|max:30",
        ])->validate();
        $suratkm = new Suratkm;
        $suratkm->nik = $request->get('nik');
        $suratkm->kk = $request->get('no_kk');
        $suratkm->nama = $request->get('nama');
        $suratkm->alamat = $request->get('alamat');
        $suratkm->tempat_lahir = $request->get('tempat_lahir');
        $suratkm->tgl_lahir = $request->get('tgl_lahir');
        $suratkm->pekerjaan = $request->get('pekerjaan');
        $suratkm->nama_ayah = $request->get('nama_ayah');
        $suratkm->nama_ibu = $request->get('nama_ibu');
        $suratkm->nama_ibu = $request->get('nama_ibu');
        $suratkm->pelapor = $request->get('pelapor');
        $suratkm->keterangan = $request->get('keterangan');
        $suratkm->status = 'Approve';
        $suratkm->user_id = \Auth::user()->id;
        $nomorSurat = Suratkm::whereYear("created_at", Carbon::now()->year)->where("status", "Approve")->count();
        $suratkm->no_surat = $nomorSurat + 1;
        $suratkm->save();

        return redirect()->route('suratkmindex');
    }

    public function ajax(Request $request, $no_kk)
    {
        $data = Kk::where('no_kk', $no_kk)->first();
        return response()->json($data);
    }


    public function index(Request $request)
    {

        $status = $request->get('status');

        if ($status) {
            $suratkm = Suratkm::where('status', $status)->paginate(15);
        } else {
            $suratkm = Suratkm::orderBy('id', 'desc')->paginate(15);
        }

        $cari = $request->get('keyword');
        if ($cari) {
            if ($status) {
                $suratkm = Suratkm::where('nik', 'LIKE', "%$cari%")->where('status', $status)->paginate(15);
            } else {
                $suratkm = Suratkm::where('nik', 'LIKE', "%$cari%")->paginate(15);
            }
        }
        return view('suratkm.index', compact('suratkm'));
    }
    public function show($id)
    {
        $suratkm = Suratkm::FindOrFail($id);

        return view('suratkm.detail', compact('suratkm'));
    }

    public function edit($id)
    {
        $suratkm = Suratkm::FindOrFail($id);

        return view('suratkm.edit', compact('suratkm'));
    }

    public function update(Request $request, $id)
    {
        $suratkm = Suratkm::FindOrFail($id);
        $suratkm->pelapor = $request->get('pelapor');
        $suratkm->keterangan = $request->get('keterangan');
        $suratkm->user_id = \Auth::user()->id;
        $suratkm->save();

        return redirect()->route('suratkmindex');
    }

    public function cetak_surat($id)
    {
        $suratkm = Suratkm::FindOrFail($id);
        $pdf = PDF::loadview('suratkm.cetak', ['suratkm' => $suratkm]);
        return $pdf->stream('surat_keterangan_kurang_mampu.pdf');
    }
}
