@extends('management.layout')

@section('content')

<div class="container"   style="padding-top: 12%">
    <div class="card ">

        <div class="card-body">
          <p class="card-text">Add Admin</p>
        </div>
      </div>
</div>
<div class="container" style="padding-top: 2%">
<form action="{{ url('admin/management/store')}}" method="POST">
    @csrf
        
        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1">Name</label>
          <input type="text" name="name" class="form-control"  placeholder="name">
        </div>
        <br>
        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1">Email</label>
          <input type="text" name="email" class="form-control"  placeholder="email">
        </div>
        <br>
       
        <div class="form-group" style="margin-top: 2%;">
          <label for="exampleFormControlInput1"> Password</label>
          <input type="text" name="password" class="form-control"  placeholder="password">
        </div>
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>

    </form>

<table class="table" border="2px">
  
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  @foreach($admin as $item)
  <tbody>
    <tr>
      <th scope="row">*</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->password}}</td>
  
    <td ><button style="background-color: pink;"><a href="{{url('admin/management/delete/'.$item->id)}}" class="btn btn-danger btn-xs">Delete</a>
   </button>
   </td>
 @endforeach
 </tr>
  </tbody>
 </table>
 <td ><button style="background-color: blue;"><a href="{{route('admindashboard')}}">back</a>
  </button>
</div>
        
</form>
</div>

@endsection