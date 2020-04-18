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
<style>
  body {
    padding-top: 60px;
    padding-bottom: 60px;
    font-family: 'Roboto', sans-serif;
  }
  p {
    font-size: 1.05em;
    margin-bottom: 30px;
  }
  h1 {
    margin-bottom: 30px;
  }
  h1, h2, h3, h4, h5, h6 {
    border-bottom: 1px solid #ccc;
    padding-bottom: 10px;
    margin-bottom: 20px;
  }
  pre[class*="language-"] {
    margin-bottom: 40px !important;
  }
  .content {
    padding: 30px 20px;
    margin-bottom: 40px;
    border: 1px solid #ddd;
    border-radius: 5px;
  }
</style>
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
