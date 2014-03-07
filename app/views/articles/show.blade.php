@extends('layouts.master')

@section('content')

<h1>{{$article->title}}</h1>

<a href="{{URL::previous()}}">Back</a>

<!-- {{link_to(Redirect::back(), 'Back')}} -->

@stop