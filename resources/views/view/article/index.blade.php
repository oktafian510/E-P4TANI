@extends('view.index')
@section('conten')
<!-- Page content-->
<br><br><br><br>
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            @foreach($articlePost as $key=>$value)
           
            <div class="card mb-4 {{ ($hide === "hide") ? 'collapse' : ' ' }}  ">
                <a href="#!"><img class="card-img-top" style="height: 350PX;" src="{{ asset('storage/'.$value->image) }}" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-muted">{{ $value->updated_at }}</div>
                    <h2 class="card-title">{{ $value->title }}</h2>
                    <p class="card-text">{{ $value->description }}</p>
                    <a class="btn btn-success" href="{{ url('article/'.$value->id.'/edit') }}">Read more →</a>
                </div>
            </div>
            @endforeach
            <!-- Nested row for non-featured blog posts-->
            <div class="row">
                {{-- @@ --}}
                @foreach($article as $key=>$value)
                <div class="col-lg-6">
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" style="height:50%;" src="{{ asset('storage/'.$value->image) }}" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">{{ $value->updated_at }}</div>
                            <h2 class="card-title h4">{{ $value->title }}</h2>
                            <p class="card-text">{{ $value->description }}</p>
                            <a class="btn btn-success btn-sm" href="{{ url('article/'.$value->id.'/edit') }}">Read more →</a>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- @@ --}}
            </div>
            <!-- Pagination-->
            <nav aria-label="Pagination">
                <hr class="my-0" />
                <ul class="pagination justify-content-center my-4">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                    <li class="page-item"><a class="page-link" href="#!">2</a></li>
                    <li class="page-item"><a class="page-link" href="#!">3</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                    <li class="page-item"><a class="page-link" href="#!">15</a></li>
                    <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                </ul>
            </nav>
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                        <button class="btn btn-success btn-sm" id="button-search" type="button">Go!</button>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($categorie as $key=>$value)
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    {{-- <li><a href="{{ url('article/'.$value->name.'/edit') }}">{{ $value->name }}</a></li> --}}
                                    <li><a href="{{ url('article/'.$value->name) }}">{{ $value->name }}</a></li>
                                </ul>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Side widget-->
            <div class="card mb-4">
                <div class="card-header">Side Widget</div>
                <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
            </div>
        </div>
    </div>
</div>
@endsection