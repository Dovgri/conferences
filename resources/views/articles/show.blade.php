@extends('layouts.app')
@section('content')
  <h1>{{$article['title']}}</h1>
  <p>{{$article['content']}}</p>
  @if(session('status'))
      <div style="background-color: green; color: lime;">{{session('status')}}</div>
  @endif
@endsection
