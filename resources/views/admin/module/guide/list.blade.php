<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="{{asset('uet_admin/templates/css/style.css')}}" />
    <link rel="shortcut icon" href="{!! asset('favicon_uet.ico') !!}">
    <title>Hướng dẫn sử dụng hệ thống</title>
</head>
<body>
<div id="layout">
    <div id="top">
        Trang quản trị hệ thống thi trực tuyến - Hướng dẫn sử dụng
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <ul class="nav nav-pills nav-stacked admin-menu well">
                        <li class="active"><a href="#" data-target-id="intro"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Giới thiệu</a></li>
                        <li><a href="#" data-target-id="widgets"><i class="glyphicon glyphicon-user"></i> Phân quyền</a></li>
                        <li><a href="#" data-target-id="addSubject"><i class="fa fa-file-o fa-fw"></i>Thêm môn</a></li>
                        <li><a href="#" data-target-id="charts"><i class="fa fa-bar-chart-o fa-fw"></i>Charts</a></li>
                        <li><a href="#" data-target-id="table"><i class="fa fa-table fa-fw"></i>Table</a></li>
                        <li><a href="#" data-target-id="forms"><i class="fa fa-tasks fa-fw"></i>Forms</a></li>
                        <li><a href="#" data-target-id="calender"><i class="fa fa-calendar fa-fw"></i>Calender</a></li>
                        <li><a href="#" data-target-id="library"><i class="fa fa-book fa-fw"></i>Library</a></li>
                        <li><a href="#" data-target-id="applications"><i class="fa fa-pencil fa-fw"></i>Applications</a></li>
                        <li><a href="#" data-target-id="settings"><i class="fa fa-cogs fa-fw"></i>Settings</a></li>
                    </ul>
                </div>
                <div class="col-md-9  admin-content" id="intro">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4>Giới thiệu</h4>
                                </div>
                                <div class="panel-body">
                                    <p>Đây là hệ thống thi thử trực tuyến do nhóm Skeeter xây dựng nhằm phục vụ thi thử trực tuyến một số môn trắc nghiệm ở trường Đại học.</p>
                                    Nhóm gồm các thành viên:
                                    <ol>
                                        <li><a href="http://ngocquyblog.blogspot.com/"><b><i>Lương Văn Quý</i></b></a></li>
                                        <li><a href=""><b><i>Hà Văn Linh</i></b></a></li>
                                        <li><a href=""><b><i>Nguyễn Thị Nhàn</i></b></a></li>
                                        <li><a href=""><b><i>Nguyễn Mạnh Hùng</i></b></a></li>
                                    </ol>
                                    <p>Nếu bạn có bất kỳ thắc mắc nào cần hỗ trợ xin vui lòng gửi đến email: <br><a href="mailto:hotro.thitructuyen@gmail.com"><b><i class="fa fa-envelope"></i> E-mail: hotro.thitructuyen@gmail.com</b></a></p>
                                    <p>Nếu bạn phát hiện các lỗi liên quan đến hệ thống xin vui lòng gửi đến email : <br><a href="mailto:kythuat.thitructuyen@gmail.com"><b><i class="fa fa-envelope"></i> E-mail: kythuat.thitructuyen@gmail.com</b></a></p>
                                    <p>Nếu bạn muốn tham gia cùng phát triển để hệ thống tốt hơn xin vui lòng gửi đến email : <br><a href="mailto:contact.thitructuyen@gmail.com"><b><i class="fa fa-envelope"></i> E-mail: contact.thitructuyen@gmail.com</b></a></p>
                                    <p>Thân, <br>Nhóm Skeeter</p><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9  admin-content" id="widgets">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Phân quyền trong hệ thống</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <table class="table table-striped table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center">STT</th>
                                                        <th class="text-center">Quyền</th>
                                                        <th class="text-center">Nội dung</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td>Thêm người dùng</td>
                                                        <td>Tất cả các Admin đều có quyền thêm người dùng.</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2</td>
                                                        <td>Sửa người dùng</td>
                                                        <td>Các Admin chỉ được sửa thông tin của bản thân bao gồm mật khẩu và ảnh đại diện.
                                                            Không có quyền sửa thông tin của Admin khác.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">3</td>
                                                        <td>Xóa người dùng</td>
                                                        <td>Các Admin có quyền xóa những người dùng có level là member.
                                                        Không có quyền xóa chính mình và Admin khác.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">4</td>
                                                        <td>Thêm môn học</td>
                                                        <td>Tất cả các Admin đều có quyền thêm môn học.</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">5</td>
                                                        <td>Sửa môn học</td>
                                                        <td>Các Admin có quyền sửa môn học do mình thêm.
                                                        Không có quyền sửa môn học do Admin khác thêm.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">6</td>
                                                        <td>Xóa môn học</td>
                                                        <td>Các Admin không có quyền xóa môn học.</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">7</td>
                                                        <td>Thêm đề thi</td>
                                                        <td>Tất cả các Admin đều có quyền thêm đề thi.</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">8</td>
                                                        <td>Sửa đề thi</td>
                                                        <td>Các Admin chỉ có quyền sửa đề thi do mình tạo ra.
                                                        Không có quyền sửa đề thi do Admin khác tạo ra.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">9</td>
                                                        <td>Xóa đề thi</td>
                                                        <td>Các Admin chỉ có quyền xóa đề thi do mình tạo ra.
                                                            Không có quyền xóa đề thi do Admin khác tạo ra.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">10</td>
                                                        <td>Thêm câu hỏi</td>
                                                        <td>Tất cả các Admin đều có quyền thêm câu hỏi.</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">11</td>
                                                        <td>Sửa câu hỏi</td>
                                                        <td>Các Admin chỉ có quyền sửa câu hỏi do mình tạo ra hoặc câu hỏi đó trong đề do mình tạo ra.
                                                            Nếu câu hỏi do Admin khác tạo ra và câu hỏi không thuộc đề do mình tạo ra thì Admin không có quyền sửa.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">12</td>
                                                        <td>Xóa câu hỏi</td>
                                                        <td>Các Admin chỉ có quyền xóa câu hỏi do mình tạo ra hoặc câu hỏi đó trong đề do mình tạo ra.
                                                            Nếu câu hỏi do Admin khác tạo ra và câu hỏi không thuộc đề do mình tạo ra thì Admin không có quyền xóa.
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-md-9 well admin-content" id="addSubject">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4>Thêm môn học</h4>
                                </div>
                                <div class="panel-body">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 well admin-content" id="charts">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4>Xóa môn học</h4>
                                </div>
                                <div class="panel-body">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 well admin-content" id="table">
                    Table
                </div>
                <div class="col-md-9 well admin-content" id="forms">
                    Forms
                </div>
                <div class="col-md-9 well admin-content" id="calender">
                    Calender
                </div>
                <div class="col-md-9 well admin-content" id="library">
                    Library
                </div>
                <div class="col-md-9 well admin-content" id="applications">
                    Applications
                </div>
                <div class="col-md-9 well admin-content" id="settings">
                    Settings
                </div>
            </div>
        </div>
    </div>
    <div id="bottom">
        Copyright © 2017 Hệ thống thi thử trực tuyến Đại học Công nghệ
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="{!! asset('uet_admin/templates/js/admin_page.js') !!}"></script>
</body>
</html>