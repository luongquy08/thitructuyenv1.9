<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="{!! asset('uet_admin/templates/css/style.css') !!}" />
	<link rel="shortcut icon" href="{!! asset('favicon_uet.ico') !!}">
	<title>Quản trị - @yield('title')</title>
</head>

<body>
<div id="layout">
    <div id="top">
		Trang quản trị hệ thống thi trực tuyến
    </div>
	<div id="menu">
		<table width="100%">
			<tr>
				<td>
					<a href="{!! route('getMainAdminPage') !!}">Trang chính</a> | <a href="{!! route('getUserList') !!}">Quản lý user</a> | <a href="{!! route('getSubjectList') !!}">Quản lý môn học</a> | <a href="{!! route('getTestList') !!}">Quản lý đề thi</a> | <a href="{!! route('getQuestionAdd') !!}">Quản lý câu hỏi đề thi</a>
				</td>
				<td align="right">
					Xin chào {{Auth::user()->name}} | <a href="{!! route('getLogout') !!}">Logout</a>
				</td>
			</tr>
		</table>
	</div>
    <div id="main">
		@include('admin.blocks.error')
		@include('admin.blocks.flash')
	@yield('content')
	</div>
    <div id="bottom">
        Copyright © 2017 Hệ thống thi thử trực tuyến Đại học Công nghệ
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{asset('uet_admin/templates/js/myscript.js')}}"></script>
</body>
</html>