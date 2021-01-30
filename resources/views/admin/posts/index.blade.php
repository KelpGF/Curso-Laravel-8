<a href="{{ route('posts.create') }}">Cadastrar Post</a>
<hr>
<h1>POSTS</h1>

@foreach ($posts as $post)
    <p>{{ $post->title }}</p>
@endforeach