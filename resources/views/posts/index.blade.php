@extends('layouts.app')

@section('title', 'Blog Posts')

@section('content')
{{-- @each('posts.partials.post', $posts, 'post') --}}
<div class="row">
  <div class="col col-8">
    @forelse ($posts as $key => $post)
      @include('posts.partials.post', [])
    @empty
      No blog posts yet!
    @endforelse
  </div>
  <div class="col col-4">
    @include('posts.partials.activity')
  </div>
</div>

@endsection