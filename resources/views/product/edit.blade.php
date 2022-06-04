@extends('product.layout')

@section('content')

<div class="container"   style="padding-top: 12%">
    <div class="card ">

        <div class="card-body">

          <p class="card-text">  <span><a href="{{ route('products.index')}}"> back</a> </span>     Product name : {{ $product->name_ar  }}  </p>
        </div>
      </div>
</div>


<div class="container" style="padding-top: 2%">
<form action="{{ url('admin/product/update/'. $product->id)}}" method="POST">
    @csrf
    @method('POST')
    <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1">  Name _ar</label>
          <input type="text" name="name_ar" class="form-control" value="{{ $product->name_ar}} " placeholder="product name">
        </div>
        
        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1">  Name _en</label>
          <input type="text" name="name_en" class="form-control" value="{{ $product->name_en}} " placeholder="product name">
        </div>
        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1">  price</label>
          <input type="text" name="price" class="form-control" value="{{ $product->price}} " placeholder="product name">
        </div>
        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1">  price_sell </label>
          <input type="text" name="price_sell" class="form-control" value="{{ $product->price_sell}} " placeholder="product name">
        </div>
        <br>
        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1">  color_id</label>
          <input type="text" name="color_id" class="form-control" value="{{ $product->color_id}} " placeholder="product name">
        </div>
        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1">  size_id</label>
          <input type="text" name="size_id" class="form-control" value="{{ $product->size_id}} " placeholder="product name">
        </div>
        <br>
        <div class="form-group">
            <label for="exampleFormControlInput1"> count</label>
            <input type="text" name="count" class="form-control" value="{{ $product->count}} " placeholder="product price">
          </div>
          <br>
        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1"> description_ar</label>
          <input type="text" name="description_ar" class="form-control" value="{{ $product->description_ar}} " placeholder="product name">
        </div>
        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1">  description_en </label>
          <input type="text" name="description_en" class="form-control" value="{{ $product->description_en}} " placeholder="product name">
        </div>
        <br>
       
          <div class="form-group">
            <label for="exampleFormControlInput1">  photo</label>
            <input type="file" name="photo" class="form-control" value="{{ $product->photo}} " placeholder="product price">
          </div>
          <br>
          <div class="form-group">
            <label for="exampleFormControlInput1"> message AR</label>
            <input type="text" name="message_ar" class="form-control" value="{{ $product->message_ar}} " placeholder="product price">
          </div>
          <br>
          <div class="form-group">
            <label for="exampleFormControlInput1">  message EN</label>
            <input type="text" name="message_en" class="form-control" value="{{ $product->message_en}} " placeholder="product price">
          </div>
          <br>
          <div class="form-group">
            <label for="exampleFormControlInput1">group_s_id</label>
            <input type="text" name="group_s_id" class="form-control" value="{{ $product->group_s_id}} " placeholder="product price">
          </div>
          <br>
          <div class="form-group">
            <label for="exampleFormControlInput1">product_best_id</label>
            <input type="text" name="product_best_id" class="form-control" value="{{ $product->product_best_id}} " placeholder="product price">
          </div>


        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>

        </div>



    </form>
</div>





@endsection