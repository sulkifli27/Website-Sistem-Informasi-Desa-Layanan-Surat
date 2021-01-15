@extends('adminlte.master')

@section('title')
    User
@endsection

@section('content')
<div class="col-md-10 mx-auto">
<form role="form" action="{{route('userstore')}}" method="POST">
      <div class="card-body">
        @csrf
          <div class="form-group">
            <label for="nik">Nomor NIK</label>
            <input type="text" name="nik" class="form-control {{$errors->first('nik') ? "is-invalid": ""}}" id="nik" placeholder="No NIK" value="{{old('nik')}}">
            <div class="invalid-feedback">
              {{$errors->first('nik')}}
            </div>
          </div>
          <label for="level">Level</label>
          <div class="form-group">
            <div class="form-check form-check-inline">
                <input id="level" class="form-check-input" type="radio" name="level" value="Admin" {{(old('level') == 'admin') ? 'checked' : ''}}>
                <label class="form-check-label">Admin</label>
            </div>
            <div class="form-check form-check-inline">
                <input id="level" class="form-check-input" type="radio" name="level" value="User"  {{(old('level') == 'user') ? 'checked' : ''}}>
                <label class="form-check-label">User</label>
            </div>
            <div class="form-check form-check-inline">
                <input id="level" class="form-check-input" type="radio" name="level" value="Operator"  {{(old('level') == 'operator') ? 'checked' : ''}}>
                <label class="form-check-label {{$errors->first('level') ? "is-invalid": ""}}">Operator</label>
                <div class="invalid-feedback">
                 &emsp;{{$errors->first('level')}}
                </div>
              </div>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control {{$errors->first('password') ? "is-invalid": ""}}" id="password" placeholder="Password" value="{{old('password')}}">
            <div class="invalid-feedback">
              {{$errors->first('password')}}
            </div>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
  </div>
@endsection

