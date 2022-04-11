@extends('admin.index')
@section('conten')
        <div class="card-body">

            <form action="{{ url('adminFaq') }}" method="POST">
                @csrf
                <input type="text" name="question" id="question">
                <label for="question">question</label> <br>
                <input type="text" name="answer" id="answer">
                <label for="answer">answer</label><br>

            
            
                <button type="submit">SIMPAN</button>
            
            </form>
            
        </div>
@endsection