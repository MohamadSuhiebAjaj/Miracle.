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
/*********** end nav ***************/

.small-container{
    max-width: 900px;
    margin: auto;
    padding-left:25px ;
    padding-right: 25px;
}

.row{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-around;
}

.single-product{
    margin-top: 80px;
}

.small-img-row{
    display: flex;
    justify-content: space-around;
}

.col-2 img{
    max-width: 100%;
    padding: 50px 0;
}

.small-img-col{
    flex-basis: 24%;
    cursor: pointer;
}

.single-product .col-2 img{
    padding: 0;
}

.single-product .col-2{
    padding: 20px;
}

.col-2{
    flex-basis: 50%;
    min-width: 300px;
}

.info{
    background: rgb(238, 237, 237);
    height: 150%;
}

.col-2 h1{
    font-size: 50px;
    line-height: 60px;
    margin: 25px 0;
    font-weight: 600;
}
.single-product select{
    display: block;
    padding: 10px;
    margin: 20px 0;
    font-size: larger;
    color:var(--pink);
    background-color: rgb(218, 218, 218);
}
label{
    color: #01707c;
    font-size:15px ;


}

.single-product select option{
    color: #fff;
    background-color:#666;
}
.single-product select option:hover{
    background-color:var(--pink);
}

.single-product h4{
    margin: 20px 0;
    font-size: 22px;
    font-weight: bold;
    color: var(--pink);
}
.single-product input{
    width: 50px;
    height: 40px;
    padding-left: 10px;
    font-size: 20px;
    margin-right: 10px;
    border: 1px solid #666;

}
p{
    font-size: 15px;
}
input:focus {
outline: none;
}

.single-product .fas{
    color: var(--pink);
    font-size: 25px;
    text-decoration: none;
    margin-left: 10px;
    
}



button {
  padding: 10px;
    margin-top: 40px;
    text-align: center;
    color: white;
    font-size: 18px;
    cursor: pointer;
    background-color: var(--pink);

}

.single-product .fas:hover{
    color: #666;
}
    button:hover{
    color: white;
    background-color: var(--pink);
    background: #666;

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
     @endguest 
    </div>
  </header>
  <form action="{{ url('add-to-cart/'.$item->id)}}" >
      @csrf
    @method('POST')
<div class="small-container single-product">
<div class="row">
    <div class="col-2">
        <img src="{{asset('uploads\products')}}\{{$item->photo}}" alt="" width="100%" id="ProductImg">
        <!--<input type="text" value="" onchange="updateInput(this.value)" />-->
        <div class="small-img-row">
        @foreach($colors as $items1)
            <div class="small-img-col">
                <img src="{{asset('uploads\color')}}\{{ $items1->photo_color}}"alt="" class="small-img" width="100%">
            </div>
            @endforeach
            <div class="small-img-col">
                <img src="{{asset('uploads\products')}}\{{$item->photo}}" alt="" class="small-img" width="100%">
            </div>
        </div>
    </div>
    <div class="col-2 info">
        <h1>colorfull dress</h1>
        <h4><span>$</span>{{ $item->price}}</h4>
        <select >
            <option value="">select size</option>
            @foreach($sizes as $items2)
            <option value="{{ $items2->id}}">{{ $items2->size_number}} year</option>
        @endforeach
          </select>
      <a href="{{route('cart.add',['id'=>$item->id])}}"class="fas fa-shopping-cart">  add to cart</a>
    </div>
</div>
</div>
</form>
 <script>
     var ProductImg=document.getElementById("ProductImg");
     var smallimg= document.getElementsByClassName("small-img");
     for(let i=0; i< smallimg.length;i++){
      smallimg[i].onclick = function(){
         ProductImg.src = smallimg[i].src;
      }
      function updateInput(ProductImg){
      document.getElementById("fieldname").value = ProductImg;
  }
     }
 </script>
</body>
</html>