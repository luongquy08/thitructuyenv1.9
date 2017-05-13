@extends('admin.master')
@section('title', 'Danh sách môn học')
@section('content')
    <a href="{!! route('getSubjectAdd') !!}">Thêm môn học</a>
<table class="list_table">
    <tr class="list_heading">
        <td class="id_col">STT</td>
        <td>Tên môn học</td>
        <td>Người tạo</td>
        <td>Thời gian tạo</td>
        <td class="action_col">Quản lý?</td>
    </tr>
    <?php $stt = 0 ?>
    @foreach($subjectsData as $item)
        <tr class="list_data">
            <td class="aligncenter">{!! $stt !!}</td>
            <td class="list_td alignleft">{!! $item['name'] !!}</td>
            <td class="">{!! $item['user']['name'] !!} ({!! $item['user']['email'] !!})</td>
            <?php \Carbon\Carbon::setLocale('vi') ?>
            <td class="list_td aligncenter">{!! \Carbon\Carbon::createFromTimestamp(strtotime($item['created_at']))->diffForHumans() !!}</td>
            <td class="list_td aligncenter">
                <a href="{!! route('getSubjectEdit', ['id'=>$item['id']]) !!}"><img src="{!! asset('uet_admin/images/edit.png') !!}" /></a>&nbsp;&nbsp;&nbsp;
                <a href="{!! route('getSubjectDel', ['id'=>$item['id']]) !!}" onclick="return confirmDel('Nếu môn học này bị xóa, các đề thi thuộc môn học này sẽ tự động xóa. Bạn có chắc muốn xóa môn học này?')"><img src="{!! asset('uet_admin/images/delete.png') !!}" /></a>
            </td>
        </tr>
        <?php $stt++ ?>
    @endforeach
</table>
@endsection
