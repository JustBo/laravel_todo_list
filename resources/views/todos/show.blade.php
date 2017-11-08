@extends('layouts.app')

@section('content')
  <h1>{{$todo->text}}</h1>
  <div class="label label-danger">
    {{$todo->due}}
  </div>
  <div>{{$todo->body}}</div>
  <br><br>
  <a href="/todo/{{$todo->id}}/edit" class="btn btn-default">Edit</a>
  {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
  {!! Form::close() !!}
@endsection
