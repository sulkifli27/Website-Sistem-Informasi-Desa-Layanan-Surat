@extends('adminlte.master')
@section('title')
    Data KK
@endsection

@section('content')
<div class="col-md-10 mx-auto">
<form role="form" action="{{route(('kkupdate'),$kk->no_kk)}}" method="POST" >
    <div class="card-body">
      @csrf
      @method('PUT')
        <div class="form-group">
          <label for="no_kk">Nomor KK</label> 
        <input type="text" readonly name="no_kk" class="form-control {{$errors->first('no_kk') ? "is-invalid": ""}}" id="no_kk"  value="{{$kk->no_kk}}">
        <div class="invalid-feedback">
          {{$errors->first('no_kk')}}
        </div>
      </div>
        <div class="form-group">
          <label for="dusun">Dusun</label>
          <input type="text" name="dusun" class="form-control {{$errors->first('dusun') ? "is-invalid": ""}}" id="dusun" value="{{$kk->dusun}}">
          <div class="invalid-feedback">
            {{$errors->first('dusun')}}
          </div>
        </div>
        <div class="form-group">
          <label for="rt">RT</label>
          <input type="text" name="rt" class="form-control {{$errors->first('rt') ? "is-invalid": ""}}" id="rt" value="{{$kk->rt}} ">
          <div class="invalid-feedback">
            {{$errors->first('rw')}}
          </div>
        </div>
        <div class="form-group">
          <label for="rw">RW</label>
          <input type="text" name="rw" class="form-control {{$errors->first('rw') ? "is-invalid": ""}}" id="rw" value="{{$kk->rw}}">
          <div class="invalid-feedback">
            {{$errors->first('rw')}}
          </div>
        </div>
        <div class="form-group">
          <label for="desa">Desa</label>
          <input type="text" name="desa" class="form-control {{$errors->first('desa') ? "is-invalid": ""}}" id="desa" value="{{$kk->desa}} ">
          <div class="invalid-feedback">
            {{$errors->first('desa')}}
          </div>
        </div>
        <div class="form-group">
          <label for="kecamatan">Kecamatan</label>
          <input type="text" name="kecamatan" class="form-control {{$errors->first('kecamatan') ? "is-invalid": ""}}" id="kecamatan" value="{{$kk->kecamatan}}" >
          <div class="invalid-feedback">
            {{$errors->first('kecamatan')}}
          </div>
        </div>
        <div class="form-group">
          <label for="kabupaten">Kabupaten</label>
          <input type="text" name="kabupaten" class="form-control {{$errors->first('kabupaten') ? "is-invalid": ""}}" id="kabupaten" value="{{$kk->kabupaten}} ">
          <div class="invalid-feedback">
            {{$errors->first('kabupaten')}}
          </div>
        </div>
        <div class="form-group">
          <label for="provinsi">Provinsi</label>
        <input type="text" name="provinsi" class="form-control {{$errors->first('provinsi') ? "is-invalid": ""}}" id="provinsi" value="{{$kk->provinsi}}">
        <div class="invalid-feedback">
          {{$errors->first('provinsi')}}
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>
@endsection
