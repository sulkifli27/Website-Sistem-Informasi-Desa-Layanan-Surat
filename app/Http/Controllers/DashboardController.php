<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Kk;
use App\Penduduk;
use App\Suratketusaha;
use App\Suratkm;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $suratkm = Suratkm::count();
        $user = User::count();
        $suratketusaha = Suratketusaha::count();
        $jumlahkk = Kk::count();
        $berita = Berita::count();
        $perempuan = Penduduk::where('jenis_kelamin', 'perempuan')->count();
        $laki = Penduduk::where('jenis_kelamin', 'laki')->count();
        $jmlpenduduk = Penduduk::count();
        return view('dashboard', compact('jumlahkk', 'jmlpenduduk', 'laki', 'perempuan', 'berita', 'suratketusaha', 'suratkm', 'user'));
    }
}
