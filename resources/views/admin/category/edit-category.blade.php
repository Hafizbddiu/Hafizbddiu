@extends('admin.master')

@section('title')
Add Category
@endsection
@section('body')




     <div class="row">
    <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="text-center text-success">Edit Category Form</h4>

        </div>
        <div class="pannel-body">
            <h3 class="text-center text-success"> {{Session::get('message')}} </h3>
            <form action="{{route('update-category')}}" method="POST" class="form-horizontal">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="control-label col-md-4">Category Name</label>
                    <div class="col-md-8">
                        <input type="text" name="category_name" value="{{ $category->category_name}}" class="form-control"/>
                        <input type="hidden" name="category_id" value="{{ $category->id}}" class="form-control"/>

                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4">Category descriptiopn</label>
                    <div class="col-md-8">
                        <textarea class="form-control" name="category_description">{{ $category->category_description}} </textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-4">Publication status</label>
                    <div class="col-md-8 radio">
                       <label>  <input type="radio" checked name="publication_status" {{$category->publication_status == 1 ? 'checked':''}} value="1"/>Publishes</label>
                       <label>  <input type="radio"  name="publication_status" {{$category->publication_status == 0 ? 'checked':''}}value="0"/>Unpublishes</label>
                    </div>
                </div>

                <div class="form-group">
                   
                    <div class="col-md-8 col-md-offset-4">
                        <input type="submit" name="btn" class="btn btn-success btn-block" value="update Category Info"/>
                    </div>
                
            </form>
        </div>   
    </div>
    </div>

     </div> 
    
@endsection