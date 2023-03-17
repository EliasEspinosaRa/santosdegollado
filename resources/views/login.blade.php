<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<style>
    body{
        background: url("https://sites.google.com/site/escuelagralmarianomatamoros/_/rsrc/1591567762113/home/volver-escuela-dibujos-animados-ninos_18591-51482.jpg");
        background-repeat: no-repeat;
        background-size: 100vw 100vh;
        z-index: -3;
        //background-color: #707070;
        font-family: 'Roboto', sans-serif;
        
    }

    .container{
        /*border:1px solid white;*/
        width: 650px;
        height: 400px;
        position: absolute;
        top:50%;
        left:50%;
        transform: translate(-50%, -50%);
        display: inline-flex; 
    }
    .backbox{  
        background: url("https://1.bp.blogspot.com/-ocRBk4vMTt8/XavCJs-6ijI/AAAAAAAAGnU/2O5zLN0Xie8F03Egczy7qfZn__07RakngCLcBGAsYHQ/s640/santos%2Bdegollado.jpg");
        width: 50%;
        height: 65%;
        position: absolute;
        
        transform: translate(0,-50%);
        top:50%;
        display: inline-flex;
    }

    .frontbox{
        background-color: white;
        border-radius: 20px;
        height: 100%;
        width: 50%;
        z-index: 10;
        position: absolute;
        right:0;
        margin-right: 3%;
        margin-left: 3%;
        transition: right .8s ease-in-out;
    }

    .moving{
        right:45%;
    }

    .loginMsg, .signupMsg{
        width: 50%;
        height: 100%;
        font-size: 15px;
        box-sizing: border-box;
    }

    .loginMsg .title,
    .signupMsg .title{
        font-weight: 300;
        font-size: 23px;
    }

    .loginMsg p,
    .signupMsg p {
        font-weight: 100;
    }

    .textcontent{
        color:white;
        margin-top:65px;
        margin-left: 12%;
    }

    .loginMsg button,
    .signupMsg button {
        background-color: #3d02df;
        border: 2px solid white;
        border-radius: 10px;
        color:white;
        font-size: 12px;
        box-sizing: content-box;
        font-weight: 300;
        padding:10px;
        margin-top: 20px;
    }

    /* front box content*/
    .login, .signup{
        padding: 20px;
        text-align: center;
    }

    .login h2,
    .signup h2 {
        color: #3f22c2;
        font-size:22px;
    }

    .inputbox{
        margin-top:30px; 
    }
    .login input, 
    .signup input {
        display: block;
        width: 100%;
        height: 40px;
        background-color: #f2f2f2;
        border: none;
        margin-bottom:20px;
        font-size: 12px;
    }

    .login button,
    .signup button{
        background-color: #5b1deb;
        border: none;
        color:white;
        font-size: 12px;
        font-weight: 300;
        box-sizing: content-box;
        padding:10px;
        border-radius: 10px;
        width: 120px;
        position: absolute;
        right:30px;
        bottom: 30px;
        cursor: pointer;
    }

    /* Fade In & Out*/
    .login p {
        cursor: pointer;
        color:#1900ff;
        font-size:15px;
    }

    .loginMsg, .signupMsg{
        /*opacity: 1;*/
        transition: opacity .8s ease-in-out;
    }

    .visibility{
        opacity: 0;
    }
</style>
</head>
<body>
    <div class="container">
        <div class="backbox">
            <div class="loginMsg">
                <div class="textcontent">
                   
                </div>
            </div>
        </div>
        <!-- backbox -->


        <div class="frontbox">
            <div class="login">
                <h2>INICIAR SESIÓN</h2>
                <div class="inputbox">
                    <form method="post">
                        @csrf
                        <input type="text" name="user" placeholder="user">
                        @error('name')
                            <small>*{{$message}}</small>
                        @enderror
                        <input type="password" name="password" placeholder="password">
                        @error('password')
                            <small>*{{$message}}</small>
                        @enderror
                        <button>INICIAR SESIÓN</button>
                    </form>
                </div>
                
            </div>
        </div>
        <!-- frontbox -->
    </div>
</body>
</html>