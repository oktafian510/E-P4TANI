@extends('view.index')
@section('conten')

<br>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('') }}admin/plugins/fontawesome-free/css/all.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('') }}admin/dist/css/adminlte.min.css">
        <!-- Main content -->
        <section class="content">
          <!-- Default box -->
          <div class="card card-solid">
            <div class="card-body">
              <header class="mb-4">
                <!-- Post title-->
                <h1 class="fw-bolder mb-1"></h1>
                <!-- Post meta content-->
                <div class="text-muted fst-italic mb-2">Posted on {{ $product->created_at }}</div>
                <!-- Post categories-->
                {{-- <a class="badge bg-secondary text-decoration-none link-light" href="#!">isicat</a>
                <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a> --}}
                
            </header>
              <div class="row">
                
                <div class="col-12 col-sm-6">
                  <div class="col-12" style="height: 525px;">
                    <img src="{{ asset('storage/'.$product->image) }}" class="product-image" alt="Product Image">
                  </div>
                  <div class="col-12 product-image-thumbs">
                    <div class="product-image-thumb active"><img src="{{ asset('storage/'.$product->image) }}" alt="Product Image"></div>
                    @foreach($product_image as $key=>$value)
                    <div class="product-image-thumb" ><img src="{{ asset('storage/'.$value->image) }}" alt="Product Image"></div>
                    @endforeach
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <h3 class="my-3">{{ $product->nameProduct }}</h3>
                  <p>{{ $product->description }}</p>
    
                  <hr>

    
                  <h4 class="mt-3">Size <small>Please select one</small></h4>
                  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    

                    <div class="btn-group">
                    @foreach($stock as $key=>$value)
                      <a href="{{ url('product/'.$value->code.','.$value->size.'/edit') }}" class="btn btn-primary {{ ($value->size === $size) ? 'active' : ' ' }}" aria-current="page">{{ $value->size }}<br> <br>
                        {{ $value->stock }}</a>
                    @endforeach
                    </div>
                  </div>
    
                  <div class="bg-gray py-2 px-3 mt-4">
                    <h2 class="mb-0">
                      Rp {{   $stockActived->price }}
                    </h2>
                    <h4 class="mt-0">
                      <small>{{ $product->priceRange }}</small>
                    </h4>
                  </div>

                  <div class="mt-4">
                    
                      @auth
                      <form action="{{ url('cart') }}" method="POST">
                        @csrf
                        <div class="btn btn-primary btn-flat">
                          <input   type="number" name="quantity" id="quantity" value="1">
                        </div>
                        <input hidden type="text" name="id_users" id="id_users" value="{{ auth()->user()->id  }}"> 
                        <input hidden type="text" name="code" id="code" value="{{ $stockActived->code }}">
                        <input hidden type="text" name="size" id="size" value="{{ $stockActived->size }}">
                        <input hidden type="text" name="price" id="price" value="{{ $stockActived->price }}">
                        <input hidden type="text" name="nameProduct" id="nameProduct" value="{{ $product->nameProduct }}">
                        <input hidden type="text" name="image" id="image" value="{{ $product->image }}">
                        <button class="btn btn-primary btn-lg btn-flat">
                        <i class="fas fa-cart-plus fa-lg mr-2"></i>Add to Cart
                        </button>

                      </form>
                      @else
                      <form action="{{ url('login') }}" method="GET">
                        <div class="btn btn-primary btn-flat">
                          <input   type="number" name="quantity" id="quantity" value="1">
                        </div>
                        <button class="btn btn-primary btn-lg btn-flat">
                          <i class="fas fa-cart-plus fa-lg mr-2"></i>Add to Cart
                          </button>
                      </form>
                      @endauth
    
                    {{-- <div class="btn btn-default btn-lg btn-flat">
                      <i class="fas fa-heart fa-lg mr-2"></i>
                      Add to Wishlist
                    </div> --}}
                  </div>
    
                  <div class="mt-4 product-share">
                    @foreach($about as $key=>$value)
                      <a href="{{ $value->fb }}" class="text-gray">
                        <i class="fab fa-facebook-square fa-2x"></i>
                      </a>
                      <a href="{{ $value->hp }}" class="text-gray">
                        <i class="fab fa-whatsapp-square fa-2x"></i>
                      </a>
                      <a href="{{ $value->email }}" class="text-gray">
                        <i class="fas fa-envelope-square fa-2x"></i>
                      </a>
                      <a href="#" class="text-gray">
                        {{-- <i class="fas fa-rss-square fa-2x"></i> --}}
                      </a>
                    @endforeach
                  </div>
    
                </div>
              </div>
              <div class="row mt-4">
                <nav class="w-100">
                  <div class="nav nav-tabs" id="product-tab" role="tablist">
                    <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
                    {{-- <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comments</a> --}}
                    {{-- <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Rating</a> --}}
                  </div>
                </nav>
                <div class="tab-content p-3" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">{{ $product->description }}</div>
                  {{-- <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> Vivamus rhoncus nisl sed venenatis luctus. Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum, venenatis odio. Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna. Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. Mauris hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis dolor. Curabitur vel turpis at magna elementum hendrerit vel id dui. Curabitur a ex ullamcorper, ornare velit vel, tincidunt ipsum. </div> --}}
                  {{-- <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at, consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a. Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis nisi orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec varius massa at semper posuere. Integer finibus orci vitae vehicula placerat. </div> --}}
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </section>
        <!-- /.content -->

        <!-- jQuery -->
<script src="{{ asset('') }}admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('') }}admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('') }}admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('') }}admin/dist/js/demo.js"></script>
<script>
  $(document).ready(function() {
    $('.product-image-thumb').on('click', function () {
      var $image_element = $(this).find('img')
      $('.product-image').prop('src', $image_element.attr('src'))
      $('.product-image-thumb.active').removeClass('active')
      $(this).addClass('active')
    })
  })
</script>
@endsection