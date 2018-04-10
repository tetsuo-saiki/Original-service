@extends('layouts.app')

@section('content')
<!--    <div class="row">
            <aside class="col-md-8">
-->            
           <div class="center jumbotron_new">
            <div class="text-center">
           {!! Form::open(['route' => 'myideals.store']) !!}
    <!--            <div class="form-group">
                        {!! Form::label('title', 'タイトル') !!}
                        {!! Form::textarea('title', old('title'), ['class' => 'form-control', 'rows' => '1']) !!}                        
                    </div>
    -->               
                    <h2>質問を投稿する</h2>
                    <div class="form-group">
                        {!! Form::label('content', '匿名で質問できます。疑問に思っていることを気軽に質問してみましょう。') !!}
                        {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '5']) !!}
                    </div>
                    {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                {!! Form::close() !!}
<!--        </aside>        -->
            </div>
        </div>
@endsection