@extends('layouts.app')

@section('content')

<div class="container">
    <form method="post" action="/posts">
        @csrf
        <div class="form-group">
            <label for="my-title">Title</label>
            <textarea id="my-title" class="form-control" name="title" rows="1"></textarea>
        </div>
        <div class="form-group">
            <label for="my-body">Body</label>
            <textarea id="my-body" class="form-control" name="body" rows="3"></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Post</button>
    </form>
</div>
@endsection
