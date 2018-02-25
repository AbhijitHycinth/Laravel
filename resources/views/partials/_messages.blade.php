@if(Session::has('title'))
  <div class="alert alert-success">
    <strong>Success:</strong>
    {{Session::get('title')}}
  </div>

  <p> This is your post</p>
@endif

@if(count($errors) > 0)
  <ul>
    @foreach($errors -> all() as $error)
      <strong>Errors:</strong>
      <li>
          {{$error}}
      </li>
    @endforeach
  </ul>
@endif
