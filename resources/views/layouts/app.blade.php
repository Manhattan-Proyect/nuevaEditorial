<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Manhattan') }}</title>

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/ripples.min.css">

    <link href="{{ url('/css/app.css') }}" rel="stylesheet">

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]) ?>
    </script>
   <style type="text/css">
    .color-letra{           
        color: rgb(185, 169, 168);
    }
    .color-fondo{
        background: black;
    }
    </style>

</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" style="position: relative;">
        <div class="container-fluid" style="background: grey;">
            <div class="navbar-header" style="padding-bottom: 15px;">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="padding-top: 15px; padding-bottom: 0px">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo color-letra" href=""> 
                    <b><span>&nbsp; &nbsp;<span style="color: #CEDFD9">edit</span>orial<br>
                        M<span style="color: #CEDFD9">edit</span>erránea
                    </span></b>
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse" style="padding-top: 7px;">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{url('/carrito')}}" style="padding-right: 7px;">Mi carrito</a></li>
                        <li class="icon-cart"> 
                            <a href="{{url('/carrito')}}" style="padding: 14px;padding-left: 0; padding-right: 20px;">
                                <svg width="100%" height="100%" viewBox="8.3 0 100.5 126.1" preserveAspectRatio="xMinYMax meet" ng-switch-when="1" style="transform-origin: 50%">
                                    <path d="M99.8 28.4c0-1.2-0.9-2-2.1-2h-15c0 3.2 0 7.6 0 8.2 0 1.5-1.2 2.6-2.6 2.9 -1.5 0.3-2.9-0.9-3.2-2.3 0-0.3 0-0.3 0-0.6 0-0.9 0-4.7 0-8.2H40.1c0 3.2 0 7.3 0 8.2 0 1.5-1.2 2.9-2.6 2.9 -1.5 0-2.9-0.9-3.2-2.3 0-0.3 0-0.3 0-0.6 0-0.6 0-5 0-8.2h-15c-1.2 0-2 0.9-2 2L8.3 124c0 1.2 0.9 2.1 2.1 2.1h96.3c1.2 0 2.1-0.9 2.1-2.1L99.8 28.4z" style="fill: rgba(255,255,255,.84);"></path>
                                    <path d="M59.1 5.9c-2.9 0-2 0-2.9 0 -2 0-4.4 0.6-6.4 1.5 -3.2 1.5-5.9 4.1-7.6 7.3 -0.9 1.8-1.5 3.5-1.8 5.6 0 0.9-0.3 1.5-0.3 2.3 0 1.2 0 2.1 0 3.2 0 1.5-1.2 2.9-2.6 2.9 -1.5 0-2.9-0.9-3.2-2.3 0-0.3 0-0.3 0-0.6 0-1.2 0-2.3 0-3.5 0-3.2 0.9-6.4 2-9.4 1.2-2.3 2.6-4.7 4.7-6.4 3.2-2.9 6.7-5 11.1-5.9C53.5 0.3 55 0 56.7 0c1.5 0 2.9 0 4.4 0 2.9 0 5.6 0.6 7.9 1.8 2.6 1.2 5 2.6 6.7 4.4 3.2 3.2 5.3 6.7 6.4 11.1 0.3 1.5 0.6 3.2 0.6 4.7 0 1.2 0 2.3 0 3.2 0 1.5-1.2 2.6-2.6 2.9s-2.9-0.9-3.2-2.3c0-0.3 0-0.3 0-0.6 0-1.2 0-2.6 0-3.8 0-2.3-0.6-4.4-1.8-6.4 -1.5-3.2-4.1-5.9-7.3-7.3 -1.8-0.9-3.5-1.8-5.9-1.8C61.1 5.9 59.1 5.9 59.1 5.9L59.1 5.9z" style="fill: rgba(255,255,255,.84);"></path>
                                    <text x="58.5" y="77" dy=".35em" text-anchor="middle" style="fill: #000000;font-size: 3.5em;">{{$productsCount}}</text>
                                </svg>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">INICIAR SESION<span class="caret"></span></a>
                            <ul class="dropdown-menu ">

                            @if (Auth::guest())
                                <li><a href="{{ url('/login') }}">Login</a></li>
                                <li><a href="{{ url('/register') }}">Crear usuario</a></li>
                            @else
                                 @if(Auth::user()->permiso_id > 1)
                                 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">

                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                                    </ul>
                                </li>
                                @else
                                 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ url('/products') }}">Productos</a></li>
                                        <li><a href="{{ url('/orders') }}">Estadisticas</a></li>
                                        <li><a href="{{ url('/permisos') }}">Gestionar Permisos</a></li>
                                        <li><a href="{{ url('/users') }}">Ver usuarios</a></li>

                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                                    </ul>
                                </li>
                                @endif


                            @endif
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    @yield('content')

        <!--  INICIO FOOTER!!!-->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
            <style type="text/css">
                .footer-distributed {
                   /*background: #33383b */
                    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
                    box-sizing: border-box;
                    width: 100%;
                    /*font: bold 16px sans-serif;*/
                    font: 16px Helvetica Neue,Helvetica,Arial,sans-serif;

                    text-align: left;
                    padding: 40px 60px 25px;
                    margin-top: 80px;
                    overflow: hidden;
                }
                    
                @media (max-width: 1000px) {
                    .footer-distributed {
                        font-size: 14px;
                    }
                    .footer-distributed form input,
                    .footer-distributed form textarea{
                        width: 250px;
                    }

                    .footer-distributed form button{
                        padding: 10px 35px;
                    }
                }
                @media (max-width: 800px){
                    .footer-distributed {
                        padding: 30px 10px;
                    }

                    .footer-distributed .footer-left i {
                        margin-left: 0;
                    }
                    .footer-distributed .footer-left, .footer-distributed .footer-right {
                        display: block;
                        width: 100%;
                        margin-bottom: 40px;
                        text-align: left;
                    }

                    .footer-distributed .footer-left{
                        margin-bottom: 40px;
                    }

                    .footer-distributed form{
                        margin-top: 30px;
                    }

                    .footer-distributed form{
                        display: block;
                    }

                    .footer-distributed form button{
                        float: none;
                    }
                }
                @media (max-height: 800px){
                    footer {
                        position: relative;
                    }
                }
                footer {
                    position: relative;
                    bottom: 0;
                    clear: both;
                }
                .footer-distributed .footer-left, .footer-distributed .footer-right {
                    display: inline-block;
                    vertical-align: top;
                }
                /*  LEFT  */
                .footer-distributed .footer-left {
                    float: left;
                    width: 35%;
                }
                .footer-distributed .footer-left i {
                    /*
                    background-color: #33383b;
                    color: #ffffff;
                    */
                    font-size: 25px;
                    width: 38px;
                    height: 38px;
                    border-radius: 50%;
                    text-align: center;
                    line-height: 42px;
                    margin: 10px 15px;
                    vertical-align: middle;
                }
                .footer-distributed .footer-center i.fa-envelope{
                    font-size: 17px;
                    line-height: 38px;
                }
                .footer-distributed .footer-left p{
                    display: inline-block;
                    /*color: #ffff11;*/
                    vertical-align: middle;
                    margin: 0;
                }
                .footer-distributed .footer-left p span {
                    display: block;
                    font-weight: normal;
                    font-size: 14px;
                    line-height: 2;
                }
                .footer-distributed .footer-left p a {
                    /*color: #5383d3;*/
                    text-decoration: none;
                }
                
                /*  FOOTER RIGHT  */
                .footer-distributed .footer-right {
                    float: right;
                }
                .footer-distributed .footer-right p {
                    display: inline-block;
                    vertical-align: top;
                    margin: 15px 42px 0 0;
                    /*color: #ffffff;*/
                }
                .footer-distributed form {
                    display: inline-block;
                }
                .footer-distributed form input, 
                .footer-distributed form textarea {
                    display: block;
                    border-radius: 3px;
                    box-sizing: border-box;
                    /*background-color: #1f2022;*/
                    box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.1);
                    border: none;
                    resize: none;
                    font: inherit;
                    font-size: 14px;
                    font-weight: normal;
                    /*color: #d1d2d2;                */
                    width: 400px;
                    padding: 18px;
                }
                .footer-distributed ::-webkit-input-placeholder {
                    /*color:  #5c666b;*/
                }

                .footer-distributed ::-moz-placeholder {
                    /*color:  #5c666b;*/
                    opacity: 1;
                }

                .footer-distributed :-ms-input-placeholder{
                    /*color:  #5c666b;*/
                }

                .footer-distributed form input {
                    height: 55px;
                    margin-bottom: 15px;
                }
                .footer-distributed form textarea {
                    height: 100px;
                    margin-bottom: 20px;
                }
                .footer-distributed form button {
                    border-radius: 3px;
                    /*background-color: #33383b;*/
                    /*color: #ffffff;*/
                    border: 0.2px solid white;
                    padding: 15px 50px;
                    font-weight: bold;
                    float: right;
                }
                
            </style>

              
            <footer class="footer-distributed color-fondo">
                <div class="footer-left">
                    <p class="footer-company-about">
                        <span class="color-letra">NOSOTROS</span>
                    </p>
                    <div>
                        <i class="fa fa-map-marker color-letra"></i>
                        <p class="color-letra"><span class="color-letra">Montevideo 550</span> Argentina, Córdoba</p>
                    </div>
                    <div>
                        <i class="fa fa-phone color-letra"></i>
                        <p class="color-letra">+54 351 4257811 </p>
                    </div>
                    <div>
                        <i class="fa fa-envelope color-letra"></i>
                        <p><a href="mailto:mediterraneaeditorial@gmail.com" class="color-letra">mediterraneaeditorial@gmail.com</a></p>
                    </div>
                    <div class="footer-icons color-letra">
                        <a href="https://www.facebook.com/Editorial-Mediterr%C3%A1nea-190620037624079/"><i class="fa fa-facebook-official color-letra"></i></a>
                    </div>
                </div>
                <div class="footer-right">
                    <p class="color-letra">Envíanos tu consulta</p>
                    <form action="#" method="post">
                        <input type="text" name="email" placeholder="Email">
                        <textarea name="message" placeholder="Mensaje"></textarea>
                        <button class="color-fondo color-letra">Enviar</button>
                    </form>
                </div>
            </footer>  
        <!--  FIN FOOTER--> 
    <!-- Scripts -->
    <script   src="http://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    
    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/ripples.min.js"></script>

    <script>
        $.material.init() 
    </script>

    <script src="{{ url('/js/app.js') }}"></script>


</body>
</html>
