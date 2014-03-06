@extends('layouts.master')

@section('content')

<h1>{{$article->title}}</h1>

{{link_to('/articles', 'Back')}}

@stop