@extends('layouts.app')

@section('content')

    <div class="container mb-5">
        
        <h1>{{ $post->title }}</h1>
        <div>Last updated: {{ $post->updated_at->diffForHumans() }}</div>

        <div class="actions mt-2 mb-5">
            <a class="btn btn-primary"href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>
            <form class="d-inline" action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <input class="btn btn-danger" type="submit" value="Delete">
            </form>
        </div>


        <div class="text mb-5 mt-5">{{ $post->body }}</div>
    </div>

@endsection