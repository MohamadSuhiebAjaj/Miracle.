<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="/style.css">
        <!-------icons------>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <title>MIRACLE</title>
       <style>
           a{
            text-decoration: none;

           }
           :root{
    --pink:#01707c;
} 

* {
    margin: 0; padding: 0;
    box-sizing: border-box;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    outline: none; border: none;
    text-transform: capitalize;
    transition: 0.2s linear;
    text-decoration: none;

}
html{
    font-size: 62.5%;
    height: 100vh;
    scroll-behavior: smooth;
    scroll-padding-top: 6rem;
    overflow-x: hidden;
}

section{
    padding: 2rem 9%;

}

.btn{
    position:absolute;
    margin-top: 1rem;
    border-radius: 10rem;
    background: #333;
    color: #fff;
    padding: .9rem 3.5rem;
    cursor: pointer;
    font-size: 1.7rem;
    width: 8%;
    height: 10%;
    top: 100;
    left: 10;

}
.btn img{
    width: 100%;
    height: 100%;
}

.btn:hover{
    background-color: var(--pink);
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
header .icons a:hover{
    color: var(--pink);
}
header .icons a{
    font-size: 3rem;
    color: #333;
    margin-left: 1.5rem;


}

header .navbar a:hover{
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
/*************************************************/


.home{
   
    min-height: 10vh;
    background-color: #ebfaf8;
    background-position: center;
    background-attachment: fixed;
    height: 10vh;
    width: 100vw;

}

/************************/
.product{
    background-color: rgba(243, 240, 240, 0.822);
}
.wrapper{
    max-width: 1000px;
    margin: 0 auto;
}
.wrapper h1{
    padding: 30px 0;
    text-align: center;
    text-transform: uppercase;
}
.project{
    display: flex;
}
.shop{
    flex: 75%;
}
h1{
    color: var(--pink);
    font-weight: 800;
}
.box{
    display: flex;
    width: 110%;
    height: 22rem ;
    overflow: hidden;
    margin-bottom: 2rem;
    background: rgb(255, 255, 255);
    transition: all .6s ease;
    box-shadow: 0.3rem .3rem .3rem .3rem rgba(0, 0, 0, .2);
}

.box:hover{
    transform: scale(1.02);
}

.box img{
    width: 30rem ;
    height: 20rem;
    object-fit: cover;
}
.content{
    padding: 3rem;
    position: relative;
    width: 100%;

}
.content h3{
    margin-bottom: 2rem;
    font-size: 20px;
    color: var(--pink);

}
.content h4{
    margin:0 0  10px 15px;
    color: #333;
    font-size: 15px; 
    text-transform:inherit;

}
.content h4 span{
    color: #666;

}
.btn-area{
    position: absolute;
    bottom: 20px;
    right: 20px;
    color: #fff;
    cursor: pointer;
    border-radius: 10px;
    width: 100px;
    height: 40px;
    padding-top: 10px;
    text-align: center;
    font-size: 15px;
    background-color: var(--pink);

}
.btn-area2{
        position: absolute;
        bottom: 20px;
        right: 130px;
        color: #fff;
        cursor: pointer;
        border-radius: 10px;
        width: 100px;
        height: 40px;
        padding-top: 10px;
        text-align: center;
        font-size: 15px;
        background-color: var(--pink);
    
}
.btn-area:hover{
    background: rgb(90, 90, 90);
    color: white;
}
.btn-area2:hover{
    background: rgb(90, 90, 90);
    color: white;
}
.unit input{
    width: 40px;
    padding: 8px;
    color: #666;
    background-color: #d4d1d1;
    text-align: center;
}
.btn-area i{
    margin-right: 5px;

}

.right-bar{
    flex: 40%;
    margin-left: 100px;
    padding: 20px;
    height: 400px;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: rgba(100, 100, 111,.2) 0 7px 29px 0; 

}
.right-bar hr{
    margin-bottom: 25px;
}
.right-bar p{
    display: flex;
    justify-content: space-between;
    margin-bottom: 30px;
    font-size: 20px;
}
.right-bar a{
    color: #fff;
    text-decoration: none;
    display: block;
    text-align: center;
    height: 40px;
    line-height: 40px;
    font-weight: 900;
    cursor: pointer;
    border-radius: 10px;
    font-size: 15px;
    background-color: var(--pink);

}

.right-bar i{
margin-right: 15px;

}
.right-bar a:hover{
    background: rgb(90, 90, 90);

}
.right-bar p .addres{
    color: var(--pink);
    
}
@media screen and (max-width: 700px){

    .content h3{
        margin-bottom: 15px;

    }
    .content h4{
        margin-bottom: 10px;

    }
    .btn-area{
        width: 50px;
        display: none;
        right: 20px;
        bottom: 10px;
    }

    .content:hover .btn-area {
        display:block ;
    }
    .btn-area2{
        width: 50px;
        display: none;
        right: 20px;
        top: 105px;
    }
    .content:hover .btn-area2 {
        display:block ;
    }
    .btn2{
        display: none;

    }
    .box{
        width: 100%;
        height: 220px;
    }
    .box img{
        height: 150px; 
        width: 200px;
        
    }


}

@media screen and (max-width: 900px){
    .project{
        flex-direction: column;

    }
    .right-bar{
        margin-left: 0;
        margin-bottom: 20px;

    }

.box{
        width: 100%;
        height: 220px;
    }
    .btn2{
        display: none;

    }
    .btn-area{
        width: 50px;
        display: none;
    }

    .content:hover .btn-area {
        display:block ;
    }
    .btn-area2{
        width: 50px;
        display: none;
        right: 20px;
        top: 105px;
    }
    .content:hover .btn-area2 {
        display:block ;
    }
}

@media screen and (max-width: 1250px){
.wrapper{
    max-width: 95%;
}
.btn-area{
    width: 50px;
    display: none;
    position: absolute;
    bottom: 50%;
}
.btn2{
    display: none;

}
.content:hover .btn-area {
    display:block ;
}
.btn-area2{
    width: 50px;
    display: none;
    position: absolute;
    right: 20px;
    top: 105px;
}
.content:hover .btn-area2 {
    display:block ;
}

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
    
.product h1{
    left: 0rem;
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
    <section class="home" >
        <div class="content">
        </div>
    </section>
    <section class="product" id="product">
    <div class="wrapper">
        <h1>SHOPPING Cart</h1>
        <div class="project">
            <div class="shop">
            @foreach($product as $product)
              <!---------------------------->
              <div class="box">
                <img src=="{{asset('uploads\color')}}\{{ $items1->photo_color}}" alt="">
                <div class="content">
                    <h3> colorfu dress</h3>
                    <h4>Size :<span> {{ $items2->size_number}} year</span></h4>
                    <h4>Price  : <span> $ {{ $product->price}}</span></h4>
                    <h4 class="unit">Quantity: <input type="number" value="1" ></h4>
                    <p class="btn-area">
                        <i class="fa fa-trash"></i>
                        <spn class="btn2">Remove</spn>
                    <p class="btn-area2">
                        <i class="fa fa-edit"></i>

                        <spn class="btn2">Edit</spn>
                    </p>
                </div>
            </div>
            @endforeach
            </div>
            <div class="right-bar">
                <p><span class="addres">Cart Sub Total </span> <span>$120</span></p>
                <hr>
                <p><span class="addres">Tax</span> <span>$6</span></p>
                <hr>
                <p><span class="addres">Shopping Cost </span> <span>Free</span></p>
                <hr>
                <p><span class="addres">Total </span> <span>$151</span></p>
                
                <a href="{{ route('checkout.index') }}"> <i class=" fa fa-shopping-cart"> </i>Checkout</a>
            </div>
        </div>
    </div>
</section>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>