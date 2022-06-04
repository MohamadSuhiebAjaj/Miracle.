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
<form action="{{ route('group_s.update', $group_s->id)}}" method="POST">
    @csrf
    @method('POST')
        <div class="form-group">
          <label for="exampleFormControlInput1">  Name AR</label>
          <input type="text" name="name_ar" value="{{ $group_s->name_ar }} " class="form-control">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Name EN</label>
          <input type="text" name="name_en" value="{{ $group_s->name_en  }} " class="form-control"  >
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Group Fs ID</label>
          <input type="text" name=" group_fs_id" value="{{ $group_s-> group_fs_id  }} " class="form-control" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">photo</label>
            <input type="file" name="photo_g_s "value="{{ $group_s-> photo_g_s  }} " class="form-control"  placeholder="photo_g_s ">
          </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>

        </div>



    </form>
</div>





@endsection