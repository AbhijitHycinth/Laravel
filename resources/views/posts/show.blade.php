@extends('main')
@section('title','View Post')
@section('image',asset('img/contact-bg.jpg'))
@section('content')
  <h1><small>{{$post->title}}</small></h1>
  <p>{{$post->body}}</p>
@endsection
