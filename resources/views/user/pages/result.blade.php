@extends('user.master')
@section('title', 'Trang thi')
@section('breadcrumb')
    <li><a href="#">{!! $testData['name'] !!}</a></li>
@endsection
@section('content')
    <div id="section">
        <div class="container">
            <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class=" text-center"><strong>{!! $testData['name'] !!}</strong></h3>
                    </div>
                    <div class="panel panel-info">
                        <table class="table table-striped ">
                            Kết quả làm bài: @if(isset($result)) {!! $result !!}/{!! count($questionsData) !!} @endif
                            <br>
                            Bài làm của bạn: <br>
                            <?php $stt = 1 ?>
                            @foreach($questionsData as $questionItem)
                                <tr @if($stt%2 != 0) class="success" @endif>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-1 text-center">
                                                <strong>{!! $stt !!}.</strong>
                                            </div>
                                            <div class="col-sm-11">
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
                                                                @if($answerItem['id'] != $questionItem['correct_answer'])
                                                                    <input id="" name="{!! 'question'.$questionItem['id'] !!}"
                                                                           type="radio" value="{!! $answerItem['id'] !!}"
                                                                           disabled
                                                                           @if($answerItem['id'] == $resultArray[$questionItem['id']])
                                                                           checked
                                                                            @endif
                                                                    />
                                                                    <label for=""> {!! $answerItem['content'] !!}
                                                                    </label>
                                                                @else
                                                                    <i class="fa fa-check" aria-hidden="true" style="color: green"></i>
                                                                    <label for=""> {!! $answerItem['content'] !!}
                                                                    </label>
                                                                @endif
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
                <div class="row text-center">
                    <div class="panel Panel with panel-info class">
                        <div class="panel-footer ">
                            <a href="{!! route('getQuestion', ['id'=>$testData['id']]) !!}">
                            <button class="btn btn-primary">
                                <i class="fa fa-undo" aria-hidden="true"></i>
                                LÀM LẠI BÀI
                            </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection