<!DOCTYPE html>
<html lang="en">

  @yield('parsleyValidation')
  @include('partials._head')


  <body>

  @include('partials._navbar')
  @include('partials._backGroundImg')
  <div class="container">
    @include('partials._messages')
    @yield('content')
    @include('partials._footer')
  </div>
  @include('partials._javascript')
  </body>

</html>
