@extends('size.layout')

@section('content')

<div class="container"   style="padding-top: 12%">
    <div class="card ">

        <div class="card-body">
          <p class="card-text">إضافة قياسات</p>
        </div>
      </div>
</div>
<div class="container" style="padding-top: 2%">
<form action="{{ route('sizes.store')}}" method="POST">
    @csrf
        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1">Size Number</label>
          <input type="text" name="size_number" class="form-control"  placeholder="size number">
        </div>

        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1">Product_Id</label>
          <input type="text" name="product_id" class="form-control"  placeholder="count">
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>

        </div>



    </form>
</div>





@endsection