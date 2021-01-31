<a href="{{ route('teste-posts.create') }}">Cadastrar Teste</a>

<h1>teste</h1>

@foreach ($postsTeste as $post)
    <p>{{ $post->title }}</p>
@endforeach