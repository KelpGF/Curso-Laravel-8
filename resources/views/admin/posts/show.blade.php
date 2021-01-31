<h1>DETALHES DO POST {{ $post->title }}</h1>

<ul>
    <li>
        <strong>Title:</strong> {{ $post->title }}
    </li>
    <li>
        <strong>Content:</strong> {{ $post->content }}
    </li>
</ul>

<form action="{{ route('posts.destroy', $post->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Deletar Post</button>
</form>