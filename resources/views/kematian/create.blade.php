@extends('adminlte.master')
@section('title')
    Kematian
@endsection
@section('content')
<div class="col-md-10 mx-auto">
<form role="form" action="{{route('kematianstore')}}" method="POST">
        <div class="card-body">
            @csrf
              <div class="form-group">
                <label for="no_kematian">No Kematian</label>
                <input type="text" name="no_kematian" class="form-control {{$errors->first('no_kematian') ? "is-invalid": ""}}" id="no_kematian" placeholder="No Kematian" value="{{old('no_kematian')}}">
                <div class="invalid-feedback">
                  {{$errors->first('no_kematian')}}
                </div>
              </div>
              <div class="form-group">
                <label for="nik">No NIK</label>
                <input type="text" name="nik" onkeyup="isi_otomatis()" class="form-control {{$errors->first('nik') ? "is-invalid": ""}}" id="nik" placeholder="No NIK" value="{{old('nik')}}">
                <div class="invalid-feedback">
                  {{$errors->first('nik')}}
                </div>
              </div>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" readonly name="nama" class="form-control" id="nama" placeholder="Nama">
              </div>
              <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="text" readonly name="tgl_lahir" class="form-control" id="tgl_lahir" placeholder="Tanggal Lahir">
              </div>
              <div class="form-group">
                <label>Tanggal Wafat</label>
                  <div class="input-group date" id="reservationdate" data-target-input="nearest">
                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                      <input name="tgl_meninggal" id="tanggal_wafat" type="text" oninput="total_umur()" class="form-control datetimepicker-input {{$errors->first('tgl_meninggal') ? "is-invalid": ""}}" data-target="#reservationdate" placeholder="Tahun-Bulan-Tanggal" value="{{old('tgl_meninggal')}}">
                      <div class="invalid-feedback">
                        {{$errors->first('tgl_meninggal')}}
                      </div>
                  </div>
              </div>
              <div class="form-group">
                <label for="umur">Umur</label>
                <input type="text" name="umur" class="form-control {{$errors->first('umur') ? "is-invalid": ""}}" id="umur" placeholder="Umur" value="{{old('umur')}}">
                <div class="invalid-feedback">
                  {{$errors->first('umur')}}
                </div>
              </div>
              <div class="form-group">
                <label for="tempat_meninggal">Tempat Wafat</label>
                <input type="text" name="tempat_meninggal" class="form-control {{$errors->first('tempat_meninggal') ? "is-invalid": ""}}" id="tempat_meninggal" placeholder="Tempat Wafat" value="{{old('tempat_wafat')}}">
                <div class="invalid-feedback">
                  {{$errors->first('tempat_meninggal')}}
                </div>
              </div>
              <div class="form-group">
                <label for="sebab">Penyebab Kematian</label>
                <input type="text" name="sebab" class="form-control {{$errors->first('sebab') ? "is-invalid": ""}}" id="sebab" placeholder="Penyebab Kematian" value="{{old('sebab')}}"> 
                <div class="invalid-feedback">
                  {{$errors->first('sebab')}}
                </div>
              </div>
              <div class="form-group">
                <label for="tempat_makam">Tempat Makam</label>
                <input type="text" name="tempat_makam" class="form-control {{$errors->first('tempat_makam') ? "is-invalid": ""}}" id="tempat_makam" placeholder="Tempat Makam" value="{{old('tempat_makam')}}">
                <div class="invalid-feedback">
                  {{$errors->first('tempat_makam')}}
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
        format: 'YYYY-MM-DD',
    });
    </script>
@endpush

@push('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script >
  function isi_otomatis(){
      var nik = $("#nik").val();
      $.ajax({
          url: 'http://localhost:8000/datapenduduk/'+nik,
          data:"nik="+nik ,
      }).success(function (data) {
          var json = data,
          obj = JSON.parse(JSON.stringify(json));
          $('#nama').val(obj.nama_lengkap);
          $('#tgl_lahir').val(obj.tanggal_lahir);
      });
  }
</script>
@endpush

@push('script')
  <SCript>
    function total_umur(){
      let tgl_lahir  = new Date(document.getElementById("tgl_lahir").value);
      let tgl_wafat  = new Date(document.getElementById("tanggal_wafat").value);
      let umur =  tgl_wafat.getFullYear() - tgl_lahir.getFullYear() ;
      document.getElementById("umur").value  = umur;
      
    }
  </SCript>
@endpush


