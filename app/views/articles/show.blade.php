@extends('layouts.master')

@section('content')

<div class="row article-page">
	<div class="col-lg-2">
		<div class="sidebar">Sidebar</div>
	</div>
	<div class="col-lg-8 each-article-blk">
		<div class="the-article">
			<h1>{{$article->title}}</h1>

			<div class="img-blk">
				{{ HTML::image("img/articles/each/$article->id.png") }}
			</div>

			<div class="content">
				{{$article->body}}
			</div>
		</div>
	</div>
	<div class="col-lg-2">
		<div class="sidebar">sidebar</div>
	</div>
</div>



<a href="{{URL::previous()}}">Back</a>

<!-- {{link_to(Redirect::back(), 'Back')}} -->

@stop