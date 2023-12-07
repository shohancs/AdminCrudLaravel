<!doctype html>
<html lang="en">
  <head>

    @include('frontend.includes.header')
    @include('frontend.includes.css')    


  </head>
  <body>

    @include('frontend.includes.menu')

    @yield('body-content')

    @include('frontend.includes.script')

    
@include('frontend.includes.footer')