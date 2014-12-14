@extends('layouts.master')

@section('content')


@include('layouts.navbar')

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

<div class="uk-container-center uk-container tag-bar">
	<div class="cnt-tags">
		@foreach($article->tags as $tag)
		
		<div class="each-tag">
			<i class="uk-icon-tag"></i> {{ link_to("tags/$tag->tag", $tag->tag) }}
		</div>
		@endforeach
	</div>
</div>



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