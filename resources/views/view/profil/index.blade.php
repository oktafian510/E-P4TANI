@extends('view.index')
@section('conten')
<br><br>
<br><br>


    name = {{ auth()->user()->name }} <br>
    username = {{ auth()->user()->username }}<br>
    email = {{ auth()->user()->email }}<br>
    address = {{ auth()->user()->address }}<br>
    city = {{ auth()->user()->city }}<br>
    province = {{ auth()->user()->province }}<br>
    gender = {{ auth()->user()->gender }}<br>
    hp = {{ auth()->user()->hp }}<br>
    image = {{ auth()->user()->image }}<br>
    status = {{ auth()->user()->status }}

@endsection