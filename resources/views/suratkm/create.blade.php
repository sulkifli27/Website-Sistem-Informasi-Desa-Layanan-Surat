@extends('adminlte.master')
@section('title')
    surat kurang mampu
@endsection

@section('content')
<div class="col-md-10 mx-auto">
    <form role="form" action="{{route('suratkmstore')}}" method="POST">
          <div class="card-body">
            @csrf
            <div class="form-group">
                <label for="nik">Nomor NIK</label>
                <input type="text" name="nik" onkeyup="isi_otomatis()"  class="form-control {{$errors->first('nik') ? "is-invalid": ""}}" id="nik" placeholder="No NIK" >
                <div class="invalid-feedback">
                    {{$errors->first('nik')}}
                </div>
            </div>
            <div class="form-group">
                <label for="no_kk">Nomor KK</label>
                <input type="text" readonly name="no_kk" onmousemove="isi_sendiri()" class="form-control" id="no_kk" placeholder="No KK" >
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" readonly name="nama" class="form-control" id="nama" placeholder="Nama" >
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat lahir</label>
                <input type="text" readonly name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir" >
            </div>
            <div class="form-group">
                <label for="tgl_lahir">Tgl lahir</label>
                <input type="text" readonly name="tgl_lahir" class="form-control" id="tgl_lahir" placeholder="Tanggal_lahir" >
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" readonly name="alamat" class="form-control" id="alamat" placeholder="Alamat" >
            </div>
            <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                <input type="text" readonly name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Pekerjaan" >
            </div>
            <div class="form-group">
                <label for="nama_ayah">Nama Ayah</label>
                <input type="text" readonly name="nama_ayah" class="form-control" id="nama_ayah" placeholder="Nama Ayah" >
            </div>
            <div class="form-group">
                <label for="nama_ibu">Nama Ibu</label>
                <input type="text" readonly name="nama_ibu" class="form-control" id="nama_ibu" placeholder="Nama Ibu" >
            </div>
            <div class="form-group">
                <label for="pelapor">Pelapor</label>
                <input type="text" name="pelapor" class="form-control {{$errors->first('pelapor') ? "is-invalid": ""}} " id="pelapor" placeholder="Pelapor" >
                <div class="invalid-feedback">
                    {{$errors->first('pelapor')}}
                </div>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Keterangan" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          </form>
      </div>
@endsection

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
            $('#no_kk').val(obj.no_kk);
            $('#tempat_lahir').val(obj.tempat_lahir);
            $('#nama').val(obj.nama_lengkap);
            $('#tgl_lahir').val(obj.tanggal_lahir);
            $('#pekerjaan').val(obj.pekerjaan);
            $('#nama_ayah').val(obj.nama_ayah);
            $('#nama_ibu').val(obj.nama_ibu);
        });
    }
</script>
<script >
    function isi_sendiri(){
        var no_kk = $("#no_kk").val();
        $.ajax({
            url: 'http://localhost:8000/datakk/'+no_kk,
            data:"no_kk="+no_kk ,
        }).success(function (data) {
            var json = data,
            obj = JSON.parse(JSON.stringify(json));
            $('#alamat').val(obj.dusun);
        });
    }
  </script>
@endpush