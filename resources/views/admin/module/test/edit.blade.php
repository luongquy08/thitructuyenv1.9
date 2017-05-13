@extends('admin.master')
@section('title', 'Thêm môn học')
@section('content')
	<form action="" method="POST" style="width: 650px;">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<fieldset>
			<legend>Sửa đề thi</legend>
			<span class="form_label">Môn học:</span>
				<span class="form_item">
					<select name="sltSubject" class="select">
						@foreach($subjectsData as $item)
							<option value="{!! $item['id'] !!}" @if($item['id'] == $testData['subject_id']) selected @endif>{!! $item['name'] !!}</option>
						@endforeach
					</select>
				</span><br />
			<span class="form_label">Tên đề thi:</span>
				<span class="form_item">
					<input type="text" name="txtTestName" class="textbox" value="{!! $testData['name'] !!}" />
				</span><br />
			<span class="form_label">Người tạo:</span>
				<span class="form_item">
					<input type="text" name="txtTestName" class="textbox" value="{!! $testData['user']['name'] !!} ({!! $testData['user']['email'] !!})" disabled />
				</span><br />
			<span class="form_label"></span>
				<span class="form_item">
					<input type="submit" name="btnTestEdit" value="Sửa đề thi" class="button" />
				</span>
		</fieldset>
	</form>
@endsection