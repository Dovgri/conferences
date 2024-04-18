@extends('layouts.app')

@section('content')
    <h2>List of articles</h2>
    <a href="{{route('articles.create')}}"><button type="button">Create article</button></a>
    @each('articles.partials.list',\App\Models\Article::all(),'article')
@endsection
