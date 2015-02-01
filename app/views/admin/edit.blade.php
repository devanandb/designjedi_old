@extends('layouts.admin')

@section('content')


<!-- @include('layouts.navbar') -->


<div class="pg-admin">
	<div class="uk-container-center uk-container">
		<div class="create-blk">
			
			<div class="form-blk">
				<h2>Edit articles</h2>
				<table  class="uk-table uk-table-hover">
				<thead>
			        <tr>
			            <th>Index</th>
			            <th>Title</th>
			            <th>Category</th>
			            <th>Published</th>
			            <th>Edit</th>
			            <th>Delete</th>
			        </tr>
			    </thead>
			    <tbody>
			    	
			    
					<tr ng-repeat="article in articles">
						<td>(($index+1))</td>
						<td>((article.title))</td>
						<td>((article.category_id))</td>
						<td>((article.shown))</td>
						<td><a href="edit/((article.id))"><i class="uk-icon-edit"></i></a></td>
						<td><a href="delete/((article.id))"><i class="uk-icon-close"></i></a></td>

					</tr>
					</tbody>
				</table>

				

				
			</div>
		</div>
	</div>
</div>



@stop