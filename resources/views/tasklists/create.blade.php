@extends('layouts.app')

@section('content')

 <h1>タスク新規作成ページ</h1>

<div class="row">
<div class="col-xs-12","col-sm-8","col-lg-3">

    {!! Form::model($tasklist, ['route' => 'tasklists.store']) !!}
<div class="form-group">
         {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status') !!}
</div>

<div class="form-group">
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}
</div>
        {!! Form::submit('投稿',['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
<!-- Write content for each page here -->
</div>
</div>
@endsection