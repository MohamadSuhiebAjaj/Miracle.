<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="product/style.css">
    <!-------icons------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>MIRACLE</title>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <style>
           a{
            text-decoration: none;

           }
       </style>
  </head>
<body>
<header>  

    
    
    <a href="{{ route('home.welcome') }}" class="logo"> miracle <span>.</span></a>
    <div class="icons">
        <a href="#" class="fas fa-heart"> </a>
        <a href="{{ route('cart.show') }}" class="fas fa-shopping-cart"> </a>
        @guest
      @if (Route::has('login'))
      <a class="fas fa-user" href="{{ route('login') }}">
     </a>
     @endif 
     @endguest 
    </div>
  </header>
  <section class="home" >
    <div class="content">
    </div>
  
    
</section>


<section class="product" id="product">
    <h1 class="heading">latest <span>product ...</span></h1>
    <div class="box-container">
            <!---------------------------------->
            @foreach($product as $item)
        <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="{{asset('uploads\products')}}\{{$item->photo}}" alt="{{$item->name_er}}">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="{{route('product.show',['id'=>$item->id])}}" class="cart-btn">info</a>
                    <a href="{{route('cart.add',['id'=>$item->id])}}" class="fas fa-shopping-cart"></a>

                </div>
            </div>
            <div class="content">
                <div class="price"> {{item->price}}$</div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<footer>
    <ul class="social-icon">
        <li><a href="#"><i class="fab fa-facebook-f" ></i></a></li>
        <li><a href="#"><i class="fab fa-twitter" ></i></a></li>
        <li><a href="#"><i class="fab fa-instagram" ></i></a></li>
        <li><a href="#"><i class="fab fa-youtube" ></i></a></li>

    </ul>
    <ul class="menu">
        <li><a href="#">home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">services</a></li>
        <li><a href="#">team</a></li>

    </ul>
    <p>2022 online shop for kids | welcome </p>
</footer>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>
