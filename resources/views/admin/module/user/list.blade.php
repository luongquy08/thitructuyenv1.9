@extends('admin.master')
@section('title', 'Trang chính')
@section('content')
    <a href="{!! route('getUserAdd') !!}">Thêm thành viên</a>
    <table class="list_table">
        <tr class="list_heading">
            <td class="id_col">STT</td>
            <td>Username</td>
            <td>Email</td>
            <td>Level</td>
            <td class="action_col">Quản lý?</td>
        </tr>
        <?php $i = 1 ?>
        @foreach($userData as $item)
            <tr class="list_data">
                <td class="aligncenter">{!! $i !!}</td>
                <td class="list_td aligncenter">{!! $item["name"] !!}</td>
                <td class="list_td aligncenter">{!! $item["email"] !!}</td>
                <td class="list_td aligncenter">
                    @if ($item["id"] == 1)
                        <span style="color: red; font-weight: bold;">Super Admin</span>
                    @elseif ($item["level"] == 1)
                        <span style="color: blue; font-weight: bold;">Admin</span>
                    @else
                        <span style="color: black;">Member</span>
                    @endif
                </td>
                <td class="list_td aligncenter">
                    <a href="{!! route('getUserEdit', ['id' => $item["id"]]) !!}"><img src="{!! asset('uet_admin/images/edit.png') !!}" /></a>&nbsp;&nbsp;&nbsp;
                    <a href="{!! route('getUserDel', ['id' => $item["id"]]) !!}" onclick="return confirmDel('Bạn có chắc muốn xóa người dùng này?')"><img src="{!! asset('uet_admin/images/delete.png') !!}" /></a>
                </td>
            </tr>
            <?php $i++; ?>
        @endforeach
    </table>
@endsection