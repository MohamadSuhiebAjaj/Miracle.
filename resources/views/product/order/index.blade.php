<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordes</title>
  </head>
  <body>
    <div style="margin-top:2%;">
  <h2> All Orders</h2> 
  <td ><button style="background-color: pink;"><a href="{{route('orders.create')}}">  create</a>
  </button>
  </td>
  <br>
  <br>
  <table class="table" border="1px">
  
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">User Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Address</th>
      <th scope="col">Price</th>
      <th scope="col">Price Total</th>
    </tr>
  </thead>
  
  @foreach($order as $item)
  <tbody>
  <tr>
  <th scope="row">*</th>
      <td>{{$item->user_name}}</td>
      <td>{{$item->number_phone}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->price}}</td>
      <td>{{$item->price_total}}</td>
   </div>
   <div class="btn-group">
   <td ><button style="background-color: pink;"><a href="{{url('admin/order/item/'.$item->id)}}">show</a>
  </button>
   <td ><button style="background-color: pink;"><a href="{{url('admin/order/delete/'.$item->id)}}" class="btn btn-danger btn-xs">Delete</a>
   </button>
   </td>
   <td ><button style="background-color: pink;"><a href="{{url('admin/order/edit/'.$item->id)}}" class="btn btn-primary btn-xs">Edit</a>
   </button>
  </td>
  </div>
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