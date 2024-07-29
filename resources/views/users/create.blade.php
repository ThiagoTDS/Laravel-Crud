@extends('layout')

@section('content')
    <h1>Criar Usuário</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach 
        </ul>
    @endif

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" required>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" required>
        <button class="btn2" type="submit">Criar</button>
    </form>
@endsection