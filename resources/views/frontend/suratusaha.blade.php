@extends('constra_template.master')

@section('title')
    Surat Kurang Mampu
@endsection

@section('content')
<div id="banner-area" class="banner-area" style="background-image:url({{asset('constra/images/banner/satu.jpg')}})">
    <div class="banner-text">
       <div class="container">
          <div class="row">
             <div class="col-xs-12">
                <div class="banner-heading">
                   <h1 class="banner-title">Surat</h1>
                   <ol class="breadcrumb">
                      <li></li>
                   </ol>
                </div>
             </div><!-- Col end -->
          </div><!-- Row end -->
       </div><!-- Container end -->
    </div><!-- Banner text end -->
 </div><!-- Banner area end --> 
<section id="main-container" class="main-container test">
    <div class="container">
<div class="row">
<div class="col-md-8 ">
    <h3 style="margin-top:-40px;" class="column-title text-center">Input Data Anda</h3>
    @if(session('status'))
    <div class="alert alert-success">
    {{session('status')}}
    </div>
    @endif
<form style="margin-top:40px"  action="{{route('suratusahasimpan')}}" method="POST" role="form">
    @csrf
        <div class="error-container"></div>
        <div style="margin-top:-20px;" class="row">
            <div class="col-md-12">
                <div class="form-group {{$errors->has('no_kk') ?  ' has-error  ': ''}}">
                    <label for="no_kk">Nomor KK</label>
                    <input type="text" name="no_kk" onkeyup="isi_sendiri()" class="form-control" id="no_kk" value="{{old('no_kk')}}"  >
                    @if ($errors->has('no_kk'))
                    <span class="help-block">{{$errors->first('no_kk')}}</span>
                    @endif
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group {{$errors->has('nik') ?  ' has-error  ': ''}}">
                    <label for="nik">Nomor NIK</label>
                    <input type="text" name="nik" onkeyup="isi_otomatis()"  class="form-control" id="nik" value="{{old('nik')}}" >
                    @if ($errors->has('nik'))
                    <span class="help-block">{{$errors->first('nik')}}</span>
                    @endif
                </div>      
                <div class="form-group {{$errors->has('jenis_usaha') ?  ' has-error  ': ''}}">
                    <label for="jenis_usaha">Jenis Usaha</label>
                    <input type="text" name="jenis_usaha" class="form-control" id="jenis_usaha" value="{{old('jenis_usaha')}}" >
                    @if ($errors->has('jenis_usaha'))
                    <span class="help-block">{{$errors->first('jenis_usaha')}}</span>
                    @endif
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" readonly name="nama" class="form-control" id="nama" >
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="agama">Agama</label>
            <input type="text" readonly name="agama" class="form-control" id="agama" >
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <input type="text" readonly name="jenis_kelamin" class="form-control" id="jenis_kelamin" >
        </div>
        <div class="form-group">
            <label for="tempat_lahir">Tempat lahir</label>
            <input type="text" readonly name="tempat_lahir" class="form-control" id="tempat_lahir"  >
        </div>
        <div class="form-group">
            <label for="tgl_lahir">Tanggal lahir</label>
            <input type="text" readonly name="tgl_lahir" class="form-control" id="tgl_lahir" >
        </div>
        <div class="form-group">
            <label for="pekerjaan">Pekerjaan</label>
            <input type="text" readonly name="pekerjaan" class="form-control" id="pekerjaan" >
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" readonly name="alamat" class="form-control" id="alamat"  >
        </div>
        <div class="form-group {{$errors->has('captcha') ?  ' has-error  ': ''}} ">
            <label for="">Captcha</label>
            <div class="captcha">
                <span>{!! captcha_img() !!}</span>
                <button type="button" class="btn btn-success btn-refresh"> <i class="fa fa-refresh" ></i></button>
            </div>
                <input style="margin-top: 10px" id="captcha" type="text" class="form-control " placeholder="Enter Captcha" name="captcha">
                @if ($errors->has('captcha'))
                <span class="help-block">{{$errors->first('captcha')}}</span>
                @endif
        </div>
        <div class="text-right"><br>
            <button class="btn btn-primary solid blank" type="submit">Buat Surat</button>
        </div>
    </form>
</div>
</div>
</div>
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
            $('#agama').val(obj.agama);
            $('#jenis_kelamin').val(obj.jenis_kelamin);
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

<script type="text/javascript">
    $(".btn-refresh").click(function(){
      $.ajax({
         type:'GET',
         url:'/refresh_captcha',
         success:function(data){
            $(".captcha span").html(data.captcha);
         }
      });
    });
</script>
@endpush