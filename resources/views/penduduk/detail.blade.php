@extends('adminlte.master')
@section('title')
    Detail Penduduk
@endsection
@section('content')
<div class="card ">
    <div class="card-header">
        <h3 class="card-title">Detail Penduduk</h3>
    </div>

    <div class="card-body">
    <pre>
    <b><p>No KK           : </b> {{$penduduk->no_kk}}</p>
    <b><p>Alamat </b>         :  <b>Dusun : </b>{{$penduduk->kk->dusun}} | <b> RT :</b> {{$penduduk->kk->rt}} | <b>RW :</b> {{$penduduk->kk->rw}} | <b>Desa :</b> {{$penduduk->kk->desa}} | <b>Kecamatan : </b> {{$penduduk->kk->kecamatan}} | <b> Kabupaten :</b> {{$penduduk->kk->kabupaten}} | <b>Provinsi : </b> {{$penduduk->kk->provinsi}}</p>
    <b><p>NIK             : </b> {{$penduduk->nik}}</p>
    <b><p>Nama Lengkap    : </b> {{$penduduk->nama_lengkap}}</p>
    <b><p>Tempat Lahir    : </b> {{$penduduk->tempat_lahir}}</p>
    <b><p>Tanggal Lahir   : </b> {{date('d-m-Y',strtotime($penduduk->tanggal_lahir))}}</p>
    <b><p>Jenis Kelamin   : </b> {{$penduduk->jenis_kelamin}}</p>
    <b><p>Agama           : </b> {{$penduduk->agama}}</p>
    <b><p>Pendidikan      : </b> {{$penduduk->pendidikan}}</p>
    <b><p>Pekerjaan       : </b> {{$penduduk->pekerjaan}}</p>
    <b><p>Status          : </b> {{$penduduk->status}}</p>
    <b><p>Status Keluarga : </b> {{$penduduk->status_keluarga}}</p>
    <b><p>Golongan Darah  : </b> {{$penduduk->golongan_darah}}</p>
    <b><p>Kewarganegaraan : </b> {{$penduduk->kewarganegaraan}}</p>
    <b><p>Nama Ayah       : </b> {{$penduduk->nama_ayah}}</p>
    <b><p>Nama Ibu        : </b> {{$penduduk->nama_ibu}}</p>
    <b><p>Email           : </b> {{$penduduk->email}}</p>
    <b><p>No Hp           : </b> {{$penduduk->no_hp}}</p>
    </div>
</pre>

</div>
@endsection