@extends('adminlte.master')
@section('title')
    surat kurang mampu
@endsection

@section('content')
<div class="col-md-10 mx-auto">
    <form role="form" action="{{route(('suratusahaupdate'),$suratkm->id)}}" method="POST">
        <div class="card-body">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="pelapor">Pelapor</label>
                <input type="text" name="pelapor" class="form-control" id="pelapor" value="{{$suratkm->pelapor}}">
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" id="keterangan"  value="{{$suratkm->keterangan}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection