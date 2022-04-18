@extends('view.index')
@section('conten')
<br><br><br><br>
<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
  <div class="container">
    <div class="section-title">
      <span>MEMBER</span>
      <h2>Member</h2>
      <p>Anggota Member P4TANI</p>
    </div>
    <div class="row">
      @foreach ($member as $key=>$value)
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <img src="{{asset('user/assets/img/team').'/'.$value->image}}" alt="">
            <h4>{{ $value->name }}</h4>
            <span>{{ $value->category }}</span>
            <p>
              {{ $value->description }}
            </p>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section><!-- End Team Section -->

@endsection