@extends('layout.layout')

@section('content')
    <h3 class="text-center">Task Create</h3>
<div class="row d-flex justify-content-center">
    <div class="col-md_12">
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <input name="title" type="text" class="form-control " placeholder="Enter Your Task" value="{{ old('title') }}">
            @if ($errors->has('title'))
                <p class="alert alert-danger">{{ $errors->first('title') }}</p>
            @endif
            <textarea name="description" type="text" cols="50" rows="10" class=" form-control" placeholder="Type Description To The Task" >{{ old('description') }}</textarea>
            @if ($errors->has('description'))
                <p class="alert alert-danger">{{ $errors->first('description') }}</p>
            @endif
            <button type="submit" class="btn btn-success ">Submit</button>
        </form>
    </div>
</div>
@endsection
