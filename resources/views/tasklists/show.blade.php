@extends('layouts.app')

@section('content')

<h1>id = {{ $tasklist->id }} のタスクの詳細ページ</h1>

    <p>ステータス: {{ $tasklist->status }}</p>
    <p>メッセージ: {{ $tasklist->content }}</p>
    
     {!! link_to_route('tasklists.edit', 'このタスクを編集', ['id' => $tasklist->id],['class' => 'btn btn-default']) !!}


{!! Form::model($tasklist, ['route' => ['tasklists.destroy', $tasklist->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除',['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}


@endsection