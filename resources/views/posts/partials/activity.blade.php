<div class="container">
    <div class="row">
      @card([
        'title' => 'Most Commented',
        'subtitle' => 'What people are talking about',
      ])
        @slot('items')
          @foreach ($mostCommented as $post)  
            <li class="list-group-item">
              <a href="{{ route('posts.show', ['post' => $post->id]) }}">
                {{ $post->title }}
              </a>
            </li>
          @endforeach
        @endslot
      @endcard
    </div>
    <div class="row mt-4">
      @card([
        'title' => 'Most Active',
        'subtitle' => 'Users with most posts written',
        'items' => collect($mostActive)->pluck('name')
      ])
      @endcard
    </div>
    <div class="row mt-4">
      @card([
        'title' => 'Most Active Last Month',
        'subtitle' => 'Users with most posts written in last month',
        'items' => collect($mostActiveLastMonth)->pluck('name')
      ])
      @endcard
    </div>
  </div>