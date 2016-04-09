<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Library Manager</title>
    <!-- link(rel="stylesheet", href="http://fonts.googleapis.com/icon?family=Material+Icons")-->

    <link rel="stylesheet" href="{{URL::to('assets/components/noUiSlider.8.3.0/nouislider.min.css')}}">
    <!-- <link rel="stylesheet" href="assets/components/materialize/css/materialize.min.css"> -->
    <link rel="stylesheet" href="{{URL::to('assets/components/materialize/css/materialize.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('assets/components/font-awesome-4.5.0/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{URL::to('assets/css/style.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
  @include('includes.header')
  @yield('content')
  @include('includes.footer')
    <!-- script(type="application/javascript", src= compDir + "jquery-2.2.1.min.js")-->
  <script type="application/javascript" src="{{URL::to('assets/components/jquery-2.1.4.min.js')}}"></script>
  <script type="application/javascript" src="{{URL::to('assets/components/materialize/js/materialize.min.js')}}"></script>
  <script type="application/javascript" src="{{URL::to('assets/components/noUiSlider.8.3.0/nouislider.min.js')}}"></script>
  <script type="application/javascript" src="{{URL::to('assets/components/jquery.validate.min.js')}}"></script>
  <script type="application/javascript" src="{{URL::to('assets/components/additional-methods.min.js')}}"></script>
  <script type="application/javascript" src="{{URL::to('assets/js/main.js')}}"></script>

  </body>
</html>
