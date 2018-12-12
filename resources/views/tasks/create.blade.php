@extends('layouts.app')

@section('content')
    <h1>メッセージ新規作成ページ</h1>
    <body>
        <div class="row">
            <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8">
                {!! Form::model($tasks, ['route' => 'tasks.store']) !!}
            </div>
        </div>
        
        <div class="form-group">
            {!! Form::label('status', 'タイトル:') !!}
            {!! Form::text('status', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>
    
        {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
     </body>   
    {!! Form::close() !!}
@endsection