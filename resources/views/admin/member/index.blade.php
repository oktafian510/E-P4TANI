{{-- @extends('backEnd.layouts.master') --}}
@extends('admin.index')
@section('conten')

<div class="card card-solid">
  <div class="card-body pb-0">
    <div class="row">
      @foreach ($datas as $key=>$value)
        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
          <div class="card bg-light d-flex flex-fill">
            <div class="card-header text-muted border-bottom-0">
              {{ $value->category }}
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col-7">
                  <h2 class="lead"><b>{{ $value->name }}</b></h2>
                  <p class="text-muted text-sm"><b>About: </b> {{ $value->description }}</p>
                  {{-- <ul class="ml-4 mb-0 fa-ul text-muted">
                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                  </ul> --}}
                </div>
                <div class="col-5 text-center">
                  <img src="{{asset('user/assets/img/team').'/'.$value->image}}" alt="user-avatar" class="img-circle img-fluid">
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="text-right">
                {{-- <a href="#" class="btn btn-sm bg-teal">
                  <i class="fas fa-comments"></i>
                </a>
                <a href="#" class="btn btn-sm btn-primary">
                  <i class="fas fa-user"></i> View Profile
                </a> --}}
                <form action="{{ url('adminMember/'.$value->id) }}" method="POST">
                  @csrf
                  <a class="btn btn-primary" href="{{ url('adminMember/'.$value->id.'/edit') }}"><i class="fas fa-edit"></i></a>
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    <nav aria-label="Contacts Page Navigation">
      <a class="btn btn-success" href="{{ url('adminMember/create') }}"><i class="fas fa-plus"></i> Tambah</a>
          <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
          </ul>
    </nav>
  </div>
  <!-- /.card-footer -->
</div>

  

@endsection