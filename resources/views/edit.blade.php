@extends('layout.layout')

@section('content')
    <h3 class="text-center">Task Edit # - {{ $task->id }}</h3>
    <div class="row d-flex justify-content-center">
        <div class="col-md_12">
            <form method="POST" action="/tasks/{{ $task->id }}/update" >
                @method('PUT')
                @csrf
                <input name="title" type="text" class="form-control " placeholder="Enter Your Task" value="{{ $task->title }}">
                @if ($errors->has('title'))
                    <p class="alert alert-danger">{{ $errors->first('title') }}</p>
                @endif
                <textarea name="description" type="text" cols="50" rows="10" class=" form-control" placeholder="Type Description To The Task" >{{ $task->description }}</textarea>
                @if ($errors->has('description'))
                    <p class="alert alert-danger">{{ $errors->first('description') }}</p>
                @endif
                <button type="submit" class="btn btn-success ">Submit</button>
            </form>
        </div>
    </div>
@endsection
