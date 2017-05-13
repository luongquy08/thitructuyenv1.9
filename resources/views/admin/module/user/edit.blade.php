@extends('admin.master')
@section('title', 'Danh sách thành viên')
@section('content')
	<form action="" method="POST" enctype="multipart/form-data" style="width: 650px;">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<fieldset>
			<legend>Thông Tin User</legend>
			<span class="form_label">Username:</span>
				<span class="form_item">
					<input type="text" name="txtUser" class="textbox" value="{!! $userData['name'] !!}" disabled />
				</span><br />
			<span class="form_label">Email:</span>
				<span class="form_item">
					<input type="text" name="txtUser" class="textbox" value="{!! $userData['email'] !!}" disabled />
				</span><br />
			<span class="form_label">Password:</span>
				<span class="form_item">
					<input type="password" name="txtPass" class="textbox" />
				</span><br />
			<span class="form_label">Confirm password:</span>
				<span class="form_item">
					<input type="password" name="txtRepass" class="textbox" />
				</span><br />
			@if(Auth::user()->id != $userData['id'])
				<span class="form_label">Level:</span>
				<span class="form_item">
					<input type="radio" name="rdoLevel" value="1"
						   @if($userData['level'] == 1)
						   checked
							@endif
					/> Admin
					<input type="radio" name="rdoLevel" value="2"
						   @if($userData['level'] == 2)
						   checked
							@endif
					/> Member
				</span><br />
				@else
				<input type="hidden" name="rdoLevel" value="{!! $userData['level'] !!}">
			@endif
			<span class="form_label">Hình đại diện hiện tại:</span>
				<span class="form_item">
					<img src="{!! asset(!empty($userData['image'])?'uploads/avatars/'.$userData['image']:'uet_admin/templates/images/nophoto.png') !!}"
						 width="100px"/>
					<input type="hidden" name="fImageCurrent" value="{!! $userData['image'] !!}">
				</span><br/>
			<span class="form_label">Hình đại diện mới:</span>
				<span class="form_item">
					<input type="file" name="avaImg" class="textbox"/>
				</span><br/>
			<span class="form_label"></span>
				<span class="form_item">
					<input type="submit" name="btnUserEdit" value="Sửa User" class="button" />
				</span>
		</fieldset>
	</form>
@endsection