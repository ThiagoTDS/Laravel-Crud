@extends('layout')

@section('content')
    <h1>Detalhes do Usuário</h1>

    <p>ID: {{ $user->id }}</p>
    <p>Nome: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>

    <a href="{{ route('users.index') }}">Voltar</a>
@endsection