@extends('main')
@section('title','| Create Posts')

@section('stylesheet')
{!! Html::style('css/parsley.css') !!}
@endsection

@section('content')

<div class="row">
  <div class="col-md-8 col-md-offset-2">

    {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate'=>'')) !!}
      {{Form::label('title','Title:')}}
      {{Form::text('title',null,array('class'=>'form-control','required'=>'','maxlength'=>'255'))}}

      {{Form::label('body','BODY:')}}
      {{Form::textarea('body',null,array('class'=>'form-control ', 'required'=>''))}}

      {{Form::submit('CREATE POST',array('class'=>'btn btn-success btn-lg btn-block', 'style'=>'margin-top:20px'))}}
    {!! Form::close() !!}

  </div>
</div>

@endsection

@section('scripts')

  <script src='js/pasrley.min.js'></script>
@endsection
