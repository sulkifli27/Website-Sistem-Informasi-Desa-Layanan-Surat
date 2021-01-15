@extends('adminlte.master')
@section('title')
    Data User
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data User</h3>
    </div>
    <div class="card-header">
        <a class="btn btn-primary" href="{{route('usercreate')}}">Tambah Data</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered table-hover ">
        <thead class="table-secondary">                  
          <tr>
            <th>Nomor NIK</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No Hp</th>
            <th>Level</th>
            <th>Action</th>
            
          </tr>
        </thead>
        <tbody>
        @foreach ($user as $users)
          <tr>
          <td>{{$users->nik}}</td>
          <td>{{$users->penduduk->nama_lengkap}}</td>
          <td>{{$users->penduduk->email}}</td>
          <td>{{$users->penduduk->no_hp}}</td>
          <td>{{$users->level}}</td>
          <td>
          <a  href="{{route('useredit',$users->id)}}"><button type="submit"  class="btn btn-info"><i class="fas fa-edit"></i> Edit</button> </a>
            <form  action="{{route('userdelete',$users->id)}}" method="post" style= "display: inline" class="form-check-inline">
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
  </div>
@endsection

