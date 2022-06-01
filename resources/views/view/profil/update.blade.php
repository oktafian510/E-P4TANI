@extends('view.index')
@section('conten')
<br><br>
<br><br>
<section style="background-color: #eee;">
<form action="{{ url('profilUser/'.auth()->user()->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PATCH">

  <div class="container py-5">
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="{{ asset('storage/'.auth()->user()->image) }}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                <input hidden type="text" name="image1" value="{{ auth()->user()->image }}" id="image1">
                
            <h5 class="my-3">{{ auth()->user()->name }}</h5>
            <p class="text-muted mb-4">{{ auth()->user()->address }}</p>
            <div class="d-flex justify-content-center mb-2">
              <!-- <button type="button" class="btn btn-outline-primary ms-1">Edit Profile</button> -->
                <div class="form-group">
                    <input type="file" class="form-control-file"  name="image"  id="image">
                </div>
              {{-- <a href="{{ url('profilUser/'.auth()->user()->id.'/edit') }}" class="btn btn-primary"  >Edit Profile</a> --}}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Name</p>
              </div>
              <div class="col-sm-9">
                  <input type="text" name="name" id="name" class="form-control" value="{{ auth()->user()->name }}">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">User Name</p>
              </div>
              <div class="col-sm-9">
                <input disabled type="text" class="form-control" value="{{ auth()->user()->username }}">
                <input hidden name="username" id="username" type="text" class="form-control" value="{{ auth()->user()->username }}">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <input disabled  type="text" class="form-control" value="{{ auth()->user()->email }}">
                <input hidden name="email" id="email" type="text" class="form-control" value="{{ auth()->user()->email }}">

              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <input  name="address" id="address" type="text" class="form-control" value="{{ auth()->user()->address }}">

              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">City</p>
              </div>
              <div class="col-sm-9">
                <input  name="city" id="city" type="text" class="form-control" value="{{ auth()->user()->city }}">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Province</p>
              </div>
              <div class="col-sm-9">
                <input  name="province" id="province" type="text" class="form-control" value="{{ auth()->user()->province }}">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Gender</p>
              </div>
              <div class="col-sm-9">
                <input  name="gender" id="gender" type="text" class="form-control" value="{{ auth()->user()->gender }}">

              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">HP</p>
              </div>
              <div class="col-sm-9">
                <input  name="hp" id="hp" type="text" class="form-control" value="{{ auth()->user()->hp }}">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Status</p>
              </div>
              <div class="col-sm-9">
                <input disabled name="dhp" id="dhp" type="text" class="form-control" value="{{ auth()->user()->status }}">
                <input hidden name="status" id="status" type="text" class="form-control" value="{{ auth()->user()->status }}">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-3 mb-md-0">
             <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> SIMPAN</button>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</form>
</section>

@endsection