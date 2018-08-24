@extends('master')
@section('content')

  <div class="section banner_section who_we_help">
  	<div class="container">
  		<h4>Create Category</h4>
  	</div>
  </div>

  <!-- Content Section Start-->
  <div class="section content_section">
	<div class="container">

		   @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

		<div class="filable_form_container">
			<form id="edit_product"  action="{{action('ProductController@update',$id)}}"  method="post">
				 {{csrf_field()}}
				 {{ method_field('PATCH') }}
                    <input type="hidden" name="_method" value="PATCH">
			<div class="form_container_block">
				<ul>
					<li class="fileds">
						<div class="name_fileds">
							<label>Product Name</label>
							<input name="fname" type="text" value="{{$products->fname}}"> 
						</div>
					</li>
					<li class="fileds">
						<div class="name_fileds">
							<label>Product Price</label>
							<input name="price" type="text" value="{{$products->price}}"> 
						</div>
					</li>
					<li class="fileds">
						<div class="upload_fileds">
							<label>Upload Image</label>
							<input id="image" name="image" type="file" placeholder="Choose File" class="mandatory_fildes">
						</div>						
					</li>
					<li class="fileds">
						<div class="name_fileds">
						<label>Select Category</label>
						<input type="text" name="catname" value="{{$products->catname}}">		
						</div>
					</li>
				</ul>
				<div class="next_btn_block">
					<div class="next_btn">
						<input type="submit" name="submit" value="submit" class="btn-success">
						<!--<a href="http://wireframes.php-dev.in/training/v1.2/php/assignment/edit_product.html#">Submit  <span><img src="./editproduct_files/small_triangle.png" alt="small_triangle"> </span></a>-->
					</div>
				</div>
			</div>
		</form>
		</div>
	</div>		
  </div>

  @endsection