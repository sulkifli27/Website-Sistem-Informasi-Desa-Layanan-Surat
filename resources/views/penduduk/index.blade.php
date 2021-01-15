@extends('adminlte.master')
@section('title')
    Data Penduduk
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Penduduk</h3>
    </div>
    <div class="card-header">
        <a class="btn btn-primary" href="{{route('pendudukcreate')}}">Tambah Data</a>
    </div>
    <div class="card-header">
      <form action="">
        <div class="row mt-1">
        <div class="col-md-7">
          <input value="{{Request::get('keyword')}}" name="keyword" class="form-control"type="text" placeholder="Masukan NIK atau KK untuk pencarian....."/>
        </div>
        <div class="col-md-4 ml-4 ">
          <input {{Request::get('status') == 'nik' ? 'checked' : ''}} class="form-check-input mt-3" type="radio" name="status" value="nik" id="nik">
            <label class="ml-1 " for="nik">NIK</label>
          <input {{Request::get('status') == 'kk' ? 'checked' : ''}} class="form-check-input ml-4 mt-3 " type="radio" name="status" value="kk" id="kk">
            <label style="margin-top:10px" class="ml-5 " for="kk">KK</label>
          <button  type="submit" class="btn btn-primary ml-3 mb-1 "> <i class="fas fa-search"></i> Cari</button> 
        </div>
        </div>
      </div>
  </form>
</div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered table-hover ">
        <thead class="table-secondary">                  
          <tr>
            <th>Nomor KK</th>
            <th>NIK</th>
            <th>Nama Lengkap</th>
            <th>Tempat Lahir</th>
            <th>Tanggal lahir</th> 
            <th>Action</th>
           
          </tr>
        </thead>
        <tbody>
        @foreach ($penduduk as $penduduks)
          <tr>
          <td>{{$penduduks->no_kk}}</td>
          <td>{{$penduduks->nik}}</td>
          <td>{{$penduduks->nama_lengkap}}</td>
          <td>{{$penduduks->tempat_lahir}}</td>
          <td>{{date('d-m-Y',strtotime($penduduks->tanggal_lahir))}}</td>
          <td>
            
          <a  href="{{route('pendudukedit',$penduduks->nik)}}"><button type="submit"  class="btn btn-info"><i class="fas fa-edit"></i> Edit</button> </a>
            <a  href="{{route('pendudukshow',$penduduks->nik)}}"><button type="submit"  class="btn btn-success"><i class="fas fa-eye"></i> Detail</button> </a>
            <form  action="{{route('pendudukdelete',$penduduks->nik)}}" method="post" class="form-check-inline">
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
        {{$penduduk->links()}}
      </ul>
    </div>
  </div>
@endsection

