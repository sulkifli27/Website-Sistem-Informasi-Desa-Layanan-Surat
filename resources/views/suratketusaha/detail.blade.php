@extends('adminlte.master')
@section('title')
    Detail Surat Kurang Mampu
@endsection
@section('content')
<div class="card ">
    <div class="card-header">
        <h3 class="card-title">Detail Surat Kurang Mampu</h3>
    </div>
    @php
            $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII") 
    @endphp
    <div class="card-body">
    <pre>
    @if (($suratusaha->status == "Approve"))
    <b><p>No Surat       : </b>{{$suratusaha->no_surat}}/SKU/TB/BP/{{$bulanRomawi[date('n')]}}/{{date('Y',strtotime($suratusaha->created_at))}}</p></p>
    @endif 
    <b><p>NIK            : </b>{{$suratusaha->nik }}</p>
    <b><p>Nama           : </b>{{$suratusaha->nama }} </p>
    <b><p>Agama          : </b>{{$suratusaha->agama }}
    <b><p>Jenis_kelamin  : </b>{{$suratusaha->jenis_kelamin }}
    <b><p>Alamat         : </b>{{$suratusaha->alamat }} </p>
    <b><p>Tempat Lahir   : </b>{{$suratusaha->tempat_lahir }}</p>
    <b><p>Tanggal lahir  : </b>{{date('d-m-Y',strtotime($suratusaha->tgl_lahir))}} </p>
    <b><p>Pekerjaan      : </b>{{$suratusaha->pekerjaan }} </p>
    <b><p>Jenis usaha    : </b>{{$suratusaha->jenis_usaha }} </p>
    <b><p>Tanggal surat  : </b>{{date('d-m-Y',strtotime($suratusaha->created_at))}}</p>
    <b><p>Pelapor        : </b>{{$suratusaha->pelapor }} </p>
    @if ($suratusaha->status == "Approve")
    <b><p>Pembuat Surat  : </b>{{$suratusaha->user->level }} </p>
    @else
    <b><p>Pembuat Surat  : </b>{{$suratusaha->nama}} </p>
    @endif
    </div>
</pre>

</div>
@endsection