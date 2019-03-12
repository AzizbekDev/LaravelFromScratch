@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard
                <span><a href="/posts/create" class="btn btn-info btn-small float-right">Create</a></span>

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Welcome to Dashboard panel!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
