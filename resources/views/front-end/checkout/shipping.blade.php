@extends('front-end.master')
@section('body')


<div class="container">
    <div class="row"> 
        <div class="col-md-8 well text-center text-success"> 
            <br/>
            Dear {{ Session::get('customerName')}}. You have to give us product shipping info complete your valueable order.
            if biling info and shipping info same then just ppress on save shipping info button.
            <br/>
        </div>
    </div>
    
    <div class="row "> 
    <div class="col-md-5 well ">
        <h3 class="text-center text-success"> Shipping info goes here....</h3>
    <form action="{{route('new-shipping')}}" method="POST" >
        {{ csrf_field() }}
        <div class="form-group">
           
            <label> FirstName</label>
            <input type="text" value="{{ $customer->first_name.' '.$customer->last_name}}" name="full_name" class="form-control" value=""/>
        </div>
        
        <div class="form-group">
            <label> Email Address</label>
            <input type="email" value="{{$customer->email_address}}" name="email_address" class="form-control" value=""/>
        </div>
        
        <div class="form-group">
            <label> Phone Number</label>
            <input type="text" value="{{ $customer->phone_number}}" name="phone_number" class="form-control" value=""/>
        </div>
        <div class="form-group">
            <label> </label>
            <input type="submit" name="btn" class=" form-control btn btn-block btn-success" value="Save Shipping Info"/>
        </div>
    </form>
</div>

    </div>
    </div>

    

    
@endsection