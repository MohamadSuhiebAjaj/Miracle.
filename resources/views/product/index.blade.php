  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
  </head>
  <body>
    <div style="margin-top:2%;">
  <h2> all Products</h2> 
  <td ><button style="background-color: pink;"><a href="{{route('products.create')}}">  create</a>
  </button>
  </td>
  <br>
  <br>
  <table>
  @foreach($products as $item)
  <tr>
   <div style="width: 100px;">
   <td >{{$item->price}}</td></div>
   <div style="width: 100px;">
   <td >{{$item->price_sell}}</td></div>
   <div style="width: 100px;">
   <td ><img src="{{asset('assets/uploads/product/'.$item->photo) }}" 
    width="50px"></td></div>
   <div style="width: 100px;">
   <td >{{$item->description_ar}}</td></div>
   <div style="width: 100px;">
   <td >{{$item->description_en}}</td></div>
   <td>
   <div class="btn-group">
   <td ><button style="background-color: pink;"><a href="{{url('admin/product/delete/'.$item->id)}}" class="btn btn-danger btn-xs">Delete</a>
   </button>
   </td>
   <td ><button style="background-color: pink;"><a href="{{url('admin/product/edit/'.$item->id)}}" class="btn btn-primary btn-xs">Edit</a>
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