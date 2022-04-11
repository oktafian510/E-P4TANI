@extends('admin.index')
@section('conten')
        <div class="card-body">
            <form action="{{ url('adminFaq/'.$model->id) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <input type="text" name="question" value="{{ $model->question }}" id="question">
                <label for="question">question</label> <br>
                <input type="text" name="answer" value="{{ $model->answer }}" id="answer">
                <label for="answer">answer</label><br>
                <button type="submit">SIMPAN</button>
            </form>
        </div>
@endsection