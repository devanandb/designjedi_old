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

		
			
			

		
			<h1> <i class="uk-icon-tags"></i> Tags </h1>
			<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consequuntur, reiciendis magnam tempora similique nobis rerum.</p>
	</div>
</div>


<div class="pg-articles uk-height-viewport">
	<div class="uk-container-center uk-container ">
	
		
		
		<div class="pg-blocks">
			<div class="uk-grid">
				@foreach($tags as $tag)
					
			
					<div class="uk-width-medium-1-5 clearfix">
				        <a href="tags/{{$tag->tag}}" class="uk-panel each-tg uk-panel-box uk-text-center" >
				        	
				        	{{$tag->tag}}

				        	
				        </a>
				    </div>

				    
				@endforeach

				
			</div>
		</div>

	</div>
</div>

@stop