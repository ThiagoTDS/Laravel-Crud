@extends('layout')

@section('content')
    <h1>Criar Post</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" required>
        <label for="content">Conteúdo:</label>
        <textarea name="content" id="content" required></textarea>
        <label for="user_id">Autor:</label>
        <select name="user_id" id="user_id" required>
            <option value="">Selecione um autor</option>
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
        <button class="btn2" type="submit">Criar</button>
    </form>
@endsection