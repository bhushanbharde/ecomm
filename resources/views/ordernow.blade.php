@extends('master')
@section('content')

   <div class="container">
        <h3 class="py-3">Order Details</h3>
        
        <div class="col-sm-10">
            <table class="table">
                <tbody>
                    <tr>
                        <td>Amount</td>
                        <td>₹ {{$total}}</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>₹ 10</td>
                    </tr>
                    <tr>
                        <td>Delivery</td>
                        <td>₹ 0</td>
                    </tr>
                    <tr>
                        <th>Total Amount</th>
                        <td>₹ {{$total+10}}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                  <textarea name="address" class="form-control" rows="4" placeholder="enter your address" ></textarea>
                </div>
                <div class="form-group">
                  <h5 for="pwd" class="text-bold">Payment Method</h5>
                  <div class="form-group">
                    <input type="radio" name="payment" value="cash">
                    <span class="ml-2">Online Payment</span>
                  </div>
                  <div class="form-group">
                    <input type="radio" name="payment" value="cash">
                    <span class="ml-2">EMI Payment</span>
                  </div>
                  <div class="form-group">
                    <input type="radio" name="payment" value="cash">
                    <span class="ml-2">Pay on Delivery</span>
                  </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Order Now</button>
            </form>
        </div>
   </div>
@endsection