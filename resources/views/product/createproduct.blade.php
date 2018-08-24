@extends('master')
@section('content')

  <div class="section banner_section who_we_help">
  	<div class="container">
  		<h4>Create Product</h4>
  	</div>
  </div>

  <!-- Content Section Start-->
  <div class="section content_section">
	<div class="container">
		<div class="filable_form_container">
			<!--@if(count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif-->

			@if(\Session::has('success'))
			<div class="alert alert-success">
				<p>{{ \Session::get('success') }}</p>
			</div>
			@endif
			<form method="post" action="{{url('product')}}">
				{{ csrf_field() }}
			<div class="form_container_block">
				<ul>
					<li class="fileds">
						<div class="name_fileds">
						@if(count($errors) > 0)
				  		<div class="alert alert-danger">
							@if($errors->has('fname'))
								{{$errors->first('fname')}}
							@endif
						</div>
						@endif	
							<label>Product Name</label>
							<input name="fname" type="text"> 
						</div>
					</li>
					<li class="fileds">
						<div class="name_fileds">
						@if(count($errors) > 0)
				  		<div class="alert alert-danger">
							@if($errors->has('price'))
								{{$errors->first('price')}}
							@endif
						</div>
						@endif	
							<label>Product Price</label>
							<input name="price" type="text"> 
						</div>
					</li>
					<li class="fileds">
						<div class="upload_fileds">
						@if(count($errors) > 0)
				  		<div class="alert alert-danger">
							@if($errors->has('image'))
								{{$errors->first('image')}}
							@endif
						</div>
						@endif	
							<label>Upload Image</label>
							<input name="image" type="file" placeholder="Choose File" class="mandatory_fildes">
							<!--<span class="text-muted">jpg</span>-->
						</div>						
					</li>
					<li class="fileds">
					<div class="name_fileds">
					@if(count($errors) > 0)
			 	<div class="alert alert-danger" style="position: absolute;left: 95px;padding: 0;">
					@if($errors->has('category'))
						{{$errors->first('category')}}
					@endif
				</div>
			@endif	
							<label>Select Category</label>

							<select name="catname" class="select category" style="z-index: 10; opacity: 0;">
								<option value="select">Select Category</option>
									@foreach($category as $cat)
									<option value="{{$cat['id']}}">{{$cat['catname']}}</option>
									@endforeach
							</select> 

							<!--<select name="catname" class="select category" style="z-index: 10; opacity: 0;">
								<option value="mobile">Mobile</option>
								<option value="automobile">Automobile</option>
							</select>-->
						</div>
					</li>
				</ul>
				<div class="next_btn_block">
					<div class="next_btn">
						 <input type="submit" class="btn btn-primary" name="submit" value="submit"/>
						<!--<a href="http://wireframes.php-dev.in/training/v1.2/php/assignment/add_product.html#">Submit  <span><img src="./images/small_triangle.png" alt="small_triangle"> </span></a>-->
					</div>
				</div>
			</div>
			</form>
		</div>
	</div>		
  </div>
  <!-- Content Section End-->
  @endsection

