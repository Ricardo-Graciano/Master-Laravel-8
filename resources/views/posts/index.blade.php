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
    <div class="container">
      <div class="row" style="width: 100%">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Most Commented</h5>
            <h6 class="card-subtitle mb-2 text-muted">What people are talking about</p>
          </div>
          <ul class="list-group list-group-flush">
            @foreach ($mostCommented as $post)  
              <li class="list-group-item">
                <a href="{{ route('posts.show', ['post' => $post->id]) }}">
                  {{ $post->title }}
                </a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>

      <div class="row mt-4" style="width: 100%">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Most Active</h5>
            <h6 class="card-subtitle mb-2 text-muted">Users with most posts written</p>
          </div>
          <ul class="list-group list-group-flush">
            @foreach ($mostActive as $user)  
              <li class="list-group-item">
                {{ $user->name }}
              </li>
            @endforeach
          </ul>
        </div>
      </div>
      
      <div class="row mt-4" style="width: 100%">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Most Active Last Month</h5>
            <h6 class="card-subtitle mb-2 text-muted">Users with most posts written in last month</p>
          </div>
          <ul class="list-group list-group-flush">
            @foreach ($mostActiveLastMonth as $user)  
              <li class="list-group-item">
                {{ $user->name }}
              </li>
            @endforeach
          </ul>
        </div>
      </div>

    </div>
  </div>
</div>

@endsection