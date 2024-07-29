@extends('layout')

@section('content')
    <h1>Editar Post</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" value="{{ $post->title }}" required>
        <label for="content">Conteúdo:</label>
        <textarea name="content" id="content" required>{{ $post->content }}</textarea>
        <label for="user_id">Autor:</label>
        <select name="user_id" id="user_id" required>
            <option value="">Selecione um autor</option>
            @foreach ($users as $user)
                <option value="{{ $user->id }}" {{ $post->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
            @endforeach
        </select>
        <button type="submit">Atualizar</button>
    </form>
@endsection