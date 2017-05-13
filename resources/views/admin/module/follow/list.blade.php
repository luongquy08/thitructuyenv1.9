@extends('admin.master')
@section('title', 'Danh sách người dùng theo dõi')
@section('content')
<table class="list_table">
    <tr class="list_heading">
        <td class="id_col">STT</td>
        <td>Email</td>
        <td>Thời gian gửi</td>
    </tr>
    <?php $stt = 0 ?>
    @foreach($followsData as $item)
        <tr class="list_data">
            <td class="aligncenter">{!! $stt !!}</td>
            <td class="list_td alignleft">{!! $item['email'] !!}</td>
            <?php \Carbon\Carbon::setLocale('vi') ?>
            <td class="list_td aligncenter">{!! \Carbon\Carbon::createFromTimestamp(strtotime($item['created_at']))->diffForHumans() !!}</td>
        </tr>
        <?php $stt++ ?>
    @endforeach
</table>
@endsection
