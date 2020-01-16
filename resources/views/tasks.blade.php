@extends('layout.layout')
@section('content')
<div class="container">
    <h3 class="m-2">My List</h3>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary m-3">Create</a>
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
                        <td style="{{ $task->isDone ? 'text-decoration: line-through' : '' }}">{{ $task->title }} </td>
                        <td style="{{ $task->isDone ? 'text-decoration: line-through' : '' }}">{{ $task->description }}</td>
                        <td><div class="btn-group" role="group" aria-label="Basic example">
                                @if ($task->isDone)
                                    <form action="/tasks/{{ $task->id }}/uncheck" method="post">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-success">Undone</button>
                                    </form>
                                @else
                                    <form action="/tasks/{{ $task->id }}/check" method="post">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-success">Done</button>
                                    </form>
                                @endif
                                <a href="/tasks/{{ $task->id }}/edit"><button type="button" class="btn btn-warning mx-2">Edit</button></a>
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
