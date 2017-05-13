@extends('user.master')
@section('title', 'Trang hồ sơ')
@section('content')
<div class="container">
   <div class="row">
      <ul class="breadcrumb">
         <li><a href="#"><span class="glyphicon glyphicon-home"></span> Trang chủ</a></li>
         <li><a href="#">Tài khoản</a></li>
      </ul>
   </div>
</div>
<div id="profile-section">
   <div class="container">
      <div class="row">
         <div class="col-sm-2">
            <ul class="nav nav-tabs nav-stacked">
               <li class="active"><a href="#inf" data-toggle="tab">Thông tin chung</a></li>
               <li><a href="#secu" data-toggle="tab">Bảo mật tài khoản</a></li>
               <li><a href="#his" data-toggle="tab">Lịch sử</a></li>
            </ul>
         </div>
         <div class="col-sm-10">
            <div class="tab-content">
               <div class="tab-pane active" id="inf">
                  <h4 class="text-center">Thông tin chung</h4>
                  <div class="col-sm-8">
                     <form role="form">
                        <div class="form-group">
                           <label>Họ và tên</label>
                           <input type="text" class="form-control" value="Nguyễn Thị Nhàn">
                        </div>
                        <div class="form-group">
                           <label>Ngày sinh</label>
                           <input type="DATE" class="form-control" placeholder="Chọn ngày sinh">
                        </div>
                        <div class="form-group">
                           <label>Giới tính</label><br>
                           <input type="radio" name="gender" value="nam"> Nam<br>
                           <input type="radio" name="gender" value="nu"> Nữ
                        </div>
                        <div class="form-group">
                           <label>Quê</label>
                           <input type="text" class="form-control" value="Hưng Yên">
                        </div>
                        <div class="form-group">
                           <label>Số điện thoại</label>
                           <input type="text" class="form-control" value="01633461337">
                        </div>
                        <div class="form-group">
                           <label>Email</label>
                           <input type="email"  class="form-control"  value="nhannt97hy@gmail.com">
                        </div>
                        <div class="form-group">
                           <div class="form-group">
                              <input type="submit" class="btn btn-info" value="Cập nhật">
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="col-sm-4">
                     <img src="img/hinata.jpg" class="img-thumbnail" class="img-responsive">
                     <input type="file">
                  </div>
               </div>
               <div class="tab-pane" id="his">
                  <h4 class="text-center">Lịch sử các bài kiểm tra</h4>
                  <div class="row">
                     <div class="col-sm-2">
                        <p>Ngày 1/2/2017</p>
                     </div>
                     <div class="col-sm-10">
                        <p><em>Bài kiểm tra 15' Dao động điều hòa</em></p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-2">
                        <p>Ngày 2/2/2017</p>
                     </div>
                     <div class="col-sm-10">
                        <p><em>Bài kiểm tra 45' Toán</em></p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-2">
                        <p>Ngày 3/2/2017</p>
                     </div>
                     <div class="col-sm-10">
                        <p><em>Bài kiểm tra 15' Tiếng Việt</em></p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-2">
                        <p>Ngày 4/2/2017</p>
                     </div>
                     <div class="col-sm-10">
                        <p><em>Bài kiểm tra 15' Hóa</em></p>
                     </div>
                  </div>
               </div>
               <div class="tab-pane" id="secu">
                  <h4 class="text-center">Thay đổi mật khẩu</h4>
                  <form role="form">
                     <div class="form-group">
                        <label>Mật khẩu cũ</label>
                        <input type="password" class="form-control">
                     </div>
                     <div class="form-group">
                        <label >Mật khẩu mới</label>
                        <input type="password" class="form-control">
                     </div>
                     <div class="form-group">
                        <label>Xác nhận mật khẩu mới</label>
                        <input type="password"  class="form-control">
                     </div>
                     <div class="form-group">
                        <input type="submit" class="btn btn-info" value="Cập nhật">
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection