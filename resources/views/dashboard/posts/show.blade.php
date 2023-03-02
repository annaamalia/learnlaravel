@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center my-5">
      <div class="col-lg-8">
        <h1 class="my-3">{{ $post->title }}</h1>

        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
        
        <article class="my-3 fs-5">
          {!! $post->body !!}
        </article>

        <a href="/dashboard/posts" class="btn btn-primary">Back to my posts</a>
        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">Edit post</a>
        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
        </form>

      </div>
    </div>
  </div>
@endsection