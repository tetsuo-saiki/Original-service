<ul class="media-list">
@foreach ($myideals as $myideal)
    <?php $user = $myideal->user; ?>
    <li class="media">
<!--    <div class="media-left">
            <img class="media-object img-rounded" src="{{ Gravatar::src($user->email, 50) }}" alt="">
        </div>
-->
        <div class="media-body">
<!--        <div>
                {!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!} 
            </div>
-->    
            <div>
                <span class="text-muted">{{ $myideal->created_at }}に投稿</span>
            </div>
            <div>
                <p>{!! nl2br(e($myideal->content)) !!}</p>
            </div>
            <div>
                @if (Auth::user()->id == $myideal->user_id)
                    {!! Form::open(['route' => ['myideals.destroy', $myideal->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}
                @endif
            </div>
        </div>
    </li>
@endforeach
</ul>
{!! $myideals->render() !!}