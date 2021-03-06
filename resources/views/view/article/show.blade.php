@extends('view.index')
@section('conten')

<br><br><br>


<div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">{{ $article->title }}</h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">Posted on {{ $article->created_at }}</div>
                        <!-- Post categories-->
                        <a class="badge bg-secondary text-decoration-none link-light" href="#!">{{ $article->category }}</a>
                        <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a>
                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4"><img class="img-fluid rounded" style="height: 50%" src="{{ asset('storage/'.$article->image) }}" alt="..." /></figure>
                    <!-- Post content-->
                    <section class="mb-5">
                        <p>
                            {{ $article->description }}
                        </p>
                    </section>
                </article>
                <!-- Comments section-->
                <section class="mb-5">
                    <div class="card bg-light">
                        <div class="card-body">
                            <!-- Comment form-->
                            @auth
                            <form action="{{ url('articleComments') }}" method="POST" class="mb-4">
                                @csrf
                                <textarea name="comments" id="comments" class="form-control" rows="3" placeholder="Write Your Comment ..." required></textarea>
                                <input type="text" hidden name="idArticle" id="idArticle" value="{{ $article->id }}"> 
                                <input type="text" hidden name="idUser" id="idUser" value="{{ auth()->user()->id  }}"> 
                                <input type="text" hidden name="name" id="name" value="{{ auth()->user()->name  }}"> 
                                <input type="text" hidden name="image" id="image" value="{{ auth()->user()->image  }}"> 
                                <br><button type="submit" class="btn btn-block btn-success" >Send</button>
                            </form>
                            @else
                                <br> 
                                <form action="{{ url('login') }}" method="GET">
                                @csrf
                                <textarea name="comments" id="comments" class="form-control" rows="3" placeholder="Write Your Comment ..." required></textarea>
                                <br><button type="submit" class="btn btn-block btn-success" >Send</button> 
                                </form>
                            @endauth
                            <!-- Comment with nested comments-->
                            {{-- <div class="d-flex mb-4">
                                <!-- Parent comment-->
                                <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                <div class="ms-3">
                                    <div class="fw-bold">Commenter Name</div>
                                    If you're going to lead a space frontier, it has to be government; it'll never be private enterprise. Because the space frontier is dangerous, and it's expensive, and it has unquantified risks.
                                    <!-- Child comment 1-->
                                    <div class="d-flex mt-4">
                                        <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                        <div class="ms-3">
                                            <div class="fw-bold">Commenter Name</div>
                                            And under those conditions, you cannot establish a capital-market evaluation of that enterprise. You can't get investors.
                                        </div>
                                    </div>
                                    <!-- Child comment 2-->
                                    <div class="d-flex mt-4">
                                        <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                        <div class="ms-3">
                                            <div class="fw-bold">Commenter Name</div>
                                            When you put money directly to a problem, it makes a good headline.
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- Single comment-->
                            <br>
                            @foreach($comments as $key=>$value)
                            <div class="d-flex">
                                <div class="flex-shrink-0"><img class="rounded-circle" style="width:50px ;" src="{{ asset('storage/'.$value->image) }}" alt="..." /></div>
                                <div class="ms-3">
                                    <div class="fw-bold">{{ $value->name }}</div>
                                     {{ $value->comments }}
                                </div>
                            </div><br>
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Search widget-->
                {{-- <div class="card mb-4">
                    <div class="card-header">Search</div>
                    <div class="card-body">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                            <button class="btn btn-success" id="button-search" type="button">Go!</button>
                        </div>
                    </div>
                </div> --}}
                <!-- Categories widget-->
                <div class="card mb-4">
                    <div class="card-header">Search</div>
                    <div class="card-body">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                            <button class="btn btn-success" id="button-search" type="button">Go!</button>
                        </div>
                    </div>
                </div>
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