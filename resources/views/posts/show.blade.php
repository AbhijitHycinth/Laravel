@extends('main')
@section('title','View Post')
@section('image',asset('img/contact-bg.jpg'))
@section('content')
<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <div class="well">
      <div class="row">
        <div class="col-md-6">
          <dl>
            <dt><u>{{$post->title}}</u></dt>
            <dd class="lead"><small>{{$post->body}}</small></dd>
          </dl>
        </div>
        <div class="col-md-6">
              <dl class="dl-horizontal">
                <dt><small>Created At:</small></dt>
                <dd>
                  <small>{{date("M d Y h:i:A",strtotime($post->created_at))}}</small>
                </dd>
              </dl>
              <dl class="dl-horizontal">
                <dt><small>Last Updated At:</small></dt>
                <dd>
                  <small>{{date("M d Y h:i:A",strtotime($post->updated_at))}}</small>
                </dd>
              </dl>
              <div class="row">
                <center>
                  <div class="col-md-6">
                  {!! Html::linkRoute('posts.edit','Edit',array($post->id),array('class'=>'btn btn-primary btn-block'))!!}
                  </div>
                  <div class="col-md-6">
                  {!! Html::linkRoute('posts.destroy','Delete',array($post->id),array('class'=>'btn btn-danger btn-block'))!!}
                  </div>
                </center>
              </div>
        </div>
      </div>
  </div>
  </div>
</div>
@endsection
