@extends('adminlte.master')
@section('title')
    Surat Kurang Mampu
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Surat Keterangan Kurang Mampu</h3>
    </div>
    <div class="card-header">
        <a class="btn btn-primary" href="{{route('suratkmcreate')}}">Buat Surat</a>
    </div>
    <div class="card-header">
      <form action="">
        <div class="row">
              <div class="col-md-6">
                <input value="{{Request::get('keyword')}}" name="keyword" class="form-control"type="text" placeholder="Masukan NIK untuk pencarian.....">
              </div>
              <div class="col-md-4 ml-4 ">
                <input {{Request::get('status') == 'Approve' ? 'checked' : ''}} class="form-check-input mt-3" type="radio" name="status" value="Approve" id="Approve">
                  <label class="ml-1 " for="Approve">Approve</label>
                <input {{Request::get('status') == 'Cancel' ? 'checked' : ''}} class="form-check-input ml-4 mt-3 " type="radio" name="status" value="Cancel" id="Cancel">
                  <label style="margin-top:10px" class="ml-5 " for="Cancel">Cancel</label>
                <button  type="submit" class="btn btn-primary ml-4 mb-1 "> <i class="fas fa-search"></i> Cari</button> 
              </div>
        </div>
      </form>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="table-product" class="table table-bordered table-hover ">
        <thead class="table-secondary">                  
          <tr>
            <th>No Surat</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Pelapor</th>
            <th>Status</th>
            <th>Pembuat surat</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($suratkm as $surat )
          <tr>
          <td>@if($surat->status == "Approve") {{$surat->no_surat}}-KM/TB/B/{{date('Y',strtotime($surat->created_at))}} @endif </td>
          <td>{{$surat->nik}}</td>
          <td>{{$surat->nama}}</td>
          <td>{{$surat->pelapor}}</td>
          <td>
            @if($surat->status == "Approve")
            <span class="badge badge-success">{{$surat->status}}
            @else
            <span class="badge bg-danger text-white">{{$surat->status}}</span>
            </span>
            @endif
          </td>
          <td>
            @if ($surat->status == "Approve")
              {{$surat->user->level}}
            @else
            {{$surat->nama}}
            @endif
          </td>
          <td>
          @if ($surat->status == "Approve")
          <a  href="{{route('suratkmedit',$surat->id)}}"><button type="submit"  class="btn btn-info"><i class="fas fa-edit"></i> Edit</button> </a>
          @endif
          <a  href="{{route('suratkmshow',$surat->id)}}"><button type="submit"  class="btn btn-success"><i class="fas fa-eye"></i> Detail</button> </a>
          @if ($surat->status == "Cancel")
          <form  action="{{route(('suratkmampuupdate'),$surat->id)}}" method="POST" class="form-check-inline">
            @csrf
            @method('PUT')
            <button onclick="return confirm('Yakin Approve Surat Ini?')" class="btn btn-primary" type="submit "><i class="fas fa-cancel"></i> Approve</button>
          </form>
          @endif 
          @if ($surat->status == "Approve")
          <a  href="{{route('cetaksurat',$surat->id)}}"><button type="submit"  class="btn btn-primary"><i class="fas fa-print"></i>  Cetak</button> </a>
          @endif
          </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
      <ul class="pagination pagination-sm m-0 float-right">
        {{$suratkm->links()}}
      </ul>
    </div>
  </div>
  
@endsection

