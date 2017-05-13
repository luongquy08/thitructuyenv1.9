@extends('admin.master')
@section('title', 'Trang chính')
@section('content')
<table class="function_table" style="margin: 0px auto;">
    <tr>
        <td class="function_item user_add"><a href="{!! route('getUserAdd') !!}">Thêm user</a></td>
        <td class="function_item user_list"><a href="{!! route('getUserList') !!}">Quản lý user</a></td>
        <td class="function_item feedback_list"><a href="{!! route('getFeedBackList') !!}">Thông tin phản hồi</a></td>
        <td rowspan="3" class="statistics_panel">
            <h3>Thống kê:</h3>
            <ul>
                <li>Tổng số user: {!! $totalUsers !!}</li>
                <li>Tổng số môn học: {!! $totalSubjects !!}</li>
                <li>Tổng số đề thi: {!! $totalTests !!}</li>
                <li>Tổng số câu hỏi: {!! $totalQuestions !!}</li>
                <li>Tổng số phản hồi: {!! $totalFeedbacks !!}</li>
                <li>Tổng số người theo dõi: {!! $totalFolows !!}</li>
            </ul>
        </td>
    </tr>
    <tr>
        <td class="function_item cate_add"><a href="{!! route('getSubjectAdd') !!}">Thêm môn học</a></td>
        <td class="function_item cate_list"><a href="{!! route('getSubjectList') !!}">Quản lý môn học</a></td>
        <td class="function_item folow_list"><a href="{!! route('getFollowList') !!}">Người dùng theo dõi</a></td>
    </tr>
    <tr>
        <td class="function_item news_add"><a href="{!! route('getTestAdd') !!}">Thêm đề thi</a></td>
        <td class="function_item news_list"><a href="{!! route('getTestList') !!}">Quản lý đề thi</a></td>
        <td class="function_item guide_list"><a href="{!! route('getGuideList') !!}">Hướng dẫn</a></td>
    </tr>
</table>
@endsection