 @include('header')

  <div class="section banner_section who_we_help">
  	<div class="container">
  		<h4>Manage Category</h4>
  	</div>
  </div>

  <!-- Content Section Start-->
  <div class="section content_section">
	<div class="container">
		<div class="filable_form_container">
			<div class="mange_buttons">
				<ul>
					<!--<li class="search_div">
				 <div class="Search">
				 	<input name="search" type="text" /> 
				 	<input type="submit" class="submit" value="submit">
				 </div>
					</li> -->
					<li><a href="http://wireframes.php-dev.in/training/v1.2/php/assignment/add_category.html">Create Category</a></li>
					<li><a href="http://wireframes.php-dev.in/training/v1.2/php/assignment/list_categories.html#">Delete</a></li>
				</ul>
			</div>
			<div class="table_container_block">
				<table width="100%">
					<thead>
						<tr>
						<th width="10%">
							<input type="checkbox" class="checkbox" id="checkbox_sample18"> <label class="css-label mandatory_checkbox_fildes" for="checkbox_sample18"></label>
						</th>
						<th style="width:60%">Name <!--<a href="#" class="sort_icon"><img src="images/sort.png"></a>--></th>
						<th>Action</th>
						</tr>
					</thead>
				@foreach($categories as $row)

					<tbody>
						<tr>
							<td>
								<input type="checkbox" class="checkbox" id="checkbox_sample19"> <label class="css-label mandatory_checkbox_fildes" for="checkbox_sample19"></label>
							</td>
							<td>{{$row['catname']}}</td>
							<td>
								<div class="buttons">
								  <button class="btn btn_edit">Edit</button>
								  <button class="btn btn_delete">Delete</button>
								</div>								
							</td>
						</tr>
					</tbody>

						@endforeach


				</table>
			</div>
			
			<div class="pagination_listing">
				<ul>
					<li><a href="http://wireframes.php-dev.in/training/v1.2/php/assignment/list_categories.html#">first</a></li>
					<li><a href="http://wireframes.php-dev.in/training/v1.2/php/assignment/list_categories.html#">1</a></li>
					<li><a href="http://wireframes.php-dev.in/training/v1.2/php/assignment/list_categories.html#">2</a></li>
					<li><a href="http://wireframes.php-dev.in/training/v1.2/php/assignment/list_categories.html#">3</a></li>
					<li><a href="http://wireframes.php-dev.in/training/v1.2/php/assignment/list_categories.html#">4</a></li>
					<li><a href="http://wireframes.php-dev.in/training/v1.2/php/assignment/list_categories.html#">Last</a></li>
				</ul>
			</div>

		</div>
	</div>		
  </div>

  @include('footer')