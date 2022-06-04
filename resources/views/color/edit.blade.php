@extends('color.layout')

@section('content')

<div class="container"   style="padding-top: 12%">
    <div class="card ">

        <div class="card-body">

          <p class="card-text">  <span><a href="{{ route('colors.index')}}"> back</a> </span>     </p>
        </div>
      </div>
</div>


<div class="container" style="padding-top: 2%">
<form action="{{ route('colors.update', $color->id)}}" method="POST">
    @csrf
    
        <div class="form-group">
          <label for="exampleFormControlInput1">  Name AR</label>
          <input type="text" name="name_ar" value="{{ $color->name_ar  }} " class="form-control"  placeholder=" Name AR">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">  Name EN</label>
          <input type="text" name="name_en" value="{{ $color->name_en }} " class="form-control"  placeholder=" Name EN">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Product ID</label>
          <input type="text" name="product_id" value="{{ $color->product_id  }} " class="form-control"  placeholder="Product ID">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">color RGB</label>
          <input type="text" name="color_rgb" value="{{ $color->color_rgb  }} " class="form-control"  placeholder="Color HSV">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Color HSV</label>
          <input type="text" name="color_hsv" value="{{ $color->color_hsv  }} " class="form-control"  placeholder="Color HSV">
        </div>

        
        <div class="form-group">
            <label for="exampleFormControlInput1">photo color</label>
            @if($color->photo_color)
               <img src="{{asset('assets/uploads/color/'.$color->photo_color) }}"  width="50px" alt="photo color">
            @endif
            <input type="file" name="photo_color" value="{{ $color->photo_color  }} "  class="form-control"  placeholder="product price">
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">count</label>
            <input type="text" name="count" value="{{ $color->count  }} "  class="form-control"  placeholder="product price">
          </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>

        </div>



    </form>
</div>





@endsection