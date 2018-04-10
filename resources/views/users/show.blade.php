@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->name }}</h3>
                </div>
                <div class="panel-body">
                    <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->email, 500) }}" alt="">
                </div>
            </div>
        </aside>
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                <li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('users.show', ['id' => $user->id]) }}">投稿した質問 <span class="badge">{{ $count_myideals }}</span></a></li>
                <li><a href="#">お気に入り</a></li>
            </ul>
            @if (count($myideals) > 0)
                @include('myideals.myideals', ['myideals' => $myideals])
            @endif
        </div>
    </div>
@endsection