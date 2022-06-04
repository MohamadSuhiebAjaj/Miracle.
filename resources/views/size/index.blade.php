<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sizes</title>
  </head>
  <body>
    <div style="margin-top:2%;">
  <h2> All sizes</h2> 
  <td ><button style="background-color: pink;"><a href="{{route('sizes.create')}}">  create</a>
  </button>
  </td>
  <br>
  <br>
  <table>
  <table >
  @foreach($size as $item)
  <tr>
    <div style="width: 100px;">
   <td >{{$item->size_number}}</td></div>
   <div style="width: 100px;">
   <td >{{$item->size_code}} </td></div>
   <div style="width: 100px;">
   <td >{{$item->count}}</td></div>
   <div style="width: 100px;">
   <div class="btn-group">
   <td ><button style="background-color: pink;"><a href="{{url('admin/size/delete/'.$item->id)}}" class="btn btn-danger btn-xs">Delete</a>
   </button>
   </td>
   <td ><button style="background-color: pink;"><a href="{{url('admin/size/edit/'.$item->id)}}" class="btn btn-primary btn-xs">Edit</a>
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
  
   
   
  