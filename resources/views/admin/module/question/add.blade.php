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
							<option value="{!! $item['id'] !!}" @if($item['id'] == old('sltTest') || ($item['id'] == $oldSelectTest)) selected @endif>{!! $item['name'] !!}</option>
						@endforeach
					</select>
				</span><br />

		<span class="form_label">Câu hỏi:</span>
				<span class="form_item">
					<textarea name="txtQuestion" rows="5" class="textbox">{!! old('txtQuestion') !!}</textarea>
				</span><br />
		<span class="form_label">Phương án 1:</span>
				<span class="form_item">
					<textarea name="txtAnswer[1]" rows="5" class="textbox">{!! old('txtAnswer[1]') !!}</textarea>
				</span><br />
		<span class="form_label">Phương án 2:</span>
				<span class="form_item">
					<textarea name="txtAnswer[2]" rows="5" class="textbox">{!! old('txtAnswer[2]') !!}</textarea>
				</span><br />
		<span class="form_label">Phương án 3:</span>
				<span class="form_item">
					<textarea name="txtAnswer[3]" rows="5" class="textbox">{!! old('txtAnswer[3]') !!}</textarea>
				</span><br />
		<span class="form_label">Phương án 4:</span>
				<span class="form_item">
					<textarea name="txtAnswer[4]" rows="5" class="textbox">{!! old('txtAnswer[4]') !!}</textarea>
				</span><br />
		<span class="form_label">Đáp án đúng:</span>
				<span class="form_item">
					<input type="radio" name="rdoCorrectAnswer" value="1"
						   @if(old('rdoCorrectAnswer')==1)
						   checked
							@endif
					/> Phương án 1
					<input type="radio" name="rdoCorrectAnswer" value="2"
						   @if(old('rdoCorrectAnswer')==2)
						   checked
							@endif
					/> Phương án 2
					<input type="radio" name="rdoCorrectAnswer" value="3"
						   @if(old('rdoCorrectAnswer')==3)
						   checked
							@endif
					/> Phương án 3
					<input type="radio" name="rdoCorrectAnswer" value="4"
						   @if(old('rdoCorrectAnswer')==4)
						   checked
							@endif
					/> Phương án 4
				</span><br />
		<span class="form_label">Ghi chú nguồn:</span>
				<span class="form_item">
					<textarea name="txtSource" rows="5" class="textbox">{!! old('txtSource') !!}</textarea>
				</span><br />
		<span class="form_label"></span>
				<span class="form_item">
					<input type="submit" name="btnQuestionAdd" value="Thêm câu hỏi" class="button" />
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