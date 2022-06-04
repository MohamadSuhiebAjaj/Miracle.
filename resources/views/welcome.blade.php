<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="home/css/style.css">
    <!-------icons------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>MIRACLE</title>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
<style>
  :root{
    --pink:#01707c;
} 

* {
    margin: 0; padding: 0;
    box-sizing: border-box;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    outline: none; border: none;
    text-decoration: none;
    text-transform: capitalize;
    transition: 0.2s linear;
}
html{
    font-size: 62.5%;
    height: 100vh;
    scroll-behavior: smooth;
    scroll-padding-top: 6rem;
    overflow-x: hidden;
}


header{
    position: fixed;
    top: 0; left: 0; right: 0;
    background: #dcdcdcb3;
    padding: 2rem 7%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 1000;
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);

}
 header .logo{
     font-size:3rem ;
     color: #333;
     font-weight: bolder;
    text-decoration: none;
 }

 header .logo span{
     color: var(--pink);

 }
header .navbar a{
   font-size: 2rem;
   padding: 0 1.5rem;
   color: #666;
   text-decoration: none;
}
header .navbar a:hover{
   color: var(--pink);
}
header .icons a{
   font-size: 3rem;
   color: #333;
   margin-left: 1.5rem;

}

header .icons a:hover{
   color: var(--pink);
}

header #toggler{
   display: none;
}

header .fa-bars{
   font-size: 3rem;
   color:#333 ;
   border-radius: .5rem;
   padding: .5rem 1.5rem;
   cursor: pointer;
   border: .1rem solid rgba(0, 0, 0, .3);
   display: none;

}



.carousel-inner{
    margin: 0;
    padding: 0;
    width: 100vw;
    height: 100vh;
    
}

.carousel-item{
    height: 100vh;
    min-height: 1rem;
    background: no-repeat scroll center;
    -webkit-background-size: cover ;
    background-size: cover;

}

.carousel-caption .logo{
    width: 20rem;
    height: 15rem;
    position: absolute;
    top: 2rem;
    left: 70rem;
}

.carousel-item::before{
    content: '';
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background-color: rgb(0, 0, 0);
    opacity: 0.05;
}
#carousel-item-home{
    bottom: 10rem;
    left: -60rem;
    transition: 0.2s linear;
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-top: calc(var(--bs-gutter-y) * -1);
    margin-right: calc(var(--bs-gutter-x) * -.5);
    margin-left: calc(var(--bs-gutter-x) * -.5);

}

.carousel-caption{
    bottom: 10rem;
    padding-left: 10rem; 
    padding-right: 10rem;
    bottom: 3rem;
    left: -65rem;

}

.carousel-item h1{
    font-size: 9rem;
    font-family: cursive;
    font-weight: 400;
    color: #a59694b9;
    -webkit-text-stroke: 0.3vw var(--pink);
    text-transform: uppercase;
    
}

.carousel-item h3{
    -webkit-text-stroke: 0.3vw var(--pink);
    display: inline-block;
    position: relative;
    padding-left: 0;
    padding-right: 0;
    font-size: 7rem;
    font-weight: 500;
    font-family: cursive;
}

.slider-btn .btn{
    display: inline-block;
    margin-top: 1rem;
    border-radius: 5rem;
    background: #333;
    color: #fff;
    padding: .9rem 3.5rem;
    cursor: pointer;
    font-size: 1.7rem;

}

.btn:hover{
    color: #333;
    background-color: var(--pink);
}


.carousel-caption .paragraph{
    font-size:2rem;
    top: 2rem;
    color:var(--pink);

}

@media(max-width:991px){
    html{
        font-size: 55%;

    }
    header{
        padding: 2rem;
    }

    section{
        padding: 2rem;
    }
    .home{
        background-position: left;
    }
    
.carousel-item h1{
    font-size: 6rem;
    font-weight: 300;
}

.carousel-item h3{
    font-size: 7rem;
    font-weight: 200;
}

}

@media(max-width:768px){
    header .fa-bars{
        display: block;
    }
    header .navbar{
        position: absolute;
        top:100%; left: 0; right: 0;
        background: #eee;
        border-top: .1rem solid rgba(0, 0, 0, .1);
        clip-path: polygon(0% 0%, 100% 0% , 100%  0% , 0% 0%);
    }
    header #toggler:checked ~.navbar{
        clip-path: polygon(0% 0%, 100% 0% , 100%  100% , 0% 100%);

    }

    header .navbar a{
        margin: 1.5rem;
        padding: 1.5rem;
        background: #fff;
        border: .1rem solid rgba(0, 0, 0, .1);
        display: block;
    }
    .home .content h3{
        font-size: 5rem;
    }
    .home .content span{
        font-size: 2.5rem;
    }
     
    .home{
        background-size:cover;

    }

.carousel-item h1{
    font-size: 5rem;
    font-weight: 100;
}

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
     @if (Route::has('register'))
     <a class="navbar-item" href="{{ route('register') }}"></a>
     @else
    <li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
    {{ Auth::user()->name }}
    </a>
    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
    {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
     @csrf
   </form>
     </div>
      </li>
     @endif                       
     @endguest
    </div>
  </header>
  <!------- slider bootstrap-------->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" >
            <img src="home/images/9.jpg" class="d-block w-100" alt="..."width="100%" height="100%">
            <div class="carousel-caption d-none d-md-block" >
              <h1 >MIRACLE </h1>
              <p class="paragraph">WELLCOME TO YOUR STORE ☺...</p>
            </div>
          </div>
          @foreach($group as $item)
          <div class="carousel-item">
            <img src="{{asset('uploads\group')}}\{{$item->photo_g}}" class="d-block w-100" alt="{{$item->name_er}}"width="100%" height="100%" >
            <div class="carousel-caption d-none d-md-block" id="carousel-item-home">
              <h3>{{$item->name_er}}</h3>
              <div class="slider-btn">
                <button class="btn btn-1"> <a href="{{route('group.show',['department_id'=>$item->id])}}">see more...</a></button>
              </div>
            </div>
          </div>
            @endforeach
</div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   </body>
</html>