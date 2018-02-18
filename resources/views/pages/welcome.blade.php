
@extends('main')
@section('title','Homepage')
@section('content')
    <div class="row">
      <div class="col-md-12">
        <div class="jumbotron">
          <h1>Hi There!!</h1>
          <p class="lead">Thank you for visiting!! </br>
          This is my first blog built using laravel
          </p>
          <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8">
        <div class="post">
            <h3>Post Title</h3>
            <p>Post Description</p>
            <a class="btn btn-primary">Read More</a>
        </div>

        <hr>

        <div class="post">
            <h3>Post Title</h3>
            <p>Post Description</p>
            <a class="btn btn-primary">Read More</a>
        </div>

        <hr>

        <div class="post">
            <h3>Post Title</h3>
            <p>Post Description</p>
            <a class="btn btn-primary">Read More</a>
        </div>

        <hr>

        <div class="post">
            <h3>Post Title</h3>
            <p>Post Description</p>
            <a class="btn btn-primary">Read More</a>
        </div>

        <hr>

      </div>
      <div class="col-md-3 col-md-offset-1">
        <h2>Side-Bar</h2>
      </div>
@endsection

    </div>
