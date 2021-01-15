@extends('adminlte.master')
@section('title')
    Pendatang
@endsection
@section('content')
<div class="col-md-10 mx-auto">
<form role="form" action="{{route(('pendatangupdate'),$pendatang->no_datang)}}" method="POST">
        <div class="card-body">
            @csrf
            @method('PUT')
              <div class="form-group">
                <label for="no_datang">No Datang</label>
                <input type="text" name="no_datang" class="form-control {{$errors->first('no_datang') ? "is-invalid": ""}}" id="no_datang" readonly value="{{$pendatang->no_datang}}">
              <div class="invalid-feedback">
                {{$errors->first('no_datang')}}
              </div>
            </div>
              <div class="form-group">
                <label for="nik">No NIK</label>
                <input type="text" name="nik" class="form-control {{$errors->first('nik') ? "is-invalid": ""}}" id="nik"  readonly value="{{$pendatang->nik}}">
                <div class="invalid-feedback">
                  {{$errors->first('nik')}}
                </div>
              </div>
              <div class="form-group">
                <label>Tanggal Datang</label>
                  <div class="input-group date" id="reservationdate" data-target-input="nearest">
                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                      <input name="tgl_datang" type="text" class="form-control {{$errors->first('tgl_datang') ? "is-invalid": ""}} datetimepicker-input" data-target="#reservationdate" value="{{date('d-m-Y',strtotime($pendatang->tgl_datang))}}" >
                      <div class="invalid-feedback">
                        {{$errors->first('tgl_datang')}}
                      </div>
                    </div>
              </div>
              <div class="form-group">
                <label for="asal">Asal</label>
                <input type="text" name="asal" class="form-control {{$errors->first('asal') ? "is-invalid": ""}}" id="asal" value="{{$pendatang->asal}}">
                <div class="invalid-feedback">
                  {{$errors->first('asal')}}
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
@endpush

@push('script')
    <script src="{{asset('adminlte/plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script>
    $('#reservationdate').datetimepicker({
        format: 'L',
        format: 'DD-MM-YYYY',
    });
    </script>
@endpush