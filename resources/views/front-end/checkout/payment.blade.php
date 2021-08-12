@extends('front-end.master')
@section('body')


<div class="container">
    <div class="row"> 
        <div class="col-md-8 well text-center text-success"> 
            <br/>
            Dear {{ Session::get('customerName')}}. You have to give us product payment Mathod....
            <br/>
        </div>
    </div>
    
    <div class="row "> 
    <div class="col-md-8 well ">
       <form action="{{route('new-order')}}" method="POST">
        {{ csrf_field() }}
           <table class="table table-border">
               <tr>
                   <th> Cash On Delivery</th>
                   <td><input type="radio" name="payment_type" value="Cash" > Cash  </td>
               </tr>
               <tr>
                <th> Paypal</th>
                <td><input type="radio" name="payment_type" value="paypal" >Paypal </td>
            </tr>
            <tr>
                <th> Bkash</th>
                <td><input type="radio" name="payment_type" value="bkash" >bkash </td>
            </tr>
            <tr>
                <th> </th>
                <td><input type="submit" name="=btn" value="Confirm Order" > </td>
            </tr>
           </table>
       </form>
        
</div>

    </div>
    </div>

    

    
@endsection