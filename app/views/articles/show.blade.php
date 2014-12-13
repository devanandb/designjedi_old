@extends('layouts.master')

@section('content')

<div class="pg-header">
	<div class="uk-container-center uk-container ">

		<!-- @if (isset($pgtitle))
			<h1>{{ $pgtitle->category }}</h1>
			<p> {{ $pgtitle->desc }}</p>
		@endif

		@if (isset($tagtitle))
			<h1> <i class="uk-icon-tags"></i> {{ $tagtitle->tag }} </h1>
		@endif -->
		<h1 class="article-header">{{$article->title}}</h1>
	</div>
</div>

<nav class="uk-navbar" data-uk-sticky="{top:-400, animation: 'uk-animation-slide-top', clsactive: 'uk-visible'}">

	<div class="uk-container-center uk-container ">
	    <ul class="uk-navbar-nav">
	        <li><a href="/"><i class="uk-icon-home"></i></a></li>
	        <li><a href="/leadership/articles">Leadership</a></li>
	        <li><a href="/disruptive-design/articles">Disruptive Design</a></li>
	        <li><a href="/">Life</a></li>
	    </ul>
	</div>
</nav>

<div class="pg-each-article">
	<div class="uk-container-center uk-container">

		<div class="uk-grid">
		<div class="uk-width-6-10">
				<div class="article-content">
					{{$article->body}}
				</div>
			</div>
			<div class="uk-width-4-10">
				<div class="teaser-img-blk">
					{{ HTML::image("img/articles/each/$article->id.png") }}
				</div>
			</div>
			
			
		</div>
	</div>

	<div class="clearfix">&nbsp;</div>

</div>





<!-- <a href="{{URL::previous()}}">Back</a> -->

<!-- {{link_to(Redirect::back(), 'Back')}} -->

@stop