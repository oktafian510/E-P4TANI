@extends('view.index')
@section('conten')
<br><br><br><br>
 <!-- FAQ -->
 <div class="container">
     <br>
     <br>
     <h3 >FAQ</h3>
     <br><br><br>
    <div class="accordion accordion-flush" id="accordionFlushExample">
        @foreach ($faq as $key=>$value)
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#no{{ $value->id }}" aria-expanded="false" aria-controls="flush-collapseOne">
                {{ $value->question}}
            </button>
            </h2>
            <div id="no{{ $value->id }}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">{{ $value->answer }}</div>
            </div>
        </div>
        @endforeach    
    </div>
 </div>
 <!-- END FAQ -->
@endsection