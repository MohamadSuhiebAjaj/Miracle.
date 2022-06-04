@extends('product.layout')

@section('content')

<div class="container"   style="padding-top: 12%">
    <div class="card ">

        <div class="card-body">
          <p class="card-text">إضافة منتجات</p>
        </div>
      </div>
</div>
<div class="container" style="padding-top: 2%">
<form action="{{ url('admin/product/store')}}" method="POST">
    @csrf
        
        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1">  price</label>
          <input type="text" name="price" class="form-control"  placeholder="product name">
        </div>
        <br>
        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1">  price sell</label>
          <input type="text" name="price_sell" class="form-control"  placeholder="product name">
        </div>
        <br>
       
        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1">  description AR </label>
          <input type="text" name="description_ar" class="form-control"  placeholder="product name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">  description EN</label>
            <input type="text" name="description_en" class="form-control"  placeholder="product price">
          </div>
          <br>
          <div class="form-group">
            <label for="exampleFormControlInput1">  photo</label>
            <input type="file" name="photo" class="form-control"  placeholder="product price">
          </div>
          <br>
          <div class="form-group">
          <label for="exampleFormControlInput1"> type</label>
          <input list="type_id" name="type_id" class="form-control"  placeholder="department_id">
          <datalist id="type_id">
          @foreach($group_s as $item)
          <option value="{{$item->id}}">{{$item->name_ar}}</option>
          @endforeach
         </datalist>
          </div>
          <br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">save</button>
      
        </div>

    </form>
</div>





@endsection