<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group first </title>
  </head>
  <body>
    <div style="margin-top:2%;">
  <h2> All Department</h2> 
  <td ><button style="background-color: pink;"><a href="{{route('group_fs.create')}}">  create</a>
  </button>
  </td>
  <br>
  <br>
  <table class="table" border="2px">
  
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name AR</th>
      <th scope="col">Name En</th>
      <th scope="col">Photo</th>
    </tr>
  </thead>
  @foreach($group_fs as $item)
  <tbody>
    <tr>
      <th scope="row">*</th>
      <td>{{$item->name_ar}}</td>
      <td>{{$item->name_en}}</td>
      <td><img src="{{asset('assets/uploads/group_fs/'.$item->photo_g) }}" width="50px"></td>
  
    <td ><button style="background-color: pink;"><a href="{{url('admin/gfs/delete/'.$item->id)}}" class="btn btn-danger btn-xs">Delete</a>
   </button>
   </td>
   <td ><button style="background-color: pink;"><a href="{{url('admin/gfs/edit/'.$item->id)}}" class="btn btn-primary btn-xs">Edit</a>
   </button>
   </td>
   

 @endforeach
 </tr>
  </tbody>
 </table>
</div>

<br>
<td ><button style="background-color: pink;"><a href="{{route('admindashboard')}}">back</a>
  </button>
  </body>
  </html>