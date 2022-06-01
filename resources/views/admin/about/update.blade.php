@extends('admin.index')
@section('conten')

<!-- Main content -->
<section class="content">
      <!-- Default box -->
      <form action="{{ url('adminAbout/'.$model->id) }}" method="POST" enctype="multipart/form-data">
      <div class="card">
        <div class="card-body row">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="col-5 text-center d-flex align-items-center justify-content-center">
                    <div class="row">
                        <div class="col-9">
                            <img width="100%"  src="{{ asset('storage/'.$model->image) }}" alt=""> <br>
                        </div>
                        <div class="col-3">
                            <input hidden type="text" name="image1" value="{{ $model->image }}" id="image1">
                            <div class="form-group">
                                <input type="file" class="form-control-file"  name="image"  id="image" >
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                <div class="col-7">
                        <!-- text input -->
                        <div class="form-group">
                            <label for="company">Company Name</label>
                            <input type="text" name="company"  id="company" class="form-control" placeholder="Please insert..." value="{{ $model->company }}">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail </label>
                            <input type="text" name="email"  id="email" class="form-control" placeholder="Please insert..." value="{{ $model->email }}">
                        </div>
                        <div class="form-group">
                            <label for="hp">Handphone </label>
                            <input type="text" name="hp"  id="hp" class="form-control" placeholder="Please insert..." value="{{ $model->hp }}">
                        </div>
                        <div class="form-group">
                            <label for="fb">Facebook </label>
                            <input type="text" name="fb"  id="fb" class="form-control" placeholder="Please insert..." value="{{ $model->fb }}">
                        </div>
                        <div class="form-group">
                            <label for="ig">Instagram </label>
                            <input type="text" name="ig"  id="ig" class="form-control" placeholder="Please insert..." value="{{ $model->ig }}">
                        </div>
                        <div class="form-group">
                            <label for="yt">Youtube </label>
                            <input type="text" name="yt"  id="yt" class="form-control" placeholder="Please insert..." value="{{ $model->yt }}">
                        </div>
                        <!-- textarea -->
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description"  id="description" class="form-control" rows="3" placeholder="Please insert..." >{{ $model->description }}</textarea>
                        </div>
                    <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> SIMPAN</button>

                </div>

            </div>
        </div>

    </form>

  </section>
        


@endsection