@extends('layouts.app')

@section('content')
    @if (Auth::check())
    <p>新着</p>
        <div class="col-xs-8">
            @if (count($myideals) > 0)
                @include('myideals.myideals', ['myideals' => $myideals])
            @endif
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>My ideals</h1>
                <p class='sub'>理想のカラダを目指すための匿名Q&Aサービス</p>
            <!--    <img alt="logo" src="{{ secure_asset('') }}">   -->
                {!! link_to_route('signup.get', '新規登録', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif

@endsection