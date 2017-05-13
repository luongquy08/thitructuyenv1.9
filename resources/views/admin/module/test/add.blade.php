@extends('admin.master')
@section('title', 'Thêm môn học')
@section('content')
<form action="" method="POST" style="width: 650px;">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<fieldset>
		<legend>Thêm đề thi</legend>
		<span class="form_label">Môn học:</span>
				<span class="form_item">
					<select name="sltSubject" class="select">
						@foreach($subjectsData as $item)
						<option value="{!! $item['id'] !!}">{!! $item['name'] !!}</option>
						@endforeach
					</select>
				</span><br />
		<span class="form_label">Tên đề thi:</span>
				<span class="form_item">
					<input type="text" name="txtTestName" class="textbox" />
				</span><br />
		<span class="form_label"></span>
				<span class="form_item">
					<input type="submit" name="btnTestAdd" value="Thêm đề thi" class="button" />
				</span>
	</fieldset>
</form>
@endsection