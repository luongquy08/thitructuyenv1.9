@if(Session::has('flash_level'))
    <div class="{{Session::get('flash_level')}}">
        {{Session::get('flash_message')}}
    </div>
@endif

@if(isset($flash_level))
    <div class="{{$flash_level}}">
        {{$flash_message}}
    </div>
@endif