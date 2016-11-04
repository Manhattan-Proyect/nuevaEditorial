<!DOCTYPE html>

<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <meta name="description" content="">
        
        <link rel="icon" href="logo.ico">

        <title>Editorial Mediterránea (BETA)</title>

        <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
        <script src="holder.min.js.descarga"></script>
        

      
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <link href="carousel.css" rel="stylesheet">
        <style type="text/css">
            .color-letra{    /*SPAN2 es el LOGO*/
                /*color: #7795A3;  color-span2: #CEDFD9; background:grey;*/
               	color: rgb(185, 169, 168);
            }
            .color-fondo{
            	background: black;
            	/*background-color: #e0e0e0;*/
            	/*background-color: #f4f4f4;/* color-letra: black; */
            }
        </style>

    </head>
    
    <body style="background: #d2cece;">
        <!-- INICIO  NAV BAR  -->
        	<style type="text/css">
	            .logo span {
	                font-size: 25px;
	                line-height: 0em;   
	                font-family: sans-serif;
	            }	
	            #navbar{padding-top: 7px;}
				.navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
				    border: none;
				}	     
        	</style>
	        <nav class="navbar navbar-inverse navbar-relative-top" style="border:none;margin-bottom: 0;">
	            <div class="container-fluid">
	                <div class="navbar-header" style="padding-bottom: 15px;">
	                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="padding-top: 8px; padding-bottom: 8px;border:none;">
	                        <span class="sr-only"></span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                    </button>
	                    <a class="navbar-brand logo color-letra" href="{{url('/')}}"> 
                            <b><span>&nbsp; &nbsp;<span style="color: #CEDFD9">edit</span>orial<br>
                                M<span style="color: #CEDFD9">edit</span>erránea
                            </span></b>
	                    </a>
	                </div>
	                <div id="navbar" class="navbar-collapse collapse" >
	                    <ul class="nav navbar-nav navbar-right">
	                        <li><a href="{{url('/carrito')}}">Mi Carrito <span class="glyphicon glyphicon-shopping-cart" /></a></li>
	                        <li class="dropdown">
	                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Productos<span class="caret"></span></a>
	                            <ul class="dropdown-menu">
	                                <li><a href="{{url('/products')}}">Editorial Mediterránea</a></li>
	                                <li><a href="">Otras Editoriales</a></li>
	                            </ul>
	                        </li>
	                        <li class="dropdown">
	                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
	                            @if(Auth::guest())
	                            Sesion
	                            @else
	                            Bienvenido {{Auth::user()->name}}
	                            @endif 
	                            <span class="caret"></span></a>
	                            <ul class="dropdown-menu">
	                            @if(Auth::guest())
	                                <li><a href="{{url('/login')}}">Iniciar sesión</a></li>
	                                <li><a href="{{url('/register')}}">Registrar</a></li>
	                            @else
	                            	<li><a href="{{url('/orders')}}">Ver Estadisticas</a></li>
	                                <li><a href="{{url('/register')}}">Registrar</a></li>
	                                <li><a href="{{url('/logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Cerrar Sesion</a>

	                                <form id="logout-form" action="{{url('logout')}}" method="POST" style="display: none;">
										{{csrf_field()}}
	                                </form></li>
	                            @endif

	                            </ul>
	                        </li>
	                    </ul>
	                    <form class="navbar-form navbar-right">
	                        <input type="text" class="form-control" placeholder="Buscar...">
	                    </form>
	                </div>
	            </div>
	        </nav>
		<!--  FIN Nav Bar  -->
 
        <!--  INICO  CAROUSEL -->
   			<style type="text/css">
   				.carousel {
   					height: 350px;
   				}
   				.carousel .item {
   					/*position: relative;*/
   					height: 300px;
   				}
   				
   			</style>
	        <div class="containerCarousel">
	            
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
