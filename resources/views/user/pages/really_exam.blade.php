@extends('user.master')
@section('title', 'Sẵn sàng làm b')
@section('content')
<div class="container">
   <div class="row">
      <ul class="breadcrumb">
         <li><a href="#"><span class="glyphicon glyphicon-home"></span> Trang chủ</a></li>
         <li><a href="#">Thi trực tuyến</a></li>
      </ul>
   </div>
</div>
<div class="container">
   <div class="row">
      <div class="panel panel with panel-primary ">
         <div class="panel-heading text-center">
            <h3 class="panel-title">Vòng 1.1 - Bài 1: Sắp xếp</h3>
         </div>
         <div class="panel-body text-center">
            <h3>Môn: Toán <br/> Vòng 1.1 - Bài 1: Sắp xếp</h3>
            <p><em>(Đề kiểm tra có: 1 trang)</em></p>
            <p><em>Thời gian làm bài: 20 phút </em></p>
            <div class=" send  ">
               <a type="submit" class="start-test btn btn-success" href="1.php" ><span class="glyphicon glyphicon-time "></span> BẮT ĐẦU LÀM BÀI</a>
            </div>
            <br>
            <div>Số người làm bài:  351</div>
         </div>
      </div>
   </div>
</div>
@endsection