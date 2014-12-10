@extends('layouts.master')
@section('content')
<div class="pg-articles">
	<div class="uk-container-center uk-container ">
	
		
		
		<div class="pg-blocks">
			<div class="uk-grid">
				@foreach($articles as $article)
					<!-- <div class="uk-width-1-2 each-article">
						
						<div class="img-blk">
							<! <img src="img/leadership-cover.png" title="{{$article->title}}" alt="{{$article->title}}"> 
							{{ HTML::image("img/articles/$article->id.png") }}
						</div>
						
						<div class="cnt-blk">
							<div class="cnt-title">
								{{ link_to_route('category.articles.show', $article->title, [$article->category->category, $article->id]) }}
							</div>
							
							<p>
								<div class="img-blk">
										<img src="img/leadership-cover.png" alt="">{$article->category->category}/articles/$article->id
								</div>
								{{str_limit($article->body, $limit = 300, $end = '...')}}
							</p>
							
							<div class="cnt-tags">
								@foreach($article->tags as $tag)
								
								<div class="each-tag">
									{{ link_to("tags/$tag->tag", $tag->tag) }}
								</div>
								@endforeach
							</div>
						</div>
					</div> -->
			
					<div class="uk-width-medium-1-3 clearfix">
				        <div class="uk-panel uk-panel-box" title="{{$article->title}}">
				        	<div class="uk-panel-teaser">
				        		{{ HTML::image("img/articles/$article->id.png") }}
				        	</div>
				        	<div class="panel-content">
				        		<div class="headings panel-header uk-text-truncate">
				        			{{ link_to_route('category.articles.show', $article->title, [$article->category->category, $article->id]) }}
				        		</div>
				        		<p>{{str_limit($article->body, $limit = 200, $end = '...')}}</p>
				        	</div>

				        	<div class="cnt-tags">
								@foreach($article->tags as $tag)
								
								<div class="each-tag">
									<i class="uk-icon-tag"></i> {{ link_to("tags/$tag->tag", $tag->tag) }}
								</div>
								@endforeach
							</div>
				
				        </div>
				    </div>

				    
				@endforeach

				
			</div>
		</div>

	</div>
</div>
@stop