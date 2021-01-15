@extends('adminlte.master')
@section('title')
    Data Kelahiran
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Kelahiran</h3>
    </div>
    <div class="card-header">
        <a class="btn btn-primary" href="{{route('kelahirancreate')}}">Tambah Data</a>
    </div>
    <div class="card-header">
      <form action="">
        <div class="row">
              <div class="col-md-7">
                <input value="{{Request::get('keyword')}}" name="keyword" class="form-control"type="text" placeholder="Masukan Nama Bayi untuk pencarian.....">
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
            <th>No</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Berat</th> 
            <th>Jenis Kelamin</th> 
            <th>Nama Ayah</th> 
            <th>Nama ibu</th> 
            <th>Alamat</th> 
            <th>Pelapor</th>
            <th>Action</th>
           
          </tr>
        </thead>
        <tbody>
        @foreach ($kelahiran as $kelahirans)
          <tr>
          
          <td>{{$kelahirans->no_kelahiran}}</td>
          <td>{{$kelahirans->nama_bayi}}</td>
          <td>{{$kelahirans->tempat_lahir}}</td>
          <td>{{date('d-m-Y',strtotime($kelahirans->tgl_lahir))}}</td>
          <td>{{$kelahirans->berat}}</td>
          <td>{{$kelahirans->jenis_kelamin}}</td>
          <td>{{$kelahirans->nama_ayah}}</td>
          <td>{{$kelahirans->nama_ibu}}</td>
          <td>{{$kelahirans->alamat}}</td>
          <td>{{$kelahirans->nama_pelapor}}</td>
          <td>   
          <a  href="{{route('kelahiranedit', $kelahirans->no_kelahiran)}}"><button type="submit"  class="btn btn-info"><i class="fas fa-edit"></i> Edit</button> </a>
            <form  action="{{route('kelahirandelete', $kelahirans->no_kelahiran)}}" method="post" class="form-check-inline">
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
        {{$kelahiran->links()}}
      </ul>
    </div>
  </div>
@endsection

