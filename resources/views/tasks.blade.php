@extends('layout.layout')
@section('content')
<div class="container">
    <h3>My List</h3>
    <a href="{{ route('tasks.create') }}" class="btn btn-success">Create</a>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <table class="table">
                <thead>
                <td>Title</td>
                <td>Description</td>
                <td>Actions</td>
                </thead>
                <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td>{{ $task->title }} </td>
                        <td>{{ $task->description }}</td>
                        <td><div class="btn-group" role="group" aria-label="Basic example">
                                <a href=""><button type="button" class="btn btn-info">Show</button></a>
                                <a href="/tasks/{{ $task->id }}/edit"><button type="button" class="btn btn-warning">Edit</button></a>
                                <form action="/tasks/{{ $task->id }}/delete" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
