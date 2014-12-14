@extends('layouts.master')
@section('content')

<!-- <nav class="uk-navbar" data-uk-sticky="{top:-400, animation: 'uk-animation-slide-top', clsactive: 'uk-visible'}">
    <ul class="uk-navbar-nav">
        <li class="uk-active"><a href=""><i class="uk-icon-home"></i></a></li>
        <li><a href="">Leadership</a></li>
        <li><a href="">Disruptive Design</a></li>
        <li><a href="">Life</a></li>


        
    </ul>
</nav> -->

@include('layouts.navbar')
<div class="pg-header">
	<div class="uk-container-center uk-container ">

		@if (isset($pgtitle))
			<h1>{{ $pgtitle->category }}</h1>
			<p> {{ $pgtitle->desc }}</p>
		@endif

		@if (isset($tagtitle))
			<h1> <i class="uk-icon-tags"></i> {{ $tagtitle->tag }} </h1>
		@endif
	</div>
</div>


<div class="pg-articles">
	<div class="uk-container-center uk-container ">
	
		
		
		<div class="pg-blocks">
			<div class="uk-grid matrix">
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