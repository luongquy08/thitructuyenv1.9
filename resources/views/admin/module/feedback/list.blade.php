@extends('admin.master')
@section('title', 'Danh sách phản hồi')
@section('content')
<table class="list_table">
    <tr class="list_heading">
        <td class="id_col">STT</td>
        <td>Tên người gửi</td>
        <td>Email</td>
        <td>Phản hồi</td>
        <td>Thời gian gửi</td>
    </tr>
    <?php $stt = 0 ?>
    @foreach($feedbacksData as $item)
        <tr class="list_data">
            <td class="aligncenter">{!! $stt !!}</td>
            <td class="list_td alignleft">{!! $item['name'] !!}</td>
            <td class="list_td alignleft">{!! $item['email'] !!}</td>
            <td class="list_td alignleft"><a href="{!! route('getFeedBackDetail', ['id'=>$item['id']]) !!}">@if(strlen($item['message'])>30) {!! str_finish(str_limit($item['message'], 30), ' [chi tiết]') !!} @endif </a></td>
            <?php \Carbon\Carbon::setLocale('vi') ?>
            <td class="list_td aligncenter">{!! \Carbon\Carbon::createFromTimestamp(strtotime($item['created_at']))->diffForHumans() !!}</td>
        </tr>
        <?php $stt++ ?>
    @endforeach
</table>
@endsection
