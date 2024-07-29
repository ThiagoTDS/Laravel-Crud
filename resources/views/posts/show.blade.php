@extends('layout')

@section('content')
    <h1>Detalhes do Post</h1>

    <p>ID: {{ $post->id }}</p>
    <p>Título: {{ $post->title }}</p>
    <p>Conteúdo: {{ $post->content }}</p>
    <p>Autor: {{ $post->user->name }}</p>

    <a href="{{ route('posts.index') }}">Voltar</a>
@endsection