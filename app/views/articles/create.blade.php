@extends('layouts.admin')

@section('content')


<!-- @include('layouts.navbar') -->


<div class="pg-admin">
	<div class="uk-container-center uk-container">
		<div class="create-blk">
			
			<div class="form-blk">
				<h2>Create new article</h2>

				<!-- {{ Form::open(array('class'=>'uk-form')) }}
					<fieldset data-uk-margin>
				        <legend>Title to display</legend>

						{{ Form::text('title','', array('class'=>'uk-width-1-1 uk-form-large', 'placeholder'=>'Awesome article name'))}}
					</fieldset>

					 <fieldset data-uk-margin>
				        <legend>Add Tags</legend>
				        <input type="text" class="uk-width-1-2 uk-form-large" placeholder="Add tag">
				        <button class="uk-button uk-button-large" type="button">Add</button>
				    </fieldset>

				    <fieldset data-uk-margin>
				        <legend>Add Article</legend>
				        <textarea cols="" rows="10" class="uk-width-1-1 uk-form-large" placeholder=""></textarea>
				    </fieldset>

				{{ Form::close() }} -->
				<div class="uk-form" >

					<fieldset data-uk-margin>
				        <legend>It belongs to?</legend>
				        <div class="uk-button-group" data-uk-button-radio="">
                            <button ng-click="article.type='leadership'" class="uk-button">Leadership</button>
                            <button ng-click="article.type='design'" class="uk-button">Design</button>
                            <button ng-click="article.type='life'" class="uk-button">Life</button>
                        </div>
				        
				    </fieldset>
					
					<fieldset data-uk-margin>
				        <legend>Title to display</legend>
				        <input type="text" class="uk-width-1-1 uk-form-large" ng-model="article.title" placeholder="Awesome article name">
				        
				    </fieldset>

				    <fieldset data-uk-margin>
				        <legend>Add Tags</legend>
				        <form ng-submit="addTag(ctag)">
				        	<input type="text" class="uk-width-1-2 uk-form-large" ng-model="ctag" placeholder="Add tag">
				        	<button class="uk-button uk-button-large" type="submit">Add</button>
				        </form>
						<div class="tag-container">
							<span class="uk-alert tag-added" ng-repeat="tag in ctags">((tag)) <a ng-click="delTag($index)"><i class="uk-icon-close"></i></a></span>
						</div>
				       
				        	
				    </fieldset>

				    <fieldset data-uk-margin>
				        <legend>Add Article</legend>
				        <textarea ng-model="article.description" cols="" rows="10" class="uk-width-1-1 uk-form-large" placeholder=""></textarea>
				    </fieldset>

				    <fieldset data-uk-margin>
				        <legend>Article status</legend>
				        <div class="uk-button-group" data-uk-button-radio="">
                            <button ng-click="article.publish=1" class="uk-button">Publish</button>
                            <button ng-click="article.publish=0" class="uk-button">Publish later</button>
                        </div>
				        
				    </fieldset>
				    <br>
				    <hr>
				    <br>
				    <div class="uk-text-right">
				    	<button class="uk-button uk-button-large" type="button">Cancel</button>

				    	<button ng-click="createArticle()" class="uk-button uk-button-large uk-button-success" type="button">Done</button>
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>



@stop