<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="section/style2.css">
    <!-------icons------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>MIRACLE</title>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        :root {
            --pink: #01707c;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            outline: none;
            border: none;
            text-decoration: none;
            text-transform: capitalize;
            transition: 0.2s linear;
        }

        html {
            font-size: 62.5%;
            height: 100vh;
            scroll-behavior: smooth;
            scroll-padding-top: 6rem;
            overflow-x: hidden;
        }



        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: #dcdcdcb3;
            padding: 2rem 7%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 1000;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);

        }

        header .logo {
            font-size: 3rem;
            color: #333;
            font-weight: bolder;
            text-decoration: none;
        }

        header .logo span {
            color: var(--pink);

        }

        header .navbar a {
            font-size: 2rem;
            padding: 0 1.5rem;
            color: #666;
            text-decoration: none;
        }

        header .navbar a:hover {
            color: var(--pink);
        }

        header .icons a {
            font-size: 3rem;
            color: #333;
            margin-left: 1.5rem;
            text-decoration: none;
        }

        header .icons a:hover {
            color: var(--pink);
        }

        header #toggler {
            display: none;
        }

        header .fa-bars {
            font-size: 3rem;
            color: #333;
            border-radius: .5rem;
            padding: .5rem 1.5rem;
            cursor: pointer;
            border: .1rem solid rgba(0, 0, 0, .3);
            display: none;

        }

        /**************************************/
        .wrappe .button {
            display: inline-block;
            height: 60px;
            width: 60px;
            float: left;
            overflow: hidden;
            margin: 0 5px;
            background: #f0c7d9;
            border-radius: 50px;
            cursor: pointer;
            box-shadow: 0 10px 10px rgba(0, 0, 0, .5);
            transition: all 0.3s ease-out;
        }

        .wrappe .button:hover {
            width: 150px;
        }




        .wrappe .button .icon {
            display: inline-block;
            height: 60px;
            width: 60px;
            text-align: center;
            border-radius: 50px;
            box-sizing: border-box;
            line-height: 60px;
            transition: all 0.3s ease-out;

        }

        .wrappe .button:hover .icon {
            background-color: rgb(196, 209, 209);
        }

        .wrappe .button span {
            font-size: 17px;
            font-weight: 500;
            color: var(--pink);
            line-height: 60px;
            margin-left: 10px;
            transition: all 0.3s ease-out;
            position: relative;
            top: -40%;
        }

        /***********************************/

        .wrapper {
            position: absolute;
            width: 100vw;
            height: 100vh;
            background-size: cover;
            background-position: center;

        }

        .wrapper img {
            width: 100%;
            height: 100%;

        }

        .info {
            margin: 0;
            padding: 0;
            position: absolute;
            top: 20rem;
            left: 10rem;

        }

        .section {
            margin: 0;
            width: 20rem;
            display: flex;
            flex-wrap: nowrap;
        }

        .section h1 {
            font-size: 7rem;
            font-family: cursive;
            font-weight: 400;
            color: #8b828198;
            -webkit-text-stroke: 0.3vw var(--pink);
            text-transform: uppercase;

        }

        .details {
            margin-top: 3%;
            width: 40%;
        }

        .container {
            width: 50rem;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: row;
            position: relative;
            top: 70%;
            left: 10rem;
            flex-wrap: wrap;
            gap: 1.5rem;
        }

        /*
.box{

    width: 10%;
    margin: 1% 1%;
    transition: 0.5s;
    box-shadow: 0.2rem 0.2rem rgba(0, 0, 0, .2);
    border-radius: .5rem;
    border: .2rem solid rgba(0, 0, 0, .1);
    position: relative;
}
.box img{
    display: block;
    width: 100%;
    height: 100%;
    border-radius: 5px;
    cursor: pointer;

}*/
        .icon img {
            display: block;
            width: 100%;
            height: 100%;
            border-radius: 5px;
            cursor: pointer;

        }

        .button {
            transform: rotateY(90deg);
            animation: twirl 0.5s 0.5s ease-out forwards reverse;
        }

        @keyframes twirl {
            0% {
                transform: rotateY(0deg);
            }

            100% {
                transform: rotateY(90deg);
            }
        }

        .button:hover {
            transform: scale(2);
            box-shadow: 0 0 3px .5px var(--pink);
            z-index: 2;
        }



        @media(max-width:991px) {
            html {
                font-size: 55%;

            }

            header {
                padding: 2rem;
            }
        }

        @media(max-width:768px) {
            header .fa-bars {
                display: block;
            }

            header .navbar {
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: #eee;
                border-top: .1rem solid rgba(0, 0, 0, .1);
                clip-path: polygon(0% 0%, 100% 0%, 100% 0%, 0% 0%);
            }

            header #toggler:checked~.navbar {
                clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%);

            }

            header .navbar a {
                margin: 1.5rem;
                padding: 1.5rem;
                background: #fff;
                border: .1rem solid rgba(0, 0, 0, .1);
                display: block;
            }

            .container {
                width: 200%;
                padding: 0;
                margin: 0;
                display: flex;
                flex-direction: row;
                justify-content: center;
                position: relative;
                top: 70%;
                left: -50%;
            }

            .wrapper img {
                width: 10000%;
                height: 100%;

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
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
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

    <div class="wrapper">
        <img src="{{asset('uploads\group')}}\{{$dep->photo_g}}">
        <div class="info">
            <div class="section">
                <h1>{{$dep->name_er}}</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="wrappe">
            @foreach($groups as $item)
            <div class="button">
                <div class="icon">
                    <a href="{{route('group.show.product',['type_id'=>$item->id])}}">
                        <img src="{{asset('uploads/groups')}}/{{$item->photo}}" alt="{{$item->name_er}}">
                </div>
                <span> {{$item->name_en}} </span>
            </div>
            @endforeach

        </div>
    </div>
</body>

</html>