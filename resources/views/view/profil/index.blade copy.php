@extends('view.index')
@section('conten')
<br><br>
<br><br>
<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">

      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">{{ auth()->user()->name }}</h5>
            <p class="text-muted mb-1">Full Stack Developer</p>
            <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
            <div class="d-flex justify-content-center mb-2">
              <!-- <button type="button" class="btn btn-outline-primary ms-1">Edit Profile</button> -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editProfile">Edit Profile</button>

              <div class="modal" id="editProfile" tabindex="-1" aria-labelledby="EditProfile" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="EditProfile">Edit Profile</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="row g-3 align-items-center">

                        <div class="col-auto">
                          <label for="Name" class="col-form-label">Name</label>
                        </div>
                        <div class="col-auto">
                          <input type="text" id="Name" class="form-control" aria-describedby="">
                        </div>

                        <div class="col-auto">
                          <label for="Username" class="col-form-label">User Name</label>
                        </div>
                        <div class="col-auto">
                          <input type="text" id="Username" class="form-control" aria-describedby="">
                        </div>


                        <div class="col-auto">
                          <label for="Email" class="col-form-label">Email</label>
                        </div>
                        <div class="col-auto">
                          <input type="Email" id="Email" class="form-control" aria-describedby="">
                        </div>

                        <div class="col-auto">
                          <label for="Address" class="col-form-label">Address</label>
                        </div>
                        <div class="col-auto">
                          <input type="text" id="Address" class="form-control" aria-describedby="">
                        </div>

                        <div class="col-auto">
                          <label for="City" class="col-form-label">City</label>
                        </div>
                        <div class="col-auto">
                          <input type="text" id="City" class="form-control" aria-describedby="">
                        </div>

                        <div class="col-auto">
                          <label for="Province" class="col-form-label">Province</label>
                        </div>
                        <div class="col-auto">
                          <input type="text" id="Province" class="form-control" aria-describedby="">
                        </div>


                        <div class="col-auto">
                          <label for="Gender" class="col-form-label">Gender</label>
                        </div>
                        <div class="col-auto">
                          <input type="text" id="Gender" class="form-control" aria-describedby="">
                        </div>

                        <div class="col-auto">
                          <label for="HP" class="col-form-label">HP</label>
                        </div>
                        <div class="col-auto">
                          <input type="text" id="HP" class="form-control" aria-describedby="">
                        </div>

                        <div class="mb-3">
                          <label for="formFile" class="form-label">Pilih Foto</label>
                          <input class="form-control" type="file" id="formFile">
                        </div>





                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                      <button type="button" class="btn btn-primary">Simpam</button>
                    </div>
                  </div>
                </div>
              </div>

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
                <p class="text-muted mb-0">{{ auth()->user()->name }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">User Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ auth()->user()->username }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ auth()->user()->email }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ auth()->user()->address }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">City</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ auth()->user()->city }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Province</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ auth()->user()->province }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Gender</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ auth()->user()->gender }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">HP</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ auth()->user()->hp }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Status</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ auth()->user()->status }}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

@endsection