{{-- @extends('backEnd.layouts.master') --}}
@extends('admin.index')
@section('conten')
<div class="card-body">
    <div class="card-body pt-0">
        @foreach ($datas as $key=>$value)
            <div class="row">
              {{-- <div class="col-1 text-center">
                <h5 style="padding-top: 2%">{{ $key+1 }}</h5>
              </div> --}}
              <div class="col-3 text-center">
                {{-- <img style="padding-top: 0.5%" src="{{ asset('admin/dist/img/user1-128x128.jpg') }}"  class=" img-fluid"> --}}
                <img class="card-img-top" style="width:100%" src="{{ asset('user/assets/img/article').'/'.$value->image }}" alt="..." />
              </div>
              
              <div class="col-7">
                <h3 class="">{{ $value->title }}</h3>
                <h6><b>Writer :</b> {{ $value->writer }}</h6>
                <h6><b>Category :</b> {{ $value->category }}</h6>
                <p class="text-muted text-sm">{{ $value->description }}</p>
                
              </div>
              <div class="col-2 text-center">
                <form action="{{ url('adminArticle/'.$value->id) }}" method="POST">
                  @csrf
                  <a class="btn btn-primary" href="{{ url('adminArticle/'.$value->id.'/edit') }}"><i class="fas fa-edit"></i></a>
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
              </div>
          </div>
        @endforeach
    </div>


</div>

<div class="card-footer clearfix align-centre">
  <a class="btn btn-success" href="{{ url('adminArticle/create') }}"><i class="fas fa-plus"></i> Tambah</a>
  <ul class="pagination pagination-sm m-0 float-right">
    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
  </ul>
</div>


        

@endsection