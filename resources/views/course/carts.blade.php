@extends('common.layout')

@section('content')
<br>
<div class="container margin-top 20">
    <h2 style="text-align:center; font-weight:bold">My Cart Items</h2><hr>
    <table class="table table-bordered table-stripe">
        <thead>
          <tr>
            <th>No.</th>
            <th>Course Title</th>
            <th>Course Image</th>
            <th>Course Quantity</th>
            <th>Unit Price</th>
            <th>Sub total Price</th>
            <th>
              Delete
            </th>
          </tr>
        </thead>
        <tbody>
            @php
             $total_price = 0;
            @endphp
            @foreach(App\Models\Cart::totalCarts() as $cart)
                <tr>
                <td>
                   {{ $loop->index + 1 }}
                </td>
                <td>
                    <a href="#">{{ $cart->course->title }}</a>
                </td>
                <td>
                    <img src="#" alt=""></img>
                </td>
                <td>
                <form class="form-inline" action="{{ route('carts.update', $cart->id) }}" method="post">
                  @csrf
                  <input type="number" name="course_quantity" class="form-control" value="{{ $cart->course_quantity }}"/>
                  <button type="submit" class="btn btn-success mt-1">Update</button>
                </form>
                </td>
                <td>
                    {{ $cart->course->price }} Taka
                </td>
                <td>
                @php
                    $total_price += $cart->course->price * $cart->course_quantity;
                @endphp

                {{ $cart->course->price * $cart->course_quantity }} Taka
                </td>
                <td>
                <form class="form-inline" action="{{ route('carts.delete', $cart->id) }}" method="post">
                  @csrf
                  <input type="hidden" name="cart_id" />
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                </td>
            </tr>
            @endforeach
            <tr>
            <td colspan="4"></td>
            <td>
              Total Amount:
            </td>
            <td colspan="2">
              <strong>  {{ $total_price }} Taka</strong>
            </td>
          </tr>
        </tbody>
    </table>
    <div class="float-right">
        <a href="/courses" class="btn btn-info btn-lg">Continue Selecting Course...</a>
         <a href="{{ route('checkouts') }}" class="btn btn-warning btn-lg">Checkout</a>
    </div>
</div>
@endsection