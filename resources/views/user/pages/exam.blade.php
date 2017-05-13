@extends('user.master')
@section('title', 'Trang thi')
@section('breadcrumb')
    <li><a href="#">{!! $testData['name'] !!}</a></li>
@endsection
@section('content')
    <div id="section">
        <div class="container">
            <form method="post" action="">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class=" text-center"><strong>{!! $testData['name'] !!}</strong></h3>
                    </div>
                    <div class="panel panel-info">
                        <table class="table table-striped ">
                            <?php $stt = 1 ?>
                            @foreach($questionsData as $questionItem)
                                <tr @if($stt%2 != 0) class="success" @endif>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-2 text-center">
                                                <strong>{!! $stt !!}.</strong>
                                            </div>
                                            <div class="col-sm-10">
                                                <div class="row">
                                                    <div class="">
                                                        {!! $questionItem['content'] !!}
                                                        <br/><br/>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    Chọn phương án <strong>Đúng.</strong>
                                                </div>
                                                <div class="col-sm-9 ">
                                                    @foreach($answersData as $answerItem)
                                                        @if($answerItem['question_id'] == $questionItem['id'])
                                                            <div>
                                                                <input id="" name="{!! 'question'.$questionItem['id'] !!}"
                                                                       type="radio" value="{!! $answerItem['id'] !!}"/>
                                                                <label for=""> {!! $answerItem['content'] !!}
                                                                </label>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php $stt++ ?>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="panel Panel with panel-info class">
                    <div class="panel-footer ">
                        <button class="btn btn-primary">
                            <span class="glyphicon glyphicon-pencil"></span> NỘP BÀI CHẤM ĐIỂM
                        </button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection