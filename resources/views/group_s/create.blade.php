@extends('group_s.layout')

@section('content')

<div class="container"   style="padding-top: 12%">
    <div class="card ">

        <div class="card-body">
          <p class="card-text">إضافة الأقسام الفرعية</p>
        </div>
      </div>
</div>


<div class="container" style="padding-top: 2%">
<form action="{{ url('admin/gs/store')}}" method="POST">
    @csrf
        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1">  Name AR</label>
          <input type="text" name="name_ar" class="form-control"  placeholder="Name AR">
        </div>
        
        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1">  Name EN</label>
          <input type="text" name="name_en" class="form-control"  placeholder="Name EN">
        </div>

        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1"> "department</label>
          <input list="department_id" name="department_id" class="form-control"  placeholder="department_id">
          <datalist id="department_id">
          @foreach($group_fs as $item)
          <option value="{{$item->id}}">{{$item->name_ar}}</option>
          @endforeach
         </datalist>
        </div>
        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1"> photo </label>
          <input type="file" name="photo" class="form-control"  placeholder="photo">
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>

        </div>



    </form>
</div>





@endsection