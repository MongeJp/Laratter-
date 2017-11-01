@extends('layouts.app')

@section('content')
    <h1 class="h3">
        Mensaje ID: {{ $message->id }}
    </h1>
    <img src="{{ $message->image }}" class="img-thumbnail" alt="">
    <p class="card-text">
        {{ $message->content }}
    </p>
    <small class="text-muted">
        {{ $message->created_at }}
    </small>
@endsection