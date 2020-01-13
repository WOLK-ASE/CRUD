@extends('layout.layout')

@section('tasks')
    <div class="title m-b-md">
        Laravel
    </div>

    <div class="links">


    <a href="https://laravel.com/docs">Docs</a>
    <a href="https://laracasts.com">Laracasts</a>
    <a href="https://laravel-news.com">News</a>
    <a href="https://blog.laravel.com">Blog</a>
    <a href="https://nova.laravel.com">Nova</a>
    <a href="https://forge.laravel.com">Forge</a>
    <a href="https://vapor.laravel.com">Vapor</a>
    <a href="{{ route('tasks.index') }}">Список тасок</a>
    </div>
@endsection
