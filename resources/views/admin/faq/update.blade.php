@extends('admin.index')
@section('conten')


        <div class="card-body">
            <form action="{{ url('adminFaq/'.$model->id) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PATCH">

                <div class="row">
                    <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label for="question">Question</label>
                        <input type="text" name="question"  id="question" class="form-control" placeholder="Please insert..." value="{{ $model->question }}">
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                    <!-- textarea -->
                    <div class="form-group">
                        <label for="answer">Answer</label>
                        <textarea name="answer"  id="answer" class="form-control" rows="3" placeholder="Please insert...">{{ $model->answer }}</textarea>
                    </div>
                    </div>
                </div>
                <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> SIMPAN</button>
        
            </form>
        </div>
        
               
@endsection