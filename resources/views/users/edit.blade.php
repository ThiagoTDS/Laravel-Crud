@extends('layout')

@section('content')
    <h1>Editar Usuário</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" value="{{ $user->name }}" required>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $user->email }}" required>
        <button type="submit">Atualizar</button>
    </form>
@endsection