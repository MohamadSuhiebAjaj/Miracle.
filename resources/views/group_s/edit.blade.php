@extends('group_s.layout')

@section('content')

<div class="container"   style="padding-top: 12%">
    <div class="card ">

        <div class="card-body">

          <p class="card-text">  <span><a href="{{ route('group_s.index')}}"> back</a> </span>     </p>
        </div>
      </div>
</div>
<div class="container" style="padding-top: 2%">
<form action="{{ route('group_s.update', $product_type->id)}}" method="POST">
    @csrf
    @method('POST')
        <div class="form-group">
          <label for="exampleFormControlInput1">  Name AR</label>
          <input type="text" name="name_ar" value="{{ $product_type->name_ar }} " class="form-control">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Name EN</label>
          <input type="text" name="name_en" value="{{ $product_type->name_en  }} " class="form-control"  >
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1"> "department</label>
          <input list="department_id" name="department_id" class="form-control"  placeholder="department_id">
          <datalist id="department_id">
          @foreach($group_fs as $item)
          <option value="{{$item->id}}">{{$item->name_ar}}</option>
          @endforeach
         </datalist>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">photo</label>
            <input type="file" name="photo "value="{{ $product_type-> photo  }} " class="form-control"  placeholder="photo_g_s ">
          </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>

        </div>
    </form>
</div>





@endsection