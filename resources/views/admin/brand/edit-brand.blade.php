@extends('admin.master')

@section('title')
Update Brand
@endsection
@section('body')




     <div class="row">
    <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="text-center text-success">Update Brand Form</h4>

        </div>
        <div class="pannel-body">
            <h3 class="text-center text-success"> {{Session::get('message')}} </h3>
            <form action="{{route('update-brand')}}" method="POST" class="form-horizontal">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="control-label col-md-4">Brand Name</label>
                    <div class="col-md-8">
                        <input type="text" name="brand_name" value="{{ $brand->brand_name}}"class="form-control"/>
                        <input type="hidden" name="brand_id" value="{{ $brand->id}}" class="form-control"/>

                        <span class="text-danger"> {{ $errors-> has('brand_name') ? $errors->first('brand_name'): ' '}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4">Brand descriptiopn</label>
                    <div class="col-md-8">
                        <textarea class="form-control" name="brand_description"> {{ $brand->brand_description}}</textarea>
                        <span class="text-danger"> {{ $errors-> has('brand_description') ? $errors->first('brand_description'): ' '}}</span>

                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-4">Publication status</label>
                    <div class="col-md-8 radio">
                       <label>  <input type="radio"  name="publication_status" {{$brand->publication_status == 1 ? 'checked':''}}  value="1"/>Publishes</label>
                       <label>  <input type="radio"  name="publication_status"{{$brand->publication_status == 0 ? 'checked':''}} value="0"/>Unpublishes</label>
                       <span class="text-danger"> {{ $errors-> has('publication_status') ? $errors->first('publication_status'): ' '}}</span>

                    </div>
                </div>

                <div class="form-group">
                   
                    <div class="col-md-8 col-md-offset-4">
                        <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Brand Info"/>
                        
                    </div>
                
            </form>
        </div>   
    </div>
    </div>

     </div> 
    
@endsection