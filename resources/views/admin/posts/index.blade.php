<a href="{{ route('posts.create') }}">Cadastrar Post</a>
<hr>
<h1>POSTS</h1>

@if (session('message'))
    <h2>{{ session('message') }}</h2>
@endif

@foreach ($posts as $post)
    <p>{{ $post->title }} - [ <a href="{{ route('posts.show', $post->id) }}">Ver Post</a> ]</p>
@endforeach