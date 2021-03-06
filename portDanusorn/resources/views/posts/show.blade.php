@extends('posts.layout')


@section('content')

    <div class="row mt-5">
        <div class="col-md-12">
            <h2>Show</h2>
            <a href="{{ route('posts.index') }}" class="btn btn-primary my-3">Back</a>
        </div>
    </div>


    <div class="row">
        <div class="card p-5">
            <div class="card-title">
                <strong>Title:</strong>
                {{ $post->title }}
            </div>
            <div class="card-text">
                <strong>Description:</strong>
                {{ $post->description }}
        </div>
    </div>

@endsection