
  <!--header-ends-->
 @extends('master')
 @section('content')

  <div class="section banner_section who_we_help">
  	<div class="container">
  		<h4>Create Category</h4>
  	</div>
  </div>

  <!-- Content Section Start -->
<!-- <div class="section content_section">
	<div class="container">

		<div class="filable_form_container">
			<form action="connection.php" mathod="POST"> 
				       
   			 <div class="form_container_block">
				<ul>
					<li class="fileds">
						<div class="name_fileds">
							<label>Category Name</label>
							<input name="catname" type="text" id="catname" required /> 
						</div>
					</li>
				</ul>
				<div class="next_btn_block"> 
					<div class="next_btn">
						<a href="./connection.php" name="submit">Submit  <span><img src="./images/small_triangle.png" alt="small_triangle"> </span></a>
					</div> 
				</div> 
			</div> 
			</form> 
		</div> 
	</div>		
  </div> -->
  <div class="section content_section">
	<div class="container">
		<div class="filable_form_container">

			@if(count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif

			@if(\Session::has('success'))
			<div class="alert alert-success">
				<p>{{ \Session::get('success') }}</p>
			</div>
			@endif

	  <form action="{{url('category')}}" method="post">    
                  {{ csrf_field() }}

   			 <div class="form_container_block">
				<ul>
					<li class="fileds">
						<div class="name_fileds">
							<label>Category Name</label>
							<input name="catname" type="text" id="catname" /> 
						</div>
					</li>
				</ul>
             <div class="next_btn_block">
                  <input type="submit" class="btn btn-primary" name="submit" value="submit"/>
              </div>
          </div>
       </form> 
   </div>
   		</div> 
	</div>	
  <!--Content Section End -->

@endsection


