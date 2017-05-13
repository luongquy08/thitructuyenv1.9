@extends('admin.master')
@section('title', 'Danh sách môn học')
@section('content')
    <a href="{!! route('getQuestionAdd') !!}">Thêm câu hỏi cho đề thi</a>
    <h3 text-align="center">{!! $testsData['name'] !!}</h3>
<table class="list_table">
    <tr class="list_heading">
        <td class="id_col">STT</td>
        <td>Nội dung câu hỏi</td>
        <td>Thời gian tạo</td>
        <td class="action_col">Quản lý?</td>
    </tr>
    <?php $stt = 0 ?>
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
