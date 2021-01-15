@extends('adminlte.master')
@section('title')
    Penduduk
@endsection
@section('content')
<div class="col-md-10 mx-auto">
<form role="form" action="{{route('pendudukstore')}}" method="POST">
      <div class="card-body">
        @csrf
          <div class="form-group">
            <label for="no_kk">Nomor KK</label>
            <input type="text" name="no_kk" class="form-control {{$errors->first('no_kk') ? "is-invalid": ""}}" id="no_kk" placeholder="No KK" value="{{old('no_kk')}}">
            <div class="invalid-feedback">
              {{$errors->first('no_kk')}}
            </div>
          </div>
          <div class="form-group">
              <label for="nik">Nomor NIK</label>
              <input type="text" name="nik" class="form-control {{$errors->first('nik') ? "is-invalid": ""}}" id="nik" placeholder="No NIK" value="{{old('nik')}}">
              <div class="invalid-feedback">
                {{$errors->first('nik')}}
              </div>
          </div>
          <div class="form-group">
              <label for="nama_lengkap">Nama Lengkap</label>
              <input type="text" name="nama_lengkap" class="form-control {{$errors->first('nama_lengkap') ? "is-invalid": ""}} " id="nama_lengkap" placeholder="Nama Lengkap" value="{{old('nama_lengkap')}}">
              <div class="invalid-feedback">
                {{$errors->first('nama_lengkap')}}
              </div>
            </div>
          <div class="form-group">
              <label for="tempat_lahir">Tempat Lahir</label>
              <input type="text" name="tempat_lahir" class="form-control {{$errors->first('tempat_lahir') ? "is-invalid": ""}} " id="tempat_lahir" placeholder="Tempat Lahir" value="{{old('tempat_lahir')}}" >
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
                  <input name="tanggal_lahir" type="text" class="form-control datetimepicker-input {{$errors->first('tanggal_lahir') ? "is-invalid": ""}} " data-target="#reservationdate" value="{{old('tanggal_lahir')}}">
                  <div class="invalid-feedback">
                    {{$errors->first('tanggal_lahir')}}
                  </div>
              </div>
          </div>
            <label for="level">Jenis Kelamin</label>
            <div class="form-group">
              <div class="form-check form-check-inline">
                <input  class="form-check-input" type="radio" name="jenis_kelamin" value="laki" {{(old('jenis_kelamin') == 'laki') ? 'checked' : ''}}>
                <label class="form-check-label inline-block">Laki-Laki</label>
            </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan" {{(old('jenis_kelamin') == 'perempuan') ? 'checked' : ''}}>
                  <label class="form-check-label {{$errors->first('jenis_kelamin') ? "is-invalid": ""}}">Perempuan</label>
                  <div class="invalid-feedback">
                    &emsp;{{$errors->first('jenis_kelamin')}}
                  </div>
              </div>
            </div>
            <div class="form-group">
              <label>Agama</label>
              <select class="form-control {{$errors->first('agama') ? "is-invalid": ""}}" name="agama">
                <option value="Islam" {{(old('agama') == 'Islam') ? ' selected' : ''}}>Islam</option>
                <option value="Protestan" {{(old('agama') == 'Protestan') ? ' selected' : ''}} >Protestan</option>
                <option value="Hindu" {{(old('agama') == 'Hindu') ? ' selected' : ''}}>Hindu</option>
                <option value="Katolik" {{(old('agama') == 'Katolik') ? ' selected' : ''}}>Katolik</option>
                <option value="Buddha" {{(old('agama') == 'Buddha') ? ' selected' : ''}}>Buddha</option>
                <option value="Khonghucu" {{(old('agama') == 'Khonghucu') ? ' selected' : ''}}>Khonghucu</option>
              </select> 
              <div class="invalid-feedback">
                {{$errors->first('agama')}}
              </div>
            </div>
            <div class="form-group">
              <label for="pendidikan">Pendidikan</label>
              <input type="text" name="pendidikan" class="form-control {{$errors->first('pendidikan') ? "is-invalid": ""}}" id="pendidikan" placeholder="Pendidikan" value="{{old('pendidikan')}}">
              <div class="invalid-feedback">
                {{$errors->first('pendidikan')}}
              </div>
            </div>
            <div class="form-group">
              <label for="pekerjaan">Pekerjaan</label>
              <input type="text" name="pekerjaan" class="form-control {{$errors->first('pekerjaan') ? "is-invalid": ""}}" id="pekerjaan" placeholder="Pekerjaan" value="{{old('pekerjaan')}}">
              <div class="invalid-feedback">
                {{$errors->first('pekerjaan')}}
              </div>
            </div>
            <div class="form-group">
              <label for="status">Status</label>
              <input type="text" name="status" class="form-control {{$errors->first('status') ? "is-invalid": ""}}" id="status" placeholder="Status" value="{{old('status')}}">
              <div class="invalid-feedback">
                {{$errors->first('status')}}
              </div>
            </div>
            <div class="form-group">
              <label for="status_keluarga">Status Keluarga</label>
              <input type="text" name="status_keluarga" class="form-control {{$errors->first('status_keluarga') ? "is-invalid": ""}}" id="status_keluarga" placeholder="Status Keluarga" value="{{old('status_keluarga')}}">
              <div class="invalid-feedback">
                {{$errors->first('status_keluarga')}}
              </div>
            </div>
            <div class="form-group">
              <label for="golongan_darah">Golongan Darah</label>
              <input type="text" name="golongan_darah" class="form-control {{$errors->first('golongan_darah') ? "is-invalid": ""}}" id="golongan_darah" placeholder="Golongan Darah" value="{{old('golongan_darah')}}">
              <div class="invalid-feedback">
                {{$errors->first('golongan_darah')}}
              </div>
            </div>
            <div class="form-group">
              <label for="kewarganegaraan">Kewarganegaraan</label>
              <input type="text" name="kewarganegaraan" class="form-control {{$errors->first('kewarganegaraan') ? "is-invalid": ""}}" id="kewarganegaraan" placeholder="Kewarganegaraan" value="{{old('kewarganegaraan')}}">
              <div class="invalid-feedback">
                {{$errors->first('kewarganegaraan')}}
              </div>
            </div>
            <div class="form-group">
              <label for="nama_ayah">Nama Ayah</label>
              <input type="text" name="nama_ayah" class="form-control {{$errors->first('nama_ayah') ? "is-invalid": ""}}" id="nama_ayah" placeholder="Nama Ayah" value="{{old('nama_ayah')}}">
              <div class="invalid-feedback">
                {{$errors->first('nama_ayah')}}
              </div>
            </div>
            <div class="form-group">
              <label for="nama_ibu">Nama Ibu</label>
              <input type="text" name="nama_ibu" class="form-control {{$errors->first('nama_ibu') ? "is-invalid": ""}}" id="nama_ibu" placeholder="Nama Ibu" value="{{old('nama_ibu')}}">
              <div class="invalid-feedback">
                {{$errors->first('nama_ibu')}}
              </div>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" name="email" class="form-control {{$errors->first('email') ? "is-invalid": ""}}" id="email" placeholder="Email" value="{{old('email')}}">
              <div class="invalid-feedback">
                {{$errors->first('email')}}
              </div>
            </div>
            <div class="form-group">
              <label for="no_hp">No Hp</label>
              <input type="text" name="no_hp" class="form-control  {{$errors->first('no_hp') ? "is-invalid": ""}}" id="no_hp" placeholder="No Hp" value="{{old('no_hp')}}">
              <div class="invalid-feedback">
                {{$errors->first('no_hp')}}
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