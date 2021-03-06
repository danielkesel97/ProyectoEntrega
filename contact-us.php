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

        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        
        <![endif]-->
      
            </head>
            
            <body>
    </head>
    <body>

     <?php
        require_once('funciones/funciones.php');
     ?>
 <?php session_start();
       ?>
        <!--================Search Area =================-->
        <section class="search_area">
            <div class="search_inner">
                <input type="text" placeholder="Enter Your Search...">
                <i class="ti-close"></i>
            </div>
        </section>
        <!--================End Search Area =================-->

        <!--================Header Menu Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><p>LagerHaus</p></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Inicio</a></li>
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
             
              
                    </ul>
                </div>
            </nav>
        </header>
        <!--================End Header Menu Area =================-->

        <!--================Banner Area =================-->
        <section class="banner_area" style="background:url(img/lagerHaus/24.jpg);" >
            <div class="container">
                <div class="banner_text_inner">
                    <h4>Contactate con nosotros</h4>
                    <h5>Reservá el día que quieras</h5>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->

        <!--================Contact Us Area =================-->
        <section class="contact_us_area">
            <div class="container">
                    <div class="main_title">
                        <h2>Seguinos en nuestras redes!:</h2>
                    </div>
                    <div class="static_social ">
                        <ul>
                            <div class="row" style="margin-top:20px;margin-left:10px">
                                <div class="col-1">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                </div>
                                <div class="col-1">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                </div>
                                <div class="col-1">
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </div>
                                <div class="col-1">
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </div>
                            </div> 
                                <div class="col-8">
                                </div>
                             
                               
                           
                              
                            </ul>
                        </div>
                 <div class="contact_d_list_item">
                        <div class="static_social">

                              
                            </div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.0579873011848!2d-58.508719084591995!3d-34.60269516495137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb6328fd8dbd3%3A0x4eb882baf48a22bd!2sCervecer%C3%ADa+LagerHaus!5e0!3m2!1ses-419!2sar!4v1553616559405" width="1100" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                <div class="contact_details_inner">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact_text">
                                <div class="main_title">
                                    <h2>Contactate con nosotros!</h2>
                                    
                                </div>
                                <div class="contact_d_list">
                                    <div class="contact_d_list_item">
                                        <a href="#">(800) 686-6688</a>
                                        <a href="#">info.deercreative@gmail.com</a>
                                    </div>
                                    <div class="contact_d_list_item">
                                        <p>Av. Francisco Beiró 3834<br /> Buenos Aires, Capital Federal</p>
                                    </div>
                                    <div class="contact_d_list_item">
                                        <div class="container">
                                            <div class="ROW">
                                                <div class="col-6">
                                                    <p>Horario:</p>
                                                </div>
                                                <div class="col-6">
                                                        <p>viernes	18:00–3:00
                                                        <br/>
                                                        sábado	18:00–3:00
                                                        <br/>
                                                        domingo	18:00–1:00
                                                        <br/>
                                                        lunes	18:00–1:00
                                                        <br/>
                                                        martes	18:00–1:00
                                                        <br/>
                                                        miércoles	18:00–2:00
                                                        <br/>
                                                        jueves	18:00–3:00
                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="static_social ">
                                    <div class="main_title">
                                        <h2>Seguinos en nuestras redes!:</h2>
                                    </div>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact_form">
                                <div class="main_title">
                                    <h2>Reservá tu mesa para vos y tus amigos!</h2>
                                    <p>Contanos con cuantas personas venís, el horario y listo!</p>
                                </div>
                                <form class=" row" action="mail.php" method="post" id="contactForm">
                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                    </div>
                                  
                                    <div class="form-group col-lg-12">
                                        <textarea class="form-control" name="message" id="message" rows="1" placeholder="Mensaje"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                            
                                                    <button type="submit" value="submit" name="submit" class="btn submit_btn2 form-control">Enviar reserva</button>
                                                    <!-- <button type="submit" value="submit" class="btn  btn-secondary form-control" style="width:500px;margin-top:10px"> <p style="margin-left:10px;margin-right:10px"> Ó también podés reservar a través de nuestro Instagram </p></button> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Contact Us Area =================-->

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
        <!--================End Footer Area =================-->

        <!--================Contact Success and Error message Area =================-->
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Thank you</h2>
                        <p>Your message is successfully sent...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals error -->

        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Sorry !</h2>
                        <p> Something went wrong </p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->


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
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>

        <!-- contact js -->
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
      

        <script src="js/theme.js"></script>
    </body>
</html>
