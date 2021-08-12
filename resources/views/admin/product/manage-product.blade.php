@extends('admin.master')
@section('title')
Manage Product
    
@endsection
@section('body')




     <div class="row">
    <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="text-center text-success" id="xyz">{{ Session::get('message') }}</h4>

        </div>
        <div class="pannel-body">
            <div class="table-responsive">
                <table class="table table-border">
                    <tr class="bg-primary">
                        <th> SI NO </th>
                        <th> Category Name </th>
                        <th> Brand Name </th>
                        <th> Product Image </th>
                        <th> Product Name </th>
                        <th>Product Price </th>
                        <th>Product quantity </th>
                        <th> Publication status </th>
                        <th> Action </th>
                    </tr>
                    @php($i=1)
                        
                    @foreach ($products as $product)
                        
                   
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $product->category_name}}</td>
                    <td>{{ $product->brand_name}}</td>
                    <td>{{ $product->product_name}}</td>
                    <td><img src="{{ asset($product->product_image)}}" alt="" height="100" width="100"></td>
                    <td>{{ $product->product_price}}</td>
                    <td>{{ $product->product_quantity}}</td>
                    <td>{{ $product->publication_status == 1 ? 'published':' Unpublished'}}</td>
                    <td>

                        @if($product->publication_status == 1 )
                        <a href="{{route('unpublished-product',['id'=>$product->id,'a'=> $product->product_name])}}" class="btn btn-info btn-xs">
                        <span class="glyphicon glyphicon-arrow-up"></span>
                    </a>
                        @else  
                        <a href=" {{route('published-product',['id'=>$product->id])}}" class="btn btn-warning btn-xs" >
                            <span class="glyphicon glyphicon-arrow-down"></span>
                        </a>
                            @endif 
                     <a href=" {{route('edit-product', ['id'=>$product->id])}}" class="btn btn-success btn-xs">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>
                         
                           <a href="{{route('delete-product', ['id'=>$product->id])}}" class="btn btn-danger btn-xs">
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>
                     
                    </td>
    
                </tr>
                   
                @endforeach
    
                </table>
        </div>
        


        </div>   
    </div>
    </div>

     </div> 
 
    
@endsection