@extends('adminlte.master')
@section('title')
    Data Kepindahan
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Pendatang</h3>
    </div>
    <div class="card-header">
        <a class="btn btn-primary" href="{{route('pendatangcreate')}}">Tambah Data</a>
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
            <th>No Datang</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Tanggal Datang</th>
            <th>Asal</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($pendatang as $pendatangs)
          <tr>
          <td>{{$pendatangs->no_datang}}</td>
          <td>{{$pendatangs->nik}}</td>
          <td>{{$pendatangs->penduduk->nama_lengkap}}</td>
          <td>{{date('d-m-Y',strtotime($pendatangs->tgl_datang))}}</td>
          <td>{{$pendatangs->asal}}</td>
          <td>   
          <a  href="{{route('pendatangedit',$pendatangs->no_datang)}}"><button type="submit"  class="btn btn-info"><i class="fas fa-edit"></i> Edit</button> </a>
            <form  action="{{route('pendatangdelete',$pendatangs->no_datang)}}" method="post" class="form-check-inline">
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
        {{$pendatang->links()}}
      </ul>
    </div>
  </div>
@endsection

