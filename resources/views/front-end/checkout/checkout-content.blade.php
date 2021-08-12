@extends('front-end.master')
@section('body')

	<!--banner-->
    <div class="banner1">
        <div class="container">
            <h3><a href="index.html">Home</a> / <span>Add To Cart</span></h3>
        </div>
    </div>
<!--banner-->

<!--content-->
    <div class="content">
        <!--single-->
        <div class="single-wl3">
            <div class="container">
                <div class="row"> 
                    <div class="col-md-12 well"> 
                        <h3 class="text-center text-success"> You have to login to complete your valuable order.If you are not registered then please register first. </h3>
                    </div>
                </div>
                <div class="row"> 
                <div class="col-md-5 well">
                    <h3 class="text-center text-success"> Registration for new Users</h3>
                <form action="{{route('customer-sign-up')}}" method="post" >
                    {{ csrf_field() }}
                    <div class="form-group">
                       
                        <label> FirstName</label>
                        <input type="text" name="first_name" class="form-control" value=""/>
                    </div>
                    <div class="form-group">
                        <label> LastName</label>
                        <input type="text" name="last_name" class="form-control" value=""/>
                    </div>
                    <div class="form-group">
                        <label> Email Address</label>
                        <input type="email" name="email_address" class="form-control" value=""/>
                    </div>
                    <div class="form-group">
                        <label> password</label>
                        <input type="text" name="password" class="form-control" value=""/>
                    </div>
                    <div class="form-group">
                        <label> Phone Number</label>
                        <input type="text" name="phone_number" class="form-control" value=""/>
                    </div>
                    <div class="form-group">
                        <label> </label>
                        <input type="submit" name="btn" class=" form-control btn btn-block btn-success" value="Sign Up"/>
                    </div>
                </form>

      
                </div>
                <div class="col-md-5 well" style="margin-left: 20px;">
                    <h3 class="text-success text-center"> Already Registred? Login Here</h3><br/>
                    <h3 class="text-success text-center">{{Session::get('message') }} </h3><br/>
                    <form action="{{route('customer-login')}}" method="post">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <label> Email Address</label>
                        <input type="email" name="email_address" class="form-control" value=""/>
                    </div>
                    <div class="form-group">
                        <label> password</label>
                        <input type="text" name="password" class="form-control" value=""/>
                    </div>
                    <div class="form-group">
                        <label> </label>
                        <input type="submit" name="btn" class="btn btn-block btn-success" value="Login"/>
                    </div>
                </form>
                </div>
             
               </div> 
                </div>
                
                <!--Product Description-->
                  
        <!--new-arrivals-->
    </div>
    
@endsection