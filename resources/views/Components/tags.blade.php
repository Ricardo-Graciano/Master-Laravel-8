<p>
    @foreach ($tags as $tag)
        <a href="{{ route('posts.tags.index', ['tag' => $tag->id]) }}" class="badge bg-success badge-lg">{{ $tag->name }}</a>
    @endforeach
</p>