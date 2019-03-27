<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Fancy</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        
        <link href="vendors/elegant-icon/style.css" rel="stylesheet">
        <link href="vendors/themify-icon/themify-icons.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">

        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">

        <link href="css/style2.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="css/CSS.css">
  
        <link rel="stylesheet" href="css/service_area.css">
        <link rel="stylesheet" href="css/efecto-imagen.css">
    </head>
    <body >
       <?php session_start();
       ?>

        <!--================Search Area =================-->
      
        <!--================End Search Area =================-->

        <!--================Header Menu Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-expand-lg   navbar-light bg-light">
                <a class="navbar-brand" href="#"> <p style="color:white;font-size:40px">LagerHaus</p></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i style="color:white;float:right" class="fas fa-angle-double-down"></i> </button>
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="index.html">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="carta.php">Carta</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Locales</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php">
                        <?php  
                        if(isset($_SESSION['idUsuario'])) {
                            $nombreUsuario= $_SESSION['nombre'];
                            echo "Bienvenido " .$nombreUsuario;
                              

                             } else{
                                 echo "Iniciar Sesion" ;
                             }
                             
                        ?>
                         </a></li>
                         <li class="nav-item"><a class="nav-link" href="logout.php"> 
                             
                         <?php  
                        if(isset($_SESSION['idUsuario'])) {
                            $nombreUsuario= $_SESSION['nombre'];
                            echo "Cerrar Sesion ";
                             }       
                        ?>
                         </a></li>
                    </ul>
                    <ul class="navbar-nav justify-content-end">
                        <li>
                        <?php
                        if(isset($_SESSION["idUsuario"])) {
                            echo '<a href="panel.php"><img alt="" class="rounded-circle border border-warning" style="height: 10vh;" src="'.$_SESSION['avatar'].'"';
                        } 
                         
                         
                        
                        ?> 
                        
                        </a></li>
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!--================End Header Menu Area =================-->

        <!--================Slider Area =================-->
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item opacar active">
                <img class="mi-imagen d-block w-100" src="img/lagerhaus/12-3.jpg" style="height: 113vh" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/lagerhaus/24.jpg" style="height: 113vh" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/lagerhaus/portada-2.jpg" style="height: 113vh" alt="Third slide">
              </div>
            </div>
          </div>
        <!--================End Slider Area =================-->

        <!--================Creative Feature Area =================-->
        <section class="creative_feature_area" style="background:black;height:300px" >
            <div class="container-fluid"  >
                <div class="c_feature_box border border-warning"style="background:url(img/fondo-negro2.png);" >
                    <div class="row">
                        <div class="col-lg-4" >
                            <div class="contenedor border border-dark"style="height:246.66px;width:370px;margin:auto" >
                                <p style="text-align:center"> <a href="google.com" ><img src="img/lagerHaus/bien1.jpg" class="border border-dark zoom mi-imagen"alt=""  style="height:246.66px;width:370px"> </a></p>
                            </div>
                                <div class="c_boxNormal">
                                    <a href="#"><h4 style="color:white;text-align:center"> Calidad </h4></a>
                                    <p style="text-align:center"> </p>
                                </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contenedor border border-dark"style="height:246.66px;width:370px;margin:auto" >
                                <p style="text-align:center"><img src="img/lagerHaus/bien2.jpg" class="border border-dark zoom mi-imagen" alt="" style="height:246.66px;width:370px;"></p>
                            </div>
                            <div class="c_boxNormal">
                                <a href="#"><h4  style="color:white;text-align:center;text-align:center"> Divercion</h4></a>
                                <p style="text-align:center"></p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="contenedor border border-dark"style="height:246.66px;width:370px;margin:auto" >
                                <p style="text-align:center"> <img src="img/lagerHaus/bien3.jpg" class="border border-dark zoom mi-imagen" alt="" style="height:246.66px;width:370px"> </p>
                            </div>
                            <div class="c_boxNormal">
                                <a href="#"><h4 style="color:white;text-align:center">Sorteos</h4></a>
                                <p style="text-align:center"> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
       
        
        <!--================End Creative Feature Area =================-->

        <!--================Industries Area =================-->
        
        <!--================End Industries Area =================-->

        <!--================Our Service Area =================-->
        <section class="service_area">
            <div class="container">
                <div class="center_title" style="margin-top:70px">
                    <h2>Nuestros Horarios</h2>
                    <p>We Are A Creative Digital Agency. Focused on Growing Brands Online</p>
                </div>
                <div class="row service_item_inner">
                    <div class="col-lg-4 ">
                        <div class="service_item">
                        <i class="fas fa-hamburger"></i>
                            <h4>Domingo - Lunes - Martes</h4>
                            <p style="text-align:center">18hs - 01hs</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service_item">
                            <i class="fas fa-glass-cheers"></i>
                            <h4>Jueves - Viernes - Sábado</h4>
                            <p>18hs - 04hs </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service_item">
                        <i class="fas fa-pizza-slice"></i>
                            <h4>Miércoles</h4>
                            <p>18hs - 02hs</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Our Service Area =================-->
        

        <!--================Testimonials Area =================-->
        <section class="latest_news_area p_100" style="background:url(img/fondo-negro2.png)" >
                <div class="container">
                    <div class="b_center_title">
                        <h2 style="color:white">Nuestros Combos</h2>
                        <p  style="color:white">Vení a disfrutar de nuestras promociones a un bajo precio.</p>
                    </div>
                    <div class="l_news_inner">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="l_news_item border border-warning">
                                    <div class="l_news_img"><a href="#"><img class="img-fluid" style="height:63vh" src="img/Lagerhaus/promo1.jpg" alt=""></a></div>
                                    <div class="l_news_content" style="background:black;border-left:1px solid gold;border-right:1px solid gold;border-bottom:1px solid gold">
                                        <a href="#"><h4  style="color:white">Hamburguesa + Papas + Pinta</h4></a>
                                        <p style="color:white">Vení a disfrutar de una exelente combinación de una Hamburguesa Casera con queso,huevo,lechuga,tomate con unas papás y lo mejor de todo una cerveza.</p>
                                        <a class="more_btn" href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6">
                                <div class="l_news_item border border-warning">
                                    <div class="l_news_img"><a href="#"><img class="img-fluid" src="img/lagerhaus/2x1.jpg" style="height:63vh" alt=""></a></div>
                                    <div class="l_news_content" style="background:black;border-left:1px solid gold;border-right:1px solid gold;border-bottom:1px solid gold">
                                        <a href="#"><h4 style="color:white">2x1 toda la noche</h4></a>
                                        <p style="color:white">Todos los días disfrutá de dos impresionantes birras al precio de una, todo esto antes de las 21:00. Está disponible dentro de esta promoción todas las birras de la casa.</p>
                                        <a class="more_btn" href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="l_news_item" style="border:1px solid gold">
                                    <div class="l_news_img" ><a href="#"><img class="img-fluid" src="img/lagerhaus/2.jpg" style="height:63vh" alt=""></a></div>
                                    <div class="l_news_content" style="background:black;border-left:1px solid gold;border-right:1px solid gold;border-bottom:1px solid gold">
                                        <a href="#"><h4  style="color:white"> Picada para 2</h4></a>
                                        <p style="color:white">Todos los días disfrutá de dos impresionantes birras al precio de una, todo esto antes de las 21:00. Está disponible dentro de esta promoción todas las birras de la casa.</p>
                                        <a class="more_btn" href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!--================End Testimonials Area =================-->

        <!--================Project Area =================-->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 mi-imagen" src="img/lagerhaus/Sanpatricio1.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/lagerhaus/sanpatricio2.jpg" class="d-block w-100 mi-imagen"   alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 mi-imagen" src="img/lagerhaus/sanpatricio3.jpg"  alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/lagerhaus/sanpatricio4.jpg"  alt="quarter slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/lagerhaus/sanpatricio5.jpg"  alt="fifth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/lagerhaus/sanpatricio6.jpg"  alt="sixth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/lagerhaus/aniversario1.jpg"  alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/lagerhaus/aniversario2.jpg"  alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/lagerhaus/aniversario3.jpg"  alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/lagerhaus/aniversario4.jpg"  alt="">
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        <!--================End Project Area =================-->

        <!--================Latest News Area =================-->
        
        <!--================End Latest News Area =================-->

        <!--================Footer Area =================-->
        <footer class="footer_area">
            <div class="footer_widgets_area">
                <div class="container">
                    <div class="f_widgets_inner row">
                        <div class="col-lg-3 col-md-6">
                            <aside class="f_widget subscribe_widget">
                                <div class="f_w_title">
                                    <h3>Nuestras redes</h3>
                                </div>
                                <p>Seguinos y enterate de las mejores novedades.</p>
                               
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <aside class="f_widget twitter_widget">
                                <div class="f_w_title">
                                  
                                </div>
                             
                            </aside>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <aside class="f_widget categories_widget">
                                <div class="f_w_title">
                                    
                                </div>
                                <ul>
                                  
                                </ul>
                                <ul>
                                   
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <aside class="f_widget contact_widget">
                                <div class="f_w_title">
                                    <h3>Contactanos</h3>
                                </div>
                                <a href="#">1 (800) 686-6688</a>
                                <a href="#">LagerHaus@gmail.com</a>
                                <p>Av beiro <br />Villa Devoto, CABA</p>
                                
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
           
        
   ===========End Footer Area =================-->




        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/counterup/apear.js"></script>
        <script src="vendors/counterup/countto.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/parallaxer/jquery.parallax-1.1.3.js"></script>
        <!--Tweets-->
        <script src="vendors/tweet/tweetie.min.js"></script>
        <script src="vendors/tweet/script.js"></script>

        <script src="js/theme.js"></script>
    </body>
</html>
