@extends('layouts.app')

@section('content')

<div class="container">
@foreach ($posts as $post)
    <div class="jumbotron">
        <h1 class="display-4">{{ $post->title }}</h1>
        <p class="lead">{{ $post->body }}</p>
        <hr class="my-4">
        <p>{{ $post->author->name }} posted: {{ $post->created_at->diffForHumans() }}</p>
    </div>
@endforeach
</div>
@endsection
