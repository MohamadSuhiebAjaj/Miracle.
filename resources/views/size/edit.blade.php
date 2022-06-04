@extends('size.layout')

@section('content')

<div class="container"   style="padding-top: 12%">
    <div class="card ">

        <div class="card-body">

          <p class="card-text">  <span><a href="{{ route('sizes.index')}}"> back</a> </span>     </p>
        </div>
      </div>
</div>


<div class="container" style="padding-top: 2%">
<form action="{{ url('admin/size/update', $size->id)}}" method="POST">
    @csrf
    @method('POST')
        <div class="form-group">
          <label for="exampleFormControlInput1">  size_number</label>
          <input type="text" name=" size_number" value="{{ $size->size_number }} " class="form-control"  placeholder="size number">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1"> Product ID</label>
          <input type="text" name="product_id" value="{{ $size->size_code  }} " class="form-control"  placeholder=" size code">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>

        </div>



    </form>
</div>





@endsection