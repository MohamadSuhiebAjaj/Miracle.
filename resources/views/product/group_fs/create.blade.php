@extends('group_fs.layout')

@section('content')

<div class="container"   style="padding-top: 12%">
    <div class="card ">

        <div class="card-body">
          <p class="card-text">إضافة الأقسام الأساسية</p>
        </div>
      </div>
</div>


<div class="container" style="padding-top: 2%">
<form action="{{ url('admin/gfs/store')}}" method="POST"> 
    @csrf
        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1">  Name AR</label>
          <input type="text" name="name_ar" class="form-control"  placeholder="Name AR">
        </div>
        
        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1">  Name EN</label>
          <input type="text" name="name_en" class="form-control"  placeholder="Name EN">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">  photo_g</label>
            <input type="file" name="photo_g" class="form-control"  placeholder="photo_g">
          </div>
          <br>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>

        </div>



    </form>
</div>





@endsection