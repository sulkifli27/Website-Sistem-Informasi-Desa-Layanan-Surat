@extends('adminlte.master')
@section('title')
    Kepindahan
@endsection
@section('content')
<div class="col-md-10 mx-auto">
<form role="form" action="{{route('kepindahanstore')}}" method="POST">
        <div class="card-body">
            @csrf
              <div class="form-group">
                <label for="no_pindah">No Pindah</label>
                <input type="text" name="no_pindah" class="form-control {{$errors->first('no_pindah') ? "is-invalid": ""}}" id="no_pindah" placeholder="No Pindah" value="{{old('no_pindah')}}">
                <div class="invalid-feedback">
                  {{$errors->first('no_pindah')}}
                </div>
              </div>
              <div class="form-group">
                <label for="nik">No NIK</label>
                <input type="text" name="nik" class="form-control {{$errors->first('nik') ? "is-invalid": ""}}" id="nik" placeholder="No NIK"  value="{{old('nik')}}">
                <div class="invalid-feedback">
                  {{$errors->first('nik')}}
                </div>
              </div>
              <div class="form-group">
                <label>Tanggal Pindah</label>
                  <div class="input-group date" id="reservationdate" data-target-input="nearest">
                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                      <input name="tanggal_pindah" type="text" class="form-control datetimepicker-input  {{$errors->first('tanggal_pindah') ? "is-invalid": ""}} " data-target="#reservationdate"  value="{{old('tanggal_pindah')}}">
                      <div class="invalid-feedback">
                        {{$errors->first('tanggal_pindah')}}
                      </div>
                    </div>
              </div>
              <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" name="keterangan" class="form-control {{$errors->first('keterangan') ? "is-invalid": ""}}" id="keterangan" placeholder="Keterangan" value="{{old('keterangan')}}">
                <div class="invalid-feedback">
                  {{$errors->first('keterangan')}}
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