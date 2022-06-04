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
<form action="{{ url('admin/order/store')}}" method="POST">
    @csrf
        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1"> user_name</label>
          <input type="text" name="user_name" class="form-control"  placeholder="product name">
        </div>
        <br>
        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1">  number_phone</label>
          <input type="text" name="number_phone" class="form-control"  placeholder="product name">
        </div>
        <br>
        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1"> address</label>
          <input type="text" name="address" class="form-control"  placeholder="address">
        </div>
        <br>
        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1">  user_id</label>
          <input type="text" name="user_id" class="form-control"  placeholder="user_id">
        </div>
        <br>
        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1"> price</label>
          <input type="text" name="price" class="form-control"  placeholder="price">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">  price_total</label>
            <input type="text" name="price_total" class="form-control"  placeholder="price_total">
          </div>
          <br>
          

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>

        </div>



    </form>
</div>





@endsection