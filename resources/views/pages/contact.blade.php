
@extends('main')
@section('title','Contact')
@section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>Reach Me from here!!</h1>

      <hr>

      <form class="" action="index.html" method="post">

        <div class="form-group">
          <label>Email</label>
          <input type="text" class="form-control" id="email" class="message" placeholder="Your email id">
        </div>

        <div class="form-group">
          <label>Subject</label>
          <input type="text" class="form-control" id="subject" name="subject" placeholder="Your Subject">
        </div>

        <div class="form-group">
          <label>Your Message</label>
          <textarea class="form-control" id="message" name="message" placeholder="Your Thoughts!!"></textarea>
        </div>
        <input type="submit" class="btn btn-success" name="submit" value="SUBMIT">
      </form>
    </div>
  </div>
@endsection
