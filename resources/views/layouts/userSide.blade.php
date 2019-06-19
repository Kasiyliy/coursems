<!DOCTYPE html>
<html lang="en-US">
<head>
  @include('front.head')
</head>
@yield('front.styles')
<body>
@include('front.somethingWrong')
<div id="wrapper" class="wide-wrap">
@include('front.header')
    @yield('content')
    <footer id="footer" class="footer">
       @include('front.footer')
    </footer>
</div>
@include('front.javascript')
@yield('front.custom.js')
</body>
</html>