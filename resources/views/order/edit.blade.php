@extends('order.layout')

@section('content')

<div class="container"   style="padding-top: 12%">
    <div class="card ">

        <div class="card-body">
          <p class="card-text">إضافة طلبات</p>
        </div>
      </div>
</div>


<div class="container" style="padding-top: 2%">
<form action="{{ url('admin/order/update/'. $order->id)}}" method="POST">
    @csrf
        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1"> user_name</label>
          <input type="text" name="user_name" value="{{ $order->user_name }}" class="form-control"  placeholder="product name">
        </div>
        <br>
        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1">  number_phone</label>
          <input type="text" name="number_phone"  value="{{ $order->number_phone}}" class="form-control"  placeholder="product name">
        </div>
        <br>
        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1"> address</label>
          <input type="text" name="address" class="form-control"  value="{{ $order->address }}" placeholder="address">
        </div>
        <br>
        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1">  user_id</label>
          <input type="text" name="user_id" class="form-control" value="{{ $order->user_id }}"  placeholder="product_id">
        </div>
        <br>
        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1"> price</label>
          <input type="text" name="price" class="form-control"  value="{{ $order->price}}"  placeholder="price">
        </div>
        
        <div class="form-group">
            <label for="exampleFormControlInput1">  price_total</label>
            <input type="text" name="price_total" class="form-control"  value="{{ $order-> price_total }}" placeholder="price_total">
          </div>
          <br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>

        </div>



    </form>
</div>





@endsection