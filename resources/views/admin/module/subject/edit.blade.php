@extends('admin.master')
@section('title', 'Sửa môn học')
@section('content')
<form action="" method="POST" style="width: 650px;">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<fieldset>
		<legend>Sửa môn học</legend>
		<span class="form_label">Tên môn học:</span>
				<span class="form_item">
					<input type="text" name="txtSubjectName" class="textbox" value="{!! old('txtSubjectName', isset($subjectData['name'])?$subjectData['name']:null) !!}" />
				</span><br />
		<span class="form_label"></span>
				<span class="form_item">
					<input type="submit" name="btnSubjectEdit" value="Sửa môn học" class="button" />
				</span>
	</fieldset>
</form>
@endsection