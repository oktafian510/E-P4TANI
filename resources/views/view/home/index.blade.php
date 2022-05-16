@extends('view.index')
@section('conten')
   <br><br><br><br>
   <!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex align-items-center">
		<br>
	    <br>
	    <br>
	    <br>
		<div class="container container-fluid">
			<div class="row">
                {{-- <h1>{{ $abouts }}</h1> --}}
                @foreach ($about as $key=>$value)
				<div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
					<h1>{{ $value->company }}</h1>
					<h2>{{ $value->description }}</h2>
					<div class="d-flex">
						<a href="/about" class="btn-get-started scrollto">Pelajari</a>
						<a href="{{ $value->yt }}" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
					</div>
				</div>
				<div class="col-lg-6 order-1 order-lg-2 hero-img">
					<img src="{{ asset('user/assets/img/').'/'.$value->image }}" class="img-fluid animated" alt="">
				</div>
                @endforeach
	    	</div>
		</div>
	</section><!-- End Hero -->
    <!-- ======= Article ======= -->
    <br><br><br><br>
	<div class="Article">
			
	    <section id="featured-services" class="featured-services">
	      <div class="container container-fluid">
	      
	      	<h1>Article</h1>
	     

	        <div class="row">
                @foreach($article as $key=>$value)
                <div class="col-lg-4 col-md-6" style="margin-bottom: 5%">
                    <div class="icon-box">
                    {{-- <div class="icon"><i class="bi bi-laptop"></i></div> --}}
                    <img class="card-img-top" style="height:50%; margin-bottom:2%;" src="{{ asset('user/assets/img/article').'/'.$value->image }}" alt="..." />
                    <h4 class="title"><a href="">{{ $value->title }}</a></h4>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
					<div class="text-center"><a class="btn btn-outline-success btn-sm mt-auto" href="{{ url('article/'.$value->id.'/edit') }}">Read More →</a></div>
                    </div>
                </div>
                @endforeach
	          {{-- <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
	            <div class="icon-box">
	              <div class="icon"><i class="bi bi-card-checklist"></i></div>
	              <h4 class="title"><a href="">Dolor Sitema</a></h4>
	              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
	            </div>
	          </div>
	          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
	            <div class="icon-box">
	              <div class="icon"><i class="bi bi-clipboard-data"></i></div>
	              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
	              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
	            </div>
	          </div>
		           --}}

	        </div>
	      </div>
	    </section><!-- End Featured Services Section -->
	    <!-- ======= Featured Services Section ======= -->
	    {{--<section id="featured-services" class="featured-services">

	      <div class="container container">

	        <div class="row">
	          <div class="col-lg-4 col-md-6">
	            <div class="icon-box">
	              <div class="icon"><i class="bi bi-laptop"></i></div>
	              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
	              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
	            </div>
	          </div>
	          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
	            <div class="icon-box">
	              <div class="icon"><i class="bi bi-card-checklist"></i></div>
	              <h4 class="title"><a href="">Dolor Sitema</a></h4>
	              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
	            </div>
	          </div>
	          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
	            <div class="icon-box">
	              <div class="icon"><i class="bi bi-clipboard-data"></i></div>
	              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
	              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
	            </div>
	          </div>
	        </div>

	      </div>
	    </section><!-- End Featured Services Section --> --}}
	</div>
	<div class="Product" style="background-color: #3cd407;">
			<!-- ======= Featured Services Section ======= -->
		
	    <div class="container px-4 px-lg-5 mt-5">
            <br><br>
            <h1>Product</h1>
            <br><br>

                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach ($product as $key=>$value)
                    <div class="col mb-5">
                        <div class="card h-100 border-gray border-5">
                            <!-- Product image-->
                            <img class="card-img-top img-thumbnail" style="height: 50%;" src="{{ asset('user/assets/img/catalog').'/'.$value->image }}" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $value->nameProduct }}</h5>
                                    <!-- Product price-->
                                    {{ $value->priceRange }}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-success btn-sm mt-auto"  href="{{ url('product/'.$value->id) }}">View options</a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
	    <br>
	    <br>
			
	</div>

@endsection