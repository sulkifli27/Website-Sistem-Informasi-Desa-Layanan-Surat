@extends('adminlte.master')
@section('title')
    Data Kepindahan
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Kepindahan</h3>
    </div>
    <div class="card-header">
        <a class="btn btn-primary" href="{{route('kepindahancreate')}}">Tambah Data</a>
    </div>
    <div class="card-header">
      <form action="">
        <div class="row">
              <div class="col-md-7">
                <input value="{{Request::get('keyword')}}" name="keyword" class="form-control"type="text" placeholder="Masukan NIK untuk pencarian.....">
              </div>
              <button type="submit" class="btn btn-primary"> <i class="fas fa-search" ></i> Cari </button> 
        </div>
      </form>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered table-hover ">
        <thead class="table-secondary">                  
          <tr>
            <th>No Pindah</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Tanggal Pindah</th>
            <th>Keterangan</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($pindah as $pindahs)
          <tr>
          <td>{{$pindahs->no_pindah}}</td>
          <td>{{$pindahs->nik}}</td>
          <td>{{$pindahs->penduduk->nama_lengkap}}</td>
          <td>{{date('d-m-Y',strtotime($pindahs->tanggal_pindah))}}</td>
          <td>{{$pindahs->keterangan}}</td>
          <td>   
          <a  href="{{route('kepindahanedit',$pindahs->no_pindah)}}"><button type="submit"  class="btn btn-info"><i class="fas fa-edit"></i> Edit</button> </a>
            <form  action="{{route('kepindahandelete',$pindahs->no_pindah)}}" method="post" class="form-check-inline">
              @csrf
              @method('DELETE')
              <button onclick="return confirm('Yakin Hapus Data Ini?')" class="btn  btn-danger" type="submit "><i class="fas fa-trash"></i> Hapus</button>
            </form>
          </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
      <ul class="pagination pagination-sm m-0 float-right">
        {{$pindah->links()}}
      </ul>
    </div>
  </div>
@endsection

