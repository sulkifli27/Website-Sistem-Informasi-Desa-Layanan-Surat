<?php

namespace App\Http\Controllers;

use App\Http\Controllers\View;
use App\Berita;
use App\Kk;
use App\Penduduk;
use App\Suratkm;
use App\Suratketusaha;
use Carbon\Carbon;
use Illuminate\Http\Request;


class TampilanuserController extends Controller
{
    public function index()
    {
        $perempuan = Penduduk::where('jenis_kelamin', 'perempuan')->count();
        $laki = Penduduk::where('jenis_kelamin', 'laki')->count();
        $jumlahkk = Kk::count();
        $jmlpenduduk = Penduduk::count();
        $berita = Berita::orderBy('created_at', 'desc')->paginate(6);
        return view('frontend.index', compact('berita', 'jumlahkk', 'perempuan', 'laki', 'jmlpenduduk'));
    }

    public function detail_berita($slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        return view('frontend.detail_berita', compact('berita'));
    }

    // untuk surat keterangan kurang mampu

    public function suratkm()
    {
        return view('frontend.suratkm');
    }


    public function store(Request $request)
    {
        \Validator::make($request->all(), [
            "nik" => "required|min:16|max:16",
            "no_kk" => "required|min:16|max:16",
            'captcha' => 'required|captcha'
        ], ['captcha.captcha' => 'Invalid captcha code.'])->validate();
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
        $suratkm->pelapor = $request->get('nama');
        $suratkm->status = 'Cancel';
        $suratkm->user_id = \Auth::user()->id;
        $suratkm->save();
        return redirect()->route('suratkmampu')->with('status', 'Surat Berhasil Di Buat. Ambil surat Anda Di Kantor Desa');
    }

    public function update(Request $request, $id)
    {
        $suratkm = Suratkm::FindOrFail($id);
        $suratkm->status = 'Approve';
        $nomorSurat = Suratkm::whereYear("created_at", Carbon::now()->year)->where("status", "Approve")->count();
        $suratkm->no_surat = $nomorSurat + 1;
        $suratkm->save();
        return redirect()->route('suratkmindex');
    }

    // untuk surat keterangan usaha 

    public function suratusaha()
    {
        return view('frontend.suratusaha');
    }

    public function simpan(Request $request)
    {
        \Validator::make($request->all(), [
            "nik" => "required|min:16|max:16",
            "no_kk" => "required|min:16|max:16",
            "jenis_usaha" => "required|min:5|max:50",
            'captcha' => 'required|captcha'
        ], ['captcha.captcha' => 'Invalid captcha code.'])->validate();
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
        $suratusaha->pelapor = $request->get('nama');
        $suratusaha->status = ('Cancel');
        $suratusaha->user_id = \Auth::user()->id;
        $suratusaha->save();

        return redirect()->route('suratusaha')->with('status', 'Surat Berhasil Di Buat. Ambil surat Anda Di Kantor Desa');
    }

    public function perbaharui($id)
    {
        $suratkm = Suratketusaha::FindOrFail($id);
        $suratkm->status = 'Approve';
        $nomorSurat = Suratketusaha::whereYear("created_at", Carbon::now()->year)->where("status", "Approve")->count();
        $suratkm->no_surat = $nomorSurat + 1;
        $suratkm->save();
        return redirect()->route('suratusahaindex');
    }

    public function refreshCaptcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }
}
