@extends('layouts.master')
@section('content')
<div class="article-blk">
	
	@foreach($articles as $article)
	<div class="each-article row">
		<div class="col-lg-3">
			<div class="img-blk">
				<!-- <img src="img/leadership-cover.png" title="{{$article->title}}" alt="{{$article->title}}"> -->
				{{ HTML::image("img/articles/$article->id.png") }}
			</div>
		</div>
		<div class="col-lg-9">
			<h1>
			{{ link_to_route('category.articles.show', $article->title, [$article->category->category, $article->id]) }}
			</h1>
			
			<div class="article-content">
				<!-- <div class="img-blk">
						<img src="img/leadership-cover.png" alt="">{$article->category->category}/articles/$article->id
				</div> -->
				{{str_limit($article->body, $limit = 600, $end = '...')}}
			</div>
			
			<div class="tags">
				@foreach($article->tags as $tag)
				
				<div class="each-tag">
					{{ link_to("tags/$tag->tag", $tag->tag) }}
				</div>
				@endforeach
			</div>
		</div>
	</div>
	@endforeach
</div>
@stop