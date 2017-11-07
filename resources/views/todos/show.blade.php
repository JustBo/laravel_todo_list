@extends('layouts.app')

@section('content')
  <h1>{{$todo->text}}</h1>
  <div class="label label-danger">
    {{$todo->due}}
  </div>
  <div>{{$todo->body}}</div>
@endsection
