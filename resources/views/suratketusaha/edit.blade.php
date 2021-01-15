@extends('adminlte.master')
@section('title')
    surat keterangan usaha
@endsection
@section('content')
<div class="col-md-10 mx-auto">
    <form role="form" action="{{route(('suratusahaupdate'),$suratusaha->id)}}" method="POST">
        <div class="card-body">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="pelapor">Pelapor</label>
                <input type="text" name="pelapor" class="form-control" id="pelapor" value="{{$suratusaha->pelapor}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection