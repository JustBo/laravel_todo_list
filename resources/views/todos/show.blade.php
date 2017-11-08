@extends('layouts.app')

@section('content')
  <h1>{{$todo->text}}</h1>
  <div class="label label-danger">
    {{$todo->due}}
  </div>
  <div>{{$todo->body}}</div>
  <br><br>
  <a href="/todo/{{$todo->id}}/edit" class="btn btn-default">Edit</a>
@endsection
