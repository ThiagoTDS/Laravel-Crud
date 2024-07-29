@extends('layout')

@section('content')
    <h1>Posts</h1>
    <a href="{{ route('posts.create') }}">Criar Novo Post</a>

    @if ($message = Session::get('success'))
        <p>{{ $message }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Conteúdo</th>
                <th>Autor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td>
                        <a href="{{ route('posts.show', $post->id) }}">Ver</a>
                        <a href="{{ route('posts.edit', $post->id) }}">Editar</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection