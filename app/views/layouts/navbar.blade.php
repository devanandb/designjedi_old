<nav class="uk-navbar" data-uk-sticky="{top:-400, animation: 'uk-animation-slide-top', clsactive: 'uk-visible'}">

	<div class="uk-container-center uk-container ">
	    <ul class="uk-navbar-nav">
	        <li><a href="/"><i class="uk-icon-home"></i></a></li>
	        <li class="{{ set_active('leadership/articles') }}"><a href="/leadership/articles">Leadership</a></li>
	        <li class="{{ set_active('disruptive-design/articles') }}"><a href="/disruptive-design/articles">Disruptive Design</a></li>
	        <li class="{{ set_active('/life') }}"><a href="/">Life</a></li>
	    </ul>

	    <div class="uk-navbar-flip">
	        <ul class="uk-navbar-nav">
	            <li class="{{ set_active('tags') }}"><a href="/tags"><i class="uk-icon-tags"></i> Tags</a></li>
	        </ul>
	    </div>
	</div>


</nav>