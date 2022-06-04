<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Secondary</title>
  </head>
  <body>
    <div style="margin-top:2%;">
  <h2> All Group Secondary</h2> 
  <br>
  <td ><button style="background-color: pink;"><a href="{{route('group_s.create')}}">  create</a>
  </button>
  </td>
  <br>
  <br>
  <table>
  <table >
  @foreach($product_type as $item)
  <tr>
    <div style="width: 100px;">
   <td >{{$item->name_ar}}</td></div>
   <div style="width: 100px;">
   <td >{{$item->name_en}}</td></div>
   <div style="width: 100px;">
   <td ><img src="{{asset('assets/uploads/group_s/'.$item->photo) }}"
    width="50px"></td></div>
   </td></div>
   <div class="btn-group">
    <td ><button style="background-color: pink;"><a href="{{url('admin/gs/delete/'.$item->id)}}" class="btn btn-danger btn-xs">Delete</a>
   </button>
   </td>
   <td ><button style="background-color: pink;"><a href="{{url('admin/gs/edit/'.$item->id)}}" class="btn btn-primary btn-xs">Edit</a>
   </button>
  </td>
  </div>
 
 </tr>
 </tbody>
 @endforeach
  </table>
</div>
<br>
<td ><button style="background-color: pink;"><a href="{{route('admindashboard')}}">back</a>
  </button>
  </body>
  </html>