{{-- @extends('backEnd.layouts.master') --}}
@extends('admin.index')
@section('conten')

<!-- Main content -->
<section class="content">
  @foreach ($datas as $key=>$value)
    <!-- Default box -->
    <div class="card">
      <div class="card-body row">
        <div class="col-5 text-center d-flex align-items-center justify-content-center">
          <img style="width: 100%" src="{{ asset('storage/'.$value->image) }}" alt="">
        </div>
        <div class="col-7">
          <div class="form-group">
            <h1 for="inputName">{{ $value->company }}</h1>
          </div>
          <p>
            {{ $value->description }}
          </p>
          <div class="form-group">
            <label for="inputEmail">E-Mail : <a href="{{ $value->email }}">{{ $value->email }}</a></label>
          </div>
          <div class="form-group">
            <label for="inputEmail">Facebook : <a href="{{ $value->fb }}">{{ $value->fb }}</a></label>
          </div>
          <div class="form-group">
            <label for="inputEmail">Handphone : <a href="{{ $value->hp }}">{{ $value->hp }}</a></label>
          </div>
          <div class="form-group">
            <label for="inputEmail">Instagram : <a href="{{ $value->ig }}">{{ $value->ig }}</a></label>
          </div>
          <div class="form-group">
            <label for="inputEmail">Youtube : <a href="{{ $value->yt }}">{{ $value->yt }}</a></label>
          </div>
          
          
          <div class="form-group">
            <form action="{{ url('adminAbout/'.$value->id) }}" method="POST">
              @csrf
              <a class="btn btn-success" href="{{ url('adminAbout/'.$value->id.'/edit') }}"><i class="fas fa-edit"> Update</i></a>
              <input type="hidden" name="_method" value="DELETE">
              {{-- <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> </button> --}}
            </form>
          </div>
        </div>
      </div>
    </div>
  @endforeach
</section>
  

        

@endsection