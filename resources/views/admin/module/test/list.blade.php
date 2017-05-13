@extends('admin.master')
@section('title', 'Danh sách môn học')
@section('content')
    <a href="{!! route('getTestAdd') !!}">Thêm đề thi</a>
<table class="list_table">
    <tr class="list_heading">
        <td class="id_col">STT</td>
        <td>Tên môn học</td>
        <td>Bộ môn</td>
        <td>Thời gian tạo</td>
        <td class="action_col">Quản lý?</td>
    </tr>
    <?php $stt = 0 ?>
    @foreach($testsData as $item)
        <tr class="list_data">
            <td class="aligncenter">{!! $stt !!}</td>
            <td class="list_td alignleft"><a href="{!! route('getQuestionList', ['id'=>$item['id']]) !!}">{!! $item['name'] !!}</a></td>
            <td class="list_td alignleft">{!! $item['subject']['name'] !!}</td>
            <?php \Carbon\Carbon::setLocale('vi') ?>
            <td class="list_td aligncenter">{!! \Carbon\Carbon::createFromTimestamp(strtotime($item['created_at']))->diffForHumans() !!}</td>
            <td class="list_td aligncenter">
                <a href="{!! route('getTestEdit', ['id'=>$item['id']]) !!}"><img src="{!! asset('uet_admin/images/edit.png') !!}" /></a>&nbsp;&nbsp;&nbsp;
                <a href="{!! route('getTestDel', ['id'=>$item['id']]) !!}" onclick="return confirmDel('Nếu đề thi này bị xóa, các câu hỏi thuộc đề thi này sẽ tự động xóa. Bạn có chắc muốn xóa đề thi này?')"><img src="{!! asset('uet_admin/images/delete.png') !!}" /></a>
            </td>
        </tr>
        <?php $stt++ ?>
    @endforeach
</table>
@endsection
