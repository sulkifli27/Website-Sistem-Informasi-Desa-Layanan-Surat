@extends('adminlte.master')
@section('title')
    Kematian
@endsection
@section('content')
<div class="col-md-10 mx-auto">
<form role="form" action="{{route(('kematianupdate'),$kematian->no_kematian)}}" method="POST">
        <div class="card-body">
            @csrf
            @method('PUT')
              <div class="form-group">
                <label for="no_kematian">No Kematian</label>
                <input type="text" name="no_kematian" class="form-control {{$errors->first('no_kematian') ? "is-invalid": ""}}" id="no_kematian" readonly value="{{$kematian->no_kematian}}">
              <div class="invalid-feedback">
                {{$errors->first('no_kematian')}}
              </div>  
            </div>
              <div class="form-group">
                <label for="nik">No NIK</label>
                <input type="text" name="nik" class="form-control {{$errors->first('nik') ? "is-invalid": ""}}" id="nik" placeholder="No NIK" readonly value="{{$kematian->nik}}">
                <div class="invalid-feedback">
                  {{$errors->first('nik')}}
                </div>
              </div>
              <div class="form-group">
                <label>Tanggal Wafat</label>
                  <div class="input-group date" id="reservationdate" data-target-input="nearest">
                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                      <input name="tgl_meninggal" type="text" class="form-control datetimepicker-input {{$errors->first('tgl_meninggal') ? "is-invalid": ""}}" data-target="#reservationdate" readonly value="{{date('d-m-Y',strtotime($kematian->tgl_meninggal))}}">
                      <div class="invalid-feedback">
                        {{$errors->first('tgl_meninggal')}}
                      </div>
                    </div>
              </div>
              <div class="form-group">
                <label for="tempat_meninggal">Tempat Wafat</label>
                <input type="text" name="tempat_meninggal" class="form-control {{$errors->first('tempat_meninggal') ? "is-invalid": ""}}" id="tempat_meninggal" readonly value="{{$kematian->tempat_meninggal}}">
                <div class="invalid-feedback">
                  {{$errors->first('tempat_meninggal')}}
                </div>
              </div>
              <div class="form-group">
                <label for="umur">Umur</label>
                <input type="text" name="umur" class="form-control {{$errors->first('umur') ? "is-invalid": ""}}" id="umur"  readonly value="{{$kematian->umur}}">
                <div class="invalid-feedback">
                  {{$errors->first('umur')}}
                </div>
              </div>
              <div class="form-group">
                <label for="sebab">Penyebab Kematian</label>
                <input type="text" name="sebab" class="form-control {{$errors->first('sebab') ? "is-invalid": ""}}" id="sebab"  value="{{$kematian->sebab}}">
                <div class="invalid-feedback">
                  {{$errors->first('sebab')}}
                </div>
              </div>
              <div class="form-group">
                <label for="tempat_makam">Tempat Makam</label>
                <input type="text" name="tempat_makam" class="form-control {{$errors->first('tempat_makam') ? "is-invalid": ""}}" id="tempat_makam"  value="{{$kematian->tempat_makam}}">
                <div class="invalid-feedback">
                  {{$errors->first('tempat_makam')}}
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection

