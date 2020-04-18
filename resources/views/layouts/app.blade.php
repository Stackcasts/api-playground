<!doctype html>
<html>
<head>
<title>JSON Api Playground</title>
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
crossorigin="anonymous"
/>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
  <div class="content">
    @yield('content')
  </div>
  &copy {{ date('Y') }} - Stackcasts
</div>
<script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>
