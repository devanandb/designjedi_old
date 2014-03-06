@extends('layouts.master')

@section('content')
<div class="article-blk">
	
	@foreach($articles as $article)
	<div class="each-article">
		<h1>
			{{ link_to_route('category.articles.show', $article->title, [$article->category->category, $article->id]) }}
		</h1>

		<div class="article-content">
			<!-- <div class="img-blk">
				<img src="img/leadership-cover.png" alt="">{$article->category->category}/articles/$article->id
			</div> -->
			{{$article->body}}
		</div>

		<div class="tags">
			@foreach($article->tags as $tag)

				<div class="each-tag">
					{{$tag->tag}}
					{{ link_to("$tag->tag/articles", $tag->tag) }}
				</div>
			@endforeach
		</div>
	</div>
	@endforeach
</div>


@stop