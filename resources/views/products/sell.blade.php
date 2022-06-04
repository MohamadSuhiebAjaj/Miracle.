<!doctype html>
<html >
<head>
    <meta charset="utf-8">
    <meta >
<title> econmec </title>
    <!-- Scripts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>
<body>
<section class="hero is-info is-small">
<div class="hero-head">
<nav class="navbar"> 
   <div class="container">
    <div id="navbarMenuHeroB" class="navbar-menu">
        <div class="navbar-end">
         <a class="navbar-item" href="{{ route('home.welcome') }}">
        {{ __('home') }}
        <a class="navbar-item" href="{{ route('cart.show') }}">
        {{ __('cart') }}
        </a>
        </a>
     @guest
      @if (Route::has('login'))
      <a class="navbar-item" href="{{ route('login') }}">
        {{ __('login') }}

     </a>
     @endif                     

     @if (Route::has('register'))
     <a class="navbar-item" href="{{ route('register') }}">
        {{ __('register') }}</a>
     @endif                       
     @endguest
         </div>
        </div>
      </div>
    </nav>
  </div>
  <div class="hero-body">
    <div class="container has-text-centered">
      <p class="title">
        Title
      </p>
      <p class="subtitle">
        Subtitle
      </p>
    </div>
  </div>
</section>
<div class="columns ">
   @if( $product-> count()>0)
  @foreach($product as $item)
  @if( $item->count>0)
  <div class="column  is-one-quarter " >
   <div class="card" style="margin-top: 8%;margin-left:8%;">
    <div class="card-image">
      <figure class="image is-4by3">
       <img src="{{asset('uploads\products')}}\{{$item->photo}}" alt="{{$item->name_er}}">
      </figure>
    </div>
    <div class="content" style="margin-top: 4%;margin-left:4%;">
      {{ $item->name_ar}} : ({{$item->name_er}})
    <div class="content"style="margin-top: 2%;margin-left:4%;">
      price:{{ $item->price}}$
      <br>
      price_sell{{$item->price_sell}}$
      <br>
        <button class="button is-danger is-outlined is-small"><a href="{{route('product.show',['id'=>$item->id])}}">more</a></button>
        <button class="button is-danger is-outlined is-small"style="margin-left:2%;">buy</button>
   </div>
   </div>
</div>
</div>
   @endif
   @endforeach
   @else
   <div class="container">
  <div class="notification is-danger"style="margin-top: 4%;margin-left:4%;">
    no any products
  </div>
</div>
   @endif
</div>
</body>
</html>