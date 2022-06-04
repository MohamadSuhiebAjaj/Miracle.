@extends('size.layout')

@section('content')

<div class="container"   style="padding-top: 12%">
    <div class="card ">

        <div class="card-body">

          <p class="card-text">  <span><a href="{{ route('group_fs.index')}}"> back</a> </span>     </p>
        </div>
      </div>
</div>


<div class="container" style="padding-top: 2%">
<form action="{{ route('group_fs.update', $group_fs->id)}}" method="POST">
    @csrf
    @method('POST')
        <div class="form-group">
          <label for="exampleFormControlInput1">  Name AR</label>
          <input type="text" name="name_ar" value="{{ $group_fs->name_ar }} " class="form-control"  placeholder="size number">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Name EN</label>
          <input type="text" name="name_en" value="{{ $group_fs->name_en  }} " class="form-control"  placeholder=" size code">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">photo</label>
            <input type="file" name="photo_g"  value="{{ $group_fs->photo_g  }} "class="form-control"  placeholder="product price">
          </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>

        </div>



    </form>
</div>





@endsection