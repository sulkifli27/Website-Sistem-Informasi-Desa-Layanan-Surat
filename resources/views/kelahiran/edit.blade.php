@extends('adminlte.master')
@section('title')
    Kelahiran
@endsection

@section('content')
<div class="col-md-10 mx-auto">
<form role="form" action="{{route(('kelahiranupdate'),$kelahiran->no_kelahiran)}}" method="POST">
        <div class="card-body">
            @csrf
            @method('PUT')
              <div class="form-group">
                <label for="no_kelahiran">Nomor Kelahiran</label>
                <input type="text" name="no_kelahiran" class="form-control {{$errors->first('no_kelahiran') ? "is-invalid": ""}}" readonly id="no_kelahiran" value="{{$kelahiran->no_kelahiran}}">
                <div class="invalid-feedback">
                  {{$errors->first('no_kelahiran')}}
                </div>
              </div>
              <div class="form-group">
                <label for="nama_bayi">Nama Bayi</label>
                <input type="text" name="nama_bayi" class="form-control  {{$errors->first('nama_bayi') ? "is-invalid": ""}}" id="nama_bayi" value="{{$kelahiran->nama_bayi}}" >
                <div class="invalid-feedback">
                  {{$errors->first('nama_bayi')}}
                </div>
              </div>
              <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control {{$errors->first('tempat_lahir') ? "is-invalid": ""}}" id="tempat_lahir" value="{{$kelahiran->tempat_lahir}}">
                <div class="invalid-feedback">
                  {{$errors->first('tempat_lahir')}}
                </div>
              </div>
              <div class="form-group">
                <label>Tanggal lahir</label>
                  <div class="input-group date" id="reservationdate" data-target-input="nearest">
                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                      <input name="tgl_lahir" type="text" class="form-control datetimepicker-input {{$errors->first('tgl_lahir') ? "is-invalid": ""}}" data-target="#reservationdate" value="{{date('d-m-Y',strtotime($kelahiran->tanggal_lahir))}}">
                      <div class="invalid-feedback">
                        {{$errors->first('tgl_lahir')}}
                      </div>
                    </div>
              </div>
              <div class="form-group">
                <label for="berat">Berat Badan</label>
                <input type="text" name="berat" class="form-control {{$errors->first('berat') ? "is-invalid": ""}} " id="berat" value="{{$kelahiran->berat}}">
                <div class="invalid-feedback">
                  {{$errors->first('berat')}}
                </div>
              </div>
              <label for="level">Jenis Kelamin</label>
              <div class="form-group">
                <div class="form-check form-check-inline">
                  <input  class="form-check-input" type="radio" name="jenis_kelamin" value="laki" {{$kelahiran->jenis_kelamin == "laki" ? "checked" : ""}} >
                  <label class="form-check-label">Laki-Laki</label>
               </div>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan"  {{$kelahiran->jenis_kelamin == "perempuan" ? "checked" : ""}}>
                  <label class="form-check-label {{$errors->first('jenis_kelamin') ? "is-invalid": ""}}">Perempuan</label>
                  <div class="invalid-feedback">
                    &emsp; {{$errors->first('jenis_kelamin')}}
                   </div>
               </div>
              </div>
              <div class="form-group">
                <label for="nama_ayah">Nama Ayah</label>
                <input type="text" name="nama_ayah" class="form-control {{$errors->first('nama_ayah') ? "is-invalid": ""}} " id="nama_ayah" value="{{$kelahiran->nama_ayah}}">
                <div class="invalid-feedback">
                  {{$errors->first('nama_ayah')}}
                 </div>
              </div>
              <div class="form-group">
                <label for="nama_ibu">Nama Ibu</label>
                <input type="text" name="nama_ibu" class="form-control {{$errors->first('nama_ibu') ? "is-invalid": ""}}" id="nama_ibu" placeholder="Nama Ibu" value="{{$kelahiran->nama_ibu}}">
                <div class="invalid-feedback">
                  {{$errors->first('nama_ibu')}}
                 </div>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control {{$errors->first('alamat') ? "is-invalid": ""}}" id="alamat" placeholder="Alamat" value="{{$kelahiran->alamat}}">
                <div class="invalid-feedback">
                  {{$errors->first('alamat')}}
                 </div>
              </div>
              <div class="form-group">
                <label for="nama_pelapor">Nama Pelapor</label>
                <input type="text" name="nama_pelapor" class="form-control {{$errors->first('nama_pelapor') ? "is-invalid": ""}}" id="nama_pelapor" value="{{$kelahiran->nama_pelapor}}">
                <div class="invalid-feedback">
                  {{$errors->first('nama_pelapor')}}
                 </div>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection

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