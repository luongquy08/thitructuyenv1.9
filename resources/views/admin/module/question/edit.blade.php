@extends('admin.master')
@section('title', 'Quản lý câu hỏi đề thi')
@section('content')
	<form action="" method="POST" style="width: 650px;">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<fieldset>
			<legend>Quản lý câu hỏi đề thi</legend>

			<span class="form_label">Đề thi:</span>
				<span class="form_item">
					<select name="sltTest" class="select">
						@foreach($testsData as $item)
							<option value="{!! $item['id'] !!}" @if($item['id'] == $questionEditData['test_id']) selected @endif>{!! $item['name'] !!}</option>
						@endforeach
					</select>
				</span><br />

			<span class="form_label">Câu hỏi:</span>
				<span class="form_item">
					<textarea name="txtQuestion" rows="5" class="textbox">@if(isset($questionEditData)) {!! $questionEditData['content'] !!} @else {!! old('txtQuestion') !!} @endif</textarea>
				</span><br />
			<?php $stt = 1 ?>
			@foreach($answersData as $answerItem)
			<span class="form_label">Phương án {!! $stt !!}:</span>
				<span class="form_item">
					<textarea name="txtAnswer[{!! $answerItem['id'] !!}]" rows="5" class="textbox">@if(isset($answerItem['content'])) {!! $answerItem['content'] !!} @else {!! old('txtAnswer['.$stt.']') !!} @endif</textarea>
				</span><br />
				<?php $stt++ ?>
			@endforeach
			<span class="form_label">Đáp án đúng:</span>
				<span class="form_item">
					<?php $i = 1 ?>
					@foreach($answersData as $answersItem)
					<input type="radio" name="rdoCorrectAnswer" value="{!! $answersItem['id'] !!}"
						   @if(old('rdoCorrectAnswer')==$answersItem['id'] || $answersItem['id'] == $questionEditData['correct_answer'])
						   checked
							@endif
					/> Phương án {!! $i !!}
						<?php $i++ ?>
					@endforeach
				</span><br />
			<span class="form_label">Ghi chú nguồn:</span>
				<span class="form_item">
					<textarea name="txtSource" rows="5" class="textbox">@if(isset($questionEditData)) {!! $questionEditData['source'] !!} @else {!! old('txtSource') !!} @endif</textarea>
				</span><br />
			<span class="form_label">Người tạo:</span>
				<span class="form_item">
					<input name="txtSource" rows="5" class="textbox" value="{!! $questionEditData['user']['name'] !!} ({!! $questionEditData['user']['email'] !!})" disabled />
				</span><br />
			<span class="form_label"></span>
				<span class="form_item">
					<input type="submit" name="btnQuestionAdd" value="Cập nhật câu hỏi" class="button" />
				</span>
		</fieldset>
	</form>

	<table class="list_table">
		<tr class="list_heading">
			<td class="id_col">STT</td>
			<td>Câu hỏi</td>
			<td>Thời gian tạo</td>
			<td class="action_col">Quản lý?</td>
		</tr>
		<?php $stt = 1 ?>
		@foreach($questionsData as $item)
			<tr class="list_data">
				<td class="aligncenter">{!! $stt !!}</td>
				<td class="list_td alignleft">{!! $item['content'] !!}</td>
				<?php \Carbon\Carbon::setLocale('vi') ?>
				<td class="list_td aligncenter">{!! \Carbon\Carbon::createFromTimestamp(strtotime($item['created_at']))->diffForHumans() !!}</td>
				<td class="list_td aligncenter">
					<a href="{!! route('getQuestionEdit', ['id'=>$item['id']]) !!}"><img src="{!! asset('uet_admin/images/edit.png') !!}" /></a>&nbsp;&nbsp;&nbsp;
					<a href="{!! route('getQuestionDel', ['id'=>$item['id']]) !!}" onclick="return confirmDel('Bạn có chắc muốn xóa câu hỏi này?')"><img src="{!! asset('uet_admin/images/delete.png') !!}" /></a>
				</td>
			</tr>
			<?php $stt++ ?>
		@endforeach
	</table>
@endsection