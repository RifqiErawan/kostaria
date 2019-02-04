<!DOCTYPE html>
<html lang="en">

@include('layouts._head')

<body class="landing-page">

  @include('layouts._nav')

  @yield('content')

  <div class="wrapper">
    @include('layouts._foot')
  </div>

  @include('layouts._script')

</body>

</html>
