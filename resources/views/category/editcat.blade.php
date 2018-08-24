
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
        <div class="filable_form_container">
            <div class="form_container_block">

           @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

                <form id="edit_category"  action="{{action('CategoryController@update',$id)}}"  method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PATCH">
                    <ul>
                        <li class="fileds">
                            <div class="name_fileds">
                                <label>Edit Category Name</label>

                                <input name="catname" type="text" value="{{$category->catname}}"/> 
                            </div>
                        </li>
                    </ul>
                    <div class="next_btn_block">
                        <div class="next_btn">
                            <input type="submit" class="btn-success" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>		
</div>

@endsection