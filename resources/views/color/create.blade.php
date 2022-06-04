@extends('color.layout')

@section('content')

<div class="container"   style="padding-top: 12%">
    <div class="card ">
        <div class="card-body">
          <p class="card-text">أضافة الألوان</p>
        </div>
      </div>
</div>
<div class="container" style="padding-top: 2%">

<form action="{{ route('colors.store')}}" method="POST">
    @csrf
      <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1">  Name AR color</label>
          <input type="text" name="name_ar" class="form-control"  placeholder="Name AR">
        </div>
        
        <div class="form-group" style="margin-top: 2%;">
         <label for="exampleFormControlInput1">  Name EN color</label>
          <input type="text" name="name_en" class="form-control"  placeholder="Name EN">
        </div>
        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1">  photo_color</label>
          <input type="file" name="photo_color" class="form-control"  placeholder="photo color">
        </div>
        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1"> Product ID</label>
          <input type="text" name="product_id"  class="form-control"  placeholder="Name AR">
        </div>
        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1">  size</label>
          <input type="number"  name="size_number">
        </div>
        <br>
       
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
    
</div>
@endsection