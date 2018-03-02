@extends('main')
@section('title','View Post')
@section('content')
  <h1>{{$data->title}}</h1>
  <p>{{$data->body}}</p>
@endsection
