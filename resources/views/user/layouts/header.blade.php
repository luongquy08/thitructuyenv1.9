<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('uet_user/css/style_footer.css') !!}">
    <link rel="stylesheet" href="{!! asset('uet_user/css/style_login_form.css') !!}">
    <link rel="stylesheet" href="{!! asset('uet_user/css/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('uet_user/css/style_contact_form.css') !!}">
    <link rel="shortcut icon" href="{!! asset('favicon_uet.ico') !!}">
    <title>Hệ thống thi thử trực tuyến Đại học Công nghệ | @yield('title')</title>
</head>
<body>
@if(isset($alert))
    {!! $alert !!}
@endif
<div id="header">
    <div class="container">
        <div class="row logo-banner">
            <div class="col-md-2 col-sm-2 col-xs-1"><a href="http://uet.vnu.edu.vn/" target="_blank"><img
                            src="{!! asset('uet_user/images/logos/logo-dai-hoc-cong-nghe.jpg') !!}" class="img-logo img-logo-left img-reponsive"></a></div>
            <div class="col-md-8 col-sm-8 col-xs-12"><a href="http://uet.vnu.edu.vn/ts" target="_blank"><img
                            src="{!! asset('uet_user/images/banners/ts2017.jpg') !!}" class="img-banner img-reponsive"></a></div>
            <div class="col-md-2 col-sm-2 col-xs-1"><a href="http://vnu.edu.vn/home" target="_blank"><img
                            src="{!! asset('uet_user/images/logos/dhqghn_logo.png') !!}" class="img-logo img-logo-right img-reponsive"></a></div>
        </div>
        <div class="row">
            <nav class="navbar navbar-inverse main-menu alert-info">
                <form class="navbar-form navbar-left search-form">
                    <div class="form-group input-group">
                        <input type="search" class="form-control" placeholder="Tìm kiếm tại đây...">
                        <span class="input-group-addon"><a href="#"><span class="glyphicon glyphicon-search"></span></a></span>
                    </div>
                </form>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="menu">
                    <ul class="nav navbar-nav navbar">
                        <li><a href="{!! route('getHomePage') !!}"><span class="glyphicon glyphicon-home"></span> Trang chủ</a></li>
                        {{--<li class="dropdown">--}}
                            {{--<a data-toggle="dropdown" href="" class="pages"><span--}}
                                        {{--class="glyphicon glyphicon-user"></span>--}}
                                {{--Tài khoản</a>--}}
                            {{--<ul class="dropdown-menu">--}}
                                {{--<li><a href="#"><span class="glyphicon glyphicon-user"></span> Hồ sơ</a></li>--}}
                                {{--<form method="GET">--}}
                                    {{--<li>--}}
                                        {{--<button name="btn-logout" class="btn btn-link btn-logout" type="submit"><i--}}
                                                    {{--class="fa fa-sign-out"></i> Đăng xuất--}}
                                        {{--</button>--}}
                                    {{--</li>--}}
                                {{--</form>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="dropdown">--}}
                            {{--<a data-toggle="dropdown" href="" class="pages"><i class="fa fa-book"--}}
                                                                               {{--aria-hidden="true"></i>--}}
                                {{--Pages</a>--}}
                            {{--<ul class="dropdown-menu">--}}
                                {{--<li><a href="#">Trang bắt đầu thi</a></li>--}}
                                {{--<li><a href="#">Trang thi</a></li>--}}
                                {{--<li><a href="#">Trang đăng ký</a></li>--}}
                                {{--<li><a href="#">Trang profile</a></li>--}}
                                {{--<li><a href="#">Trang chủ</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        <!--                   contact us-->
                        <li class="dropdown">
                            <a href="" class="pages" data-toggle="modal"
                               data-target="#contact_form"><i class="glyphicon glyphicon-envelope"
                                                              aria-hidden="true"></i> Phản hồi</a>
                        </li>
                        <!--                   end contact us-->
                        <!--                   form login-->
                        {{--<li class="dropdown">--}}
                            {{--<a data-toggle="dropdown" href="" class="pages"><i class="fa fa-sign-in"--}}
                                                                               {{--aria-hidden="true"></i> Đăng nhập</a>--}}
                            {{--<ul id="login-dp" class="dropdown-menu">--}}
                                {{--<li>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-12">--}}
                                            {{--Đăng nhập bằng--}}
                                            {{--<div class="social-buttons">--}}
                                                {{--<a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i>--}}
                                                    {{--Facebook</a>--}}
                                                {{--<a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>--}}
                                            {{--</div>--}}
                                            {{--hoặc--}}
                                            {{--<form class="form" role="form" method="post" action=""--}}
                                                  {{--accept-charset="UTF-8" id="login-nav">--}}
                                                {{--<div class="form-group">--}}
                                                    {{--<label class="sr-only" for="exampleInputEmail2">Email</label>--}}
                                                    {{--<input name="email-login" type="text" class="form-control"--}}
                                                           {{--placeholder="Email..." required>--}}
                                                {{--</div>--}}
                                                {{--<div class="form-group">--}}
                                                    {{--<label class="sr-only" for="exampleInputPassword2">Password</label>--}}
                                                    {{--<input name="password-login" type="password" class="form-control"--}}
                                                           {{--placeholder="Mật khẩu..." required>--}}
                                                    {{--<div class="help-block text-right"><a href="">Quên mật khẩu ?</a>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="form-group">--}}
                                                    {{--<button name="btn-login" type="submit"--}}
                                                            {{--class="btn btn-primary btn-block">Đăng nhập--}}
                                                    {{--</button>--}}
                                                {{--</div>--}}
                                            {{--</form>--}}
                                        {{--</div>--}}
                                        {{--<div class="bottom text-center">--}}
                                            {{--Bạn chưa có tài khoản? <a href=""><b>Đăng ký</b></a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        <!--                   end form login-->
                    </ul>
                </div>
            </nav>
            <!--          contact form-->
            <div class="modal fade" id="contact_form" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="">
                        <div class="col-centered">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <button type="button" class="close" data-dismiss="modal"><span
                                                aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                    <h1 class="title_contact_form">Gửi phản hồi cho chúng tôi</h1>
                                </div>
                                <form action="{!! route('postHomePage') !!}" method="POST">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i
                                                            class="glyphicon glyphicon-user blue"></i></span>
                                                <input type="text" name="txtName" placeholder="Tên của bạn"
                                                       class="form-control" autofocus="autofocus" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i
                                                            class="glyphicon glyphicon-envelope blue"></i></span>
                                                <input type="email" name="txtEmail" placeholder="Email"
                                                       class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i
                                                            class="glyphicon glyphicon-phone blue"></i></span>
                                                <input type="text" name="txtPhone" placeholder="Số điện thoại"
                                                       class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i
                                                            class="glyphicon glyphicon-comment blue"></i></span>
                                                <textarea name="txtMessage" rows="6" class="form-control" type="text"
                                                          required></textarea>
                                            </div>
                                        </div>
                                        <div class="">
                                            <button type="submit" class="btn btn-info pull-right">Gửi <span
                                                        class="glyphicon glyphicon-send"></span></button>
                                            <button type="reset" value="Reset" name="reset" class="btn">Reset <span
                                                        class="glyphicon glyphicon-refresh"></span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--          end contact form-->
        </div>
    </div>
</div>
<!--       end header-->