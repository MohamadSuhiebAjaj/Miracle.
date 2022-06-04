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
body{
    background-color: rgba(207, 206, 206, 0.589);
    font-family:serif;
   
}
.signup-box{
    width: 360px;
    height: 380px;
    position: absolute;
    left: 35%;
    right: 35%;
    top: 8%;
    bottom: 0%;
    background-color: rgb(255, 255, 255);
    border-radius: 10px;

}
h1{
    text-align: center;
    padding-top: 20px;
    color: var(--pink);
}

form{
    width: 300px;
    margin-left:  20px;
    
}


form input{
    margin-top: 10px;
    width: 100%;
    padding: 10px;
    border-radius: 3px;
    outline: none;
    border: none;
    background-color: #dbd6d6;
}
button{
    width: 100px;
    height: 35px;
    margin-left: 35%;
    margin-top: 40px;
    text-align: center;
    font-size: 18px;
    cursor: pointer;
    color: white;
    background-color: var(--pink);

}

button:hover{
    background: rgb(90, 90, 90);
    color: white;
}
form a{
    text-decoration: none;
    position: relative;
    top: 10;
    right:  -180;
    font-size: 12px;
}

p{
    text-align: center;
    padding: 20px;
    font-size: 15px;
}
.para-2{
    text-align: center;
    color: #333;
    font-size: 15px;
    position: absolute;
    top: 81%;
    left: 32%;
    right: 32%;

}

.para-2 a{
    color: var(--pink);
}
/***************************************/
</style>
<body>
<div class="signup-box">
        <h1>REGISTER</h1>
                    <form method="POST" action="{{ route('register') }}"  placeholder="First name" autofocus required >
                        @csrf
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  placeholder="last name" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required   placeholder="E-mail" autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password"  autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                                <input  id="password-confirm" type="password"class="form-control" name="password_confirmation"  placeholder="Confirm Password"  required>
                                <button type="submit"   value="signup" > register</button>
                    </form>
                    </div>
                    <p class="para-2">Already havean account? <a href="{{ route('login') }}">loge in here</a></p>
</body>
</html>