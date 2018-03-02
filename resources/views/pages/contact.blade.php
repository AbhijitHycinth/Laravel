
@extends('main')
@section('title','Contact')
@section('image',asset('img/contact-bg.jpg'))
@section('content')
  <div class="row">
    <div class="col-md-12">
      <center><h1>Get In Touch</h1></center>

      <form class="col-md-8 col-md-offset-2" action="index.html" method="post">

        <div class="form-group floating-label-form-group controls">
          <label>Email</label>
          <input type="text" class="form-control" id="email" class="message" placeholder="Your email id">
        </div>

        <div class="form-group floating-label-form-group controls">
          <label>Subject</label>
          <input type="text" class="form-control" id="subject" name="subject" placeholder="Your Subject">
        </div>

        <div class="form-group floating-label-form-group controls">
          <label>Your Message</label>
          <textarea class="form-control" id="message" name="message" placeholder="Your Thoughts!!"></textarea>
        </div>
        <input type="submit" class="btn btn-success" style="margin-top:20px;" name="submit" value="SUBMIT">
      </form>
    </div>
  </div>
@endsection
