@extends('admin.master')
@section('title', 'Quản lý câu hỏi đề thi')
@section('content')
	<a href="{!! route('getFeedBackList') !!}">Xem danh sách feedback</a><br><br>
<form style="width: 650px;">
	<fieldset>
		<legend>Chi tiết phản hồi từ người dùng</legend>
		<span class="form_label">Tên người dùng:</span>
				<span class="form_item">
					<input type="text" name="txtName" class="textbox" style="color:green" value="{!! $feedbackData['name'] !!}" disabled />
				</span><br />
		<span class="form_label">Email:</span>
				<span class="form_item">
					<input type="text" name="txtEmail" class="textbox" style="color:green" value="{!! $feedbackData['email'] !!}" disabled />
				</span><br />
		<span class="form_label">Tên người dùng:</span>
				<span class="form_item">
					<input type="text" name="txtPhone" class="textbox" style="color:green" value="{!! $feedbackData['phone'] !!}" disabled />
				</span><br />
		<span class="form_label">Thông tin phản hồi:</span>
				<span class="form_item">
					<textarea name="txtMessage" rows="5" class="textbox" style="color:green" disabled >{!! $feedbackData['message'] !!}</textarea>
				</span><br />
		<span class="form_label">Ngày gửi:</span>
				<span class="form_item">
					<input type="text" name="txtName" class="textbox" style="color:green" value="{!! $feedbackData['created_at'] !!}" disabled />
				</span><br />
	</fieldset>
</form>
@endsection