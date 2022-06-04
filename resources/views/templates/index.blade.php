
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Image Classification</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h1 class="jumbotron bg-primary">Image Classfication</h1>
  <br><br>
  <form class="form-horizontal" action="/submit" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Upload Your Image :</label>
      <div class="col-sm-10">          
        <input type="file" class="form-control" placeholder="Hours Studied"  name="my_image" id="pwd">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </form>
	{%if prediction%}
  <img src="{{img_path}}" height="400px" width="400px">
	<h2> Your Prediction   : <i> {{prediction}} </i></h2>
	{%endif%}
</div>
</body>
</html>