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
    <style>
           a{
            text-decoration: none;

           }
           :root{
    --pink:#01707c;
} 
body{
background-color: black;
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
    display: flex;
    align-items: center;
    min-height: 10vh;
    background-image: url('{{asset('background.jpg')}}');
    background-repeat: no-repeat;
    background-color: #acc0be;
    background-position: right;
    background-attachment: fixed;
    height: 70vh;

}

.product{
background-color: #f1f1f1;
} 

.home .content  h3{
    font-size: 6rem;
    font-family: cursive;
    font-weight: 400;
    color: #a5969462;
    -webkit-text-stroke: 0.3vw var(--pink);

}


.product .box-container{
display: flex;
flex-wrap: wrap;
gap: 1.5rem;

}
.product h1{
    font-size: 4rem;
    font-weight: 300;
    margin: 2%;
}
.product h1 span{
    color: var(--pink);
}
.product .box-container .box{
    flex: 1  1 30rem;
    box-shadow: 0.5rem 1.5rem rgba(0, 0, 0, .1);
    border-radius: .5rem;
    border: .1rem solid rgba(0, 0, 0, .1);
    position: relative;
}

.product .box-container .box .discount{
    position: absolute;
    top: 1rem; left: 1rem;
    padding: .7rem 1rem;
    font-size: 2rem;
    color: var(--pink);
    background: rgba(255, 51,153, .05);
    z-index: 1;
    border-radius: .5rem;
}

.product .box-container .box .image{
    position: relative;
    text-align: center;
    padding-top: 2rem;
    overflow: hidden;
}

.product .box-container .box .image img{
height: 25rem;
}

.product .box-container .box:hover .image img{
    transform: scale(1.1);
}
.product .box-container .box .image .icons{
    position: absolute;
    bottom: -7rem; left: 0; right: 0;
    display: flex;
}
.product .box-container .box:hover .image .icons{
bottom: 0;
}
.product .box-container .box .image .icons a{
height: 5rem;
line-height: 5rem;
font-size: 2rem;
width: 50%;
background: var(--pink);
color: #fff;
}
.product .box-container .box .image .icons .cart-btn{
    border-left: .1rem solid #fff7;
    border-right: .1rem solid #fff7;
    width: 100%;

}
.product .box-container .box .image .icons a:hover{
background: #333;
}

.product .box-container .box .content{
    padding: 2rem;
    text-align: center;

}

.product .box-container .box .content h3{
    font-size: 2.5rem;
    color: #333;
}
.product .box-container .box .content .price{
    font-size: 2.5rem;
    color: var(--pink);
    font-weight: bolder;
    padding-top: 1rem;
}

.product .box-container .box .content .price span{
    font-size: 1.5rem;
    color: #999;
    font-weight: lighter;
    text-decoration: line-through;
}




.contact .row{
    display: flex;
    flex-wrap: wrap-reverse;
    gap: 1.5rem;
    align-items: center;
}

.contact .row form{
    flex: 1 1 40rem;
    padding: 2rem 2.5rem ;
    box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
    border: 1rem solid rgba(0, 0, 0, .1);
    border-radius: .5rem;

    background: #fff;
}
.contact .row .image{
    flex: 1 1 40rem;
    
}
.contact .row .image img{
width: 100%;    
}


.contact .row form .box{
    padding: 1rem ;
    font-size: 1.7rem;
    color: #333 ;
    text-transform: none;
    border: .1rem solid rgba(0, 0, 0, .1);
    border-radius: .5rem;
    margin: .7rem 0;
    width: 100%;

}
.contact .row form .box:focus{
    border-color: var(--pink) ;
}
.contact .row form textarea{
    height: 15rem;
    resize: none;
}


/*************************************************/




footer{
    position: relative;
    width: 100%;
    background-image: linear-gradient(180deg , #f1f1f1,var(--pink) );
    min-height: 300px;
    padding: 20px 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    }
    footer .social-icon 
    , .menu{
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 10px 0;
        flex-wrap: wrap;
    }
    footer .social-icon li , .menu li {
        list-style: none;
    }
    
    
    
    
    footer .social-icon li a 
     {
    font-size: 2rem;
    color: aliceblue;
    margin: 0 10px; display: inline-block;
    transition: .5s;
    }
    .menu li a {
        font-size: 1.2rem;
        color: aliceblue;
        margin: 0 10px;
         display: inline-block;
         text-decoration: none;
        opacity: 0.75;
        }
    
        .menu li a:hover {
        
        opacity: 1;
        }
    
    
    footer .social-icon li a:hover{
    transform: translateY(-10px);
    }
    
    footer p{
        color: aliceblue;
        text-align: center;
        margin-top: 15px;
        margin-bottom: 10px;
        font-size: 1.1em;
    }





/******************************************/

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
            @foreach($items as $item)
        <div class="box">
            <div class="image">
                <img src="{{asset('uploads\products')}}\{{$item->photo}}" alt="{{$item->name_er}}">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="{{route('product.show',['id'=>$item->id])}}" class="cart-btn">info</a>
                    <a href="{{route('cart.add',['id'=>$item->id])}}" class="fas fa-shopping-cart"></a>

                </div>
            </div>
            <div class="content">
                <div class="price"> {{$item->price}}$</div>
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
