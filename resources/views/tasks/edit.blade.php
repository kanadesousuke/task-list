@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} のタスク編集ページ</h1>
        <div class="row">
            <div class="col-xs-12"></div>
            <div class="col-sm-offset-2 col-sm-8"></div>
            <div class="col-md-offset-2 col-sm-8"></div>
            <div class="col-lg-offset-3 col-sm-6"></div>
        </div>
        
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
    
        <div class="form-group">
            {!! Form::label('status', 'タイトル:') !!}
            {!! Form::text('status', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('content', 'メッセージ:') !!}
            {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>
        
        {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection