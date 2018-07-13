@extends('layouts.app')
@section('content')

  <a href="/posts" class="btn btn-default">Go Back</a>
  <h1>{{$post->title}}</h1>

  <div class="">
    Inside db <br>
    {!! $post->body !!}

  </div>
  <small> Written on {{$post->created_at}}</small>
  <hr>
  <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
@endsection
