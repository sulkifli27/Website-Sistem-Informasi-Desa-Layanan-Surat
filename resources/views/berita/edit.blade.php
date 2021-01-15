@extends('adminlte.master')

@section('title')
    Berita
@endsection

@section('content')
<div class="col-md-10 mx-auto">
<form role="form" action="{{route(('beritaupdate'),$berita->slug)}}" method="POST" enctype="multipart/form-data">
        <div class="card-body">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" class="form-control {{$errors->first('judul') ? "is-invalid": ""}}" id="judul" value="{{$berita->judul}}">
                    <div class="invalid-feedback">
                      {{$errors->first('judul')}}
                    </div>
                  </div>
                <div class="form-group">
                    <label for="judul">Content</label>
                    <textarea class="textarea {{$errors->first('content') ? "is-invalid": ""}}" name="content" placeholder="Content" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$berita->content}}</textarea>
                    <div class="invalid-feedback">
                      {{$errors->first('content')}}
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Gambar Saat Ini</label> <br>
                    <img style="margin-top:9px;" src="{{asset('storage/' . $berita->gambar)}}" width="80px">
                    <br> <br>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="gambar">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
    
@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('adminlte/plugins/summernote/summernote-bs4.min.css')}}">
@endpush

@push('script')
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
  $(function () {
    $('.textarea').summernote()
  })
</script>
<script type="text/javascript">
    $(document).ready(function () {
      bsCustomFileInput.init();
    });
    </script>
@endpush


