@extends('adminlte.master')
@section('title')
    Data KK
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Kartu Keluarga</h3>
    </div>
    <div class="card-header">
        <a class="btn btn-primary" href="{{route('kkcreate')}}">Tambah Data</a>
    </div>
<div class="card-header">
  <form action="">
    <div class="row">
          <div class="col-md-7">
            <input value="{{Request::get('keyword')}}" name="keyword" class="form-control"type="text" placeholder="Masukan No KK untuk pencarian.....">
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
            <th>Nomor KK</th>
            <th>Dusun</th>
            <th>RT</th>
            <th>RW</th>
            <th>Desa</th>
            <th>Kecamatan</th>
            <th>Kabupaten</th>
            <th>Provinsi</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($kk as $kks)
          <tr>
          <td>{{$kks->no_kk}}</td>
          <td>{{$kks->dusun}}</td>
          <td>{{$kks->rt}}</td>
          <td>{{$kks->rw}}</td>
          <td>{{$kks->desa}}</td>
          <td>{{$kks->kecamatan}}</td>
          <td>{{$kks->kabupaten}}</td>
          <td>{{$kks->provinsi}}</td>
          <td>
            <a  href="{{route('kkedit',$kks->no_kk)}}"><button type="submit"  class="btn btn-info"><i class="fas fa-edit"></i> Edit</button> </a>
            <form  action="{{route('kkdelete',$kks->no_kk)}}" method="post" class="form-check-inline">
              @csrf
              @method('DELETE')
              <button onclick="return confirm('Yakin Hapus Data Ini?')" class="btn btn-danger" type="submit "><i class="fas fa-trash"></i> Hapus</button>
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
        {{$kk->links()}}
      </ul>
    </div>
  </div>
@endsection

