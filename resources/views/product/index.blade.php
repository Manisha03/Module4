@extends('master')
@section('content')

 <div class="section banner_section who_we_help">
  	<div class="container">
  		<h4>Manage Category</h4>
  	</div>
  </div>

  <!-- Content Section Start-->
  <div class="section content_section">
	<div class="container">
		<div class="filable_form_container">
			@if($message = Session::get('success'))
				<div class="alert alert-success">
					<p>{{$message}}</p>
				</div>
				@endif
			<div class="mange_buttons">
				<ul>
					<!--<li class="search_div">
				 <div class="Search">
				 	<input name="search" type="text" /> 
				 	<input type="submit" class="submit" value="submit">
				 </div>
					</li>-->
					<li><a href="{{route('product.create')}}">Create Product</a></li>
					<li><a href="http://wireframes.php-dev.in/training/v1.2/php/assignment/list_products.html#">Delete</a></li>
				</ul>
			</div>
			<div class="table_container_block">
				<table width="100%">
					<thead>
						<tr>
						<th width="10%">
							<input type="checkbox" class="checkbox" id="checkbox_sample18"> <label class="css-label mandatory_checkbox_fildes" for="checkbox_sample18"></label>
						</th>
						<th style="">Product Name <!--<a href="#" class="sort_icon"><img src="images/sort.png"></a>--></th>
						<th style="">Product Image</th>
						<th style="">Product Price</th>
						<th style="">Product Category <!--<a href="#" class="sort_icon"><img src="images/sort.png"></a>--></th>
						<th>Edit</th>
						<th>Delete</th>

						</tr>
					</thead>
					@foreach($products as $row)
					<tbody>
						<tr>
							<td>
								<input type="checkbox" class="checkbox" id="checkbox_sample19"> <label class="css-label mandatory_checkbox_fildes" value="{{$row['id']}}" for="checkbox_sample19"></label>
							</td>
							<td style="text-align:center">{{$row['fname']}}</td>
							<td style="text-align:center">
								<!--<img src="{{$row['image']}}" style="width:80px; height:auto;">-->
								@if(!$row['image'])
									<image src="{{asset('images/noimage.jpg')}}" style="width:80px; height:auto;" alt="Image NOT Available"/>
								@else
									<img src="{{asset('images/'. $row['image'])}}" width="60px" height="40px"/>
								@endif
							</td>
						
							<td style="text-align:center;">{{$row['price']}}</td>
							<td style="text-align:center">{{$row['catname']}}</td>
							<td>
								<div class="buttons">
								  <a href="{{action('ProductController@edit',$row['id'])}}"><button class="btn btn_edit">Edit</button></a>
								</div>
							</td>
							<td>
								<div class="buttons">
									<form method="post" action="{{action('ProductController@destroy',$row['id'])}}" class="form_del">
										{{ csrf_field()}}
										<input type="hidden" name="_method" value="DELETE">
								        <button type="submit" class="btn btn_delete"><img src="../images/delete_icon.png" alt="delete"></button> 
									</form>
								</div>								
							</td>
						</tr>
					</tbody>
					@endforeach
				</table>
			</div>
				<script type="text/javascript">
				$(document).ready(function()
				{
					$('.form_del').on('submit' , function()
					{
						if(confirm("Are you sure??"))
						{
							return true;
						}
						else
						{
							return false;
						}

					});
				});
			</script>
	     </div>		
       </div>

	</div>
	@endsection