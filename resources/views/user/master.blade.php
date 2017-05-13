@include('user.layouts.header')
<div class="container">
   <div class="row">
      <ul class="breadcrumb">
         <li><a href="{!! route('getHomePage') !!}"><span class="glyphicon glyphicon-home"></span> Trang chủ</a></li>
         @yield('breadcrumb')
      </ul>
   </div>
</div>
<div id="main">
   @yield('content')
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=AM_HTMLorMML"></script>
@include('user.layouts.footer')