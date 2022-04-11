@extends('akun.layout')
@section('formAkun')
<div class="card" style="">
  <div class="card-body register-card-body">
    <p class="login-box-msg">Register a new membership</p>

    <form action="/register" method="POST">
      @csrf
      <div class="input-group mb-3">
        <input  type="text" name="name" class="form-control" placeholder="Full name">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-user"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input type="tel"  name="hp" class="form-control" placeholder="No Handphone">
        <div class="input-group-append">
          <div class="input-group-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16">
              <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z"/>
            </svg>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input  type="text" name="username" class="form-control" placeholder="Username">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input  type="password" name="password" class="form-control" placeholder="Password">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
    
      <div class="row">
        <div class="col-8">
          <div class="icheck-primary">
            
          </div>
        </div>
        <!-- /.col -->
        <div class="col-4">
          {{-- <input type="text" name="_token" value="{{ csrf_token() }}"> --}}
          <button type="submit" class="btn btn-primary btn-block">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


    <a href="/login" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.card -->
@endsection