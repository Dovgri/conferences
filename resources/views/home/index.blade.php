@extends('layouts.app')
@section('title',"Home")
@section('content')
    <h1>Home page</h1>
    @auth
    <a href="{{route('articles.create')}}"><button type="button">Create article</button></a>
    @endauth
    @each('articles.partials.list',\App\Models\Article::all(),'article')

@endsection
