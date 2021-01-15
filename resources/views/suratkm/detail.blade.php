@extends('adminlte.master')
@section('title')
    Detail Surat Kurang Mampu
@endsection
@section('content')
<div class="card ">
    <div class="card-header">
        <h3 class="card-title">Detail Surat Kurang Mampu</h3>
    </div>

    <div class="card-body">
    <pre>
    @if (($suratkm->status == "Approve"))
    <b><p>No Surat       : </b>{{$suratkm->no_surat}}-KM/TB/B/{{date('Y',strtotime($suratkm->created_at))}}</p></p>   
    @endif 
    <b><p>NIK            : </b>{{$suratkm->nik }}</p>
    <b><p>No KK          : </b>{{$suratkm->kk }} </p>
    <b><p>Nama           : </b>{{$suratkm->nama }} </p>
    <b><p>Alamat         : </b>{{$suratkm->alamat }} </p>
    <b><p>Tempat Lahir   : </b>{{$suratkm->tempat_lahir }} </p>
    <b><p>Tanggal lahir  : </b>{{date('d-m-Y',strtotime($suratkm->tgl_lahir))}} </p>
    <b><p>Pekerjaan      : </b>{{$suratkm->pekerjaan }} </p>
    <b><p>Nama orang tua : </b>{{$suratkm->nama_ayah }} / {{$suratkm->nama_ibu }} </p>
    <b><p>Tanggal surat  : </b>{{date('d-m-Y',strtotime($suratkm->created_at))}}</p>
    <b><p>Status Surat   : </b>{{$suratkm->status }} </p>
    <b><p>Pelapor        : </b>{{$suratkm->pelapor }} </p>
    <b><p>Keterangan     : </b>{{$suratkm->keterangan }} </p>
    @if ($suratkm->status == "Approve")
    <b><p>Pembuat Surat  : </b>{{$suratkm->user->level }} </p>
    @else
    <b><p>Pembuat Surat  : </b>{{$suratkm->nama}} </p>
    @endif
    




    </div>
</pre>

</div>
@endsection