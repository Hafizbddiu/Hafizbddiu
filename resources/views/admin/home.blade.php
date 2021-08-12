@extends('admin.master')
@section('title')
Home Page
    
@endsection
@section('body')




     <div class="row">
    <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="text-center text-success">Add Category Form</h4>

        </div>
        <div class="pannel-body">
            <h3 class="text-center text-success"> {{Session::get('message')}} </h3>
            <form action="{{route('new-category')}}" method="POST" class="form-horizontal">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="control-label col-md-4">Category Name</label>
                    <div class="col-md-8">
                        <input type="text" name="category_name" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4">Category descriptiopn</label>
                    <div class="col-md-8">
                        <textarea class="form-control" name="category_description"> </textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-4">Publication status</label>
                    <div class="col-md-8 radio">
                       <label>  <input type="radio" checked name="publication_status" value="1"/>Publishes</label>
                       <label>  <input type="radio"  name="publication_status" value="0"/>Unpublishes</label>
                    </div>
                </div>

                <div class="form-group">
                   
                    <div class="col-md-8 col-md-offset-4">
                        <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Category Info"/>
                    </div>
                
            </form>
        </div>   
    </div>
    </div>

     </div>
     
     

     <div class="row">
        <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="text-center text-success">Manage Category Form</h4>
    
            </div>
            <div class="pannel-body">
                <table class="table table-border">
                    <tr class="bg-primary">
                        <th> SI NO </th>
                        <th> Category Name </th>
                        <th> Category Description </th>
                        <th> Publication status </th>
                        <th> Action </th>
                    </tr>
            
                      
                           
                     
                  
                    <tr>
                        <td>demo</td>
                        <td>demo</td>
                        <td>demo</td>
                        <td>demo</td>
                        <td>
                           
                            <a href="btn btn-info btn-xs">
                            <span class="glyphicon glyphicon-arrow-up"></span></a>
                   
                            <a href="btn btn-success btn-xs">
                                <span class="glyphicon glyphicon-edit"></span></a>
                                <a href="btn btn-danger btn-xs">
                                    <span class="glyphicon glyphicon-trash"></span></a>
                        </td>
                       
                        
                    </tr>
             
                  
    
                </table>
    
    
            </div>   
        </div>
        </div>
    
         </div> 
    
@endsection