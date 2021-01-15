@extends('adminlte.master')

@section('title')
    Dashboard
@endsection

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark "><b>DATA DESA TOMPOBULU</b></h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
    <div class="row mt-4">
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-info elevation-1"><i class="fas fa-home"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Kepala Keluarga</span>
            <span class="info-box-number">
             {{$jumlahkk}}
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Penduduk</span>
          <span class="info-box-number">{{$jmlpenduduk}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <!-- fix for small devices only -->
      <div class="clearfix hidden-md-up"></div>

      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-success elevation-1"><i class="fas fa-venus"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Perempuan</span>
          <span class="info-box-number">{{$perempuan}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-mars"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Laki-Laki</span>
          <span class="info-box-number">{{$laki}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon  bg-success elevation-1"><i class="fas fa-user-alt"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">User</span>
          <span class="info-box-number">{{$user}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-newspaper"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Berita</span>
          <span class="info-box-number">{{$berita}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>

      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-mail-bulk"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Surat Keterangan Usaha</span>
          <span class="info-box-number">{{$suratketusaha}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-dark elevation-1"><i class="fas fa-file-alt"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Surat Kurang Mampu</span>
          <span class="info-box-number">{{$suratkm}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
    </div>   
  </div>  
</div>     

</section>
@endsection