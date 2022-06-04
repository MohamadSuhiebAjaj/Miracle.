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
  <h2> all_products</h2> 
  <button style="background-color: red;"><a href="{{route('products.create')}}"> create</a>
  </button>
  <br>
  <table>
  <table >
  
  <tr>
    <div style="width: 100px;">
   <td >{{'name_ar'}}</td></div>
   <div style="width: 100px;">
   <td >{{'name_en'}} </td></div>
   <div style="width: 100px;">
   <td >{{'price'}}</td></div>
   <div style="width: 100px;">
   <td ><img src="{{asset('upload')}}/{{'photo'}}" 
    width="50px"></td></div>
    <div style="width: 100px;">
   <td >{{'count'}}</td></div>
   <div style="width: 100px;">
   <td >{{'message'}}</td></div>
   <div style="width: 100px;">
   <td >{{'content_ar'}}</td></div>
 </tr>
 </tbody>
 
  </table>
</div>
  </body>
  </html>