@extends('adminlte.master')

@section('title')
    User
@endsection

@section('content')
<div class="col-md-10 mx-auto">
<form role="form" action="{{route(('userupdate'),$user->id)}}" method="POST">
      <div class="card-body">
        @csrf
        @method('PUT')
          <div class="form-group">
          <label for="nik">Nomor NIK</label>
          <input type="text" readonly name="nik" class="form-control" id="nik" value="{{$user->nik}}">
          </div>
          <label for="level">Level</label>
          <div class="form-group">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="level" value="Admin" {{$user->level == "admin" ? "checked" : ""}}>
                <label class="form-check-label">Admin</label>
            </div>
            <div class="form-check form-check-inline">
                <input  class="form-check-input" type="radio" name="level" value="User" {{$user->level == "user" ? "checked" : ""}}>
                <label class="form-check-label">User</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="level" value="Operator" {{$user->level == "operator" ? "checked" : ""}}>
                <label class="form-check-label">Operator</label>
            </div>
          </div>
          <div class="form-group">
          <input type="hidden" name="password" class="form-control" id="password" value="{{$user->password}}">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
  </div>
@endsection

