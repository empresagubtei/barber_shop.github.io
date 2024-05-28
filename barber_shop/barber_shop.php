<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
    print "<script>alert(\"Acceso invalido!\");window.location='index.php';</script>";
}

?>



<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Asesoria Gubtei</title>
        <meta name="author" content="iThemesLab">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="img/logo.png">
        <link rel="apple-touch-icon" href="assets/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="200x144" href="assets/favicon/apple-icon-144x144.png">
    
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700%7cPlayfair+Display:400,700" rel="stylesheet">
        
        <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
        
        <link rel="stylesheet" href="assets/css/vendor/rev_slider/settings.css">
        <link rel="stylesheet" href="assets/css/vendor/rev_slider/navigation.css">
  
        <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
        <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css">
  
        <link rel="stylesheet" href="assets/css/vendor/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/vendor/owl.theme.css">
        
        <link rel="stylesheet" href="assets/css/vendor/bootstrap-datepicker.standalone.css">
  
        <link rel="stylesheet" href="assets/css/style.css">
 
        <link rel="stylesheet" href="assets/css/responsive.css">
    </head>
    <body>
        
        <div class="header navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="index-2.html">
                                        <img src="img/logo.png" width="200" alt="">
                                    </a>
                                </div> 

                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <div class="top-right-contact text-right pull-right hidden-sm hidden-xs">
                                        <i class="fa fa-phone-square"></i> (+598) 092700454)
                                    </div> <!--top-right-contact-->
                                    <ul class="nav navbar-nav">
                                        <li class="active"><a href="#">Inicio</a></li>
                                        <li><a href="https://servicios.dgi.gub.uy/serviciosenlinea/consultadevolucioneirpf_iass_irnr">Consulta de Cobro IRPF</a></li>
                                        <li><a href="https://devolucionfonasa.bps.gub.uy/index.html">Consulta Devolucion FONASA</a></li>
                                        <li><a href="#">despues</a></li>
                                        <li><a href="#">Contacto</a></li>
                                        <li><a href="index.php"><font color="red">SALIR</font></a></li>
                                    </ul>
                                    
                                </div>
                            </div> 
                        </nav>

                    </div> 
                    
                </div>
            </div> 
        </div>

        <div id="rev_slider_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="photography1" style="background-color:trasparent;padding:0px;">
            <div id="rev_slider_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.0.7">
                <ul>
                    
                    <li data-index="rs-3" data-transition="slideoververtical">
                        <!-- MAIN IMAGE -->
                        <img src="assets/images/slideshow/transa.png"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina width= "100">
                        
                        <!-- LAYERS -->
<div><!-- LAYER NR. 0 -->
                        <div class="tp-caption Photography-Display tp-resizeme" id="slide-3-layer-2" 
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['50','50','50','-10']" 
                            data-fontsize="['60','60','60','30']"
                            data-lineheight="['60','60','60','40']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-color="#000000"
                            
                 
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1s:2000;e:Power4.easeInOut;" 
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                            data-start="750" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on" 

                            style="z-index: 6; white-space: nowrap; font-family: Playfair Display; color">DEVOLUCIONES DE FONASA/IASS</div></div>
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption Photography-Subline tp-resizeme" id="slide-3-layer-1" 
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['-157','-157','-157','-80']" 
                            data-fontsize="['70','70','70','70']"
                            data-lineheight="['70','70','70','70']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-color="#000000"
                 
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                            data-start="300" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on" 

                            style="z-index: 5; white-space: nowrap; font-family: 'Open Sans', sans-serif;">
                           GUBTEI ASESORIA & GESTORIA
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption Photography-Display tp-resizeme" id="slide-3-layer-2" 
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['-40','-40','-40','-20']" 
                            data-fontsize="['60','60','60','30']"
                            data-lineheight="['60','60','60','40']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-color="#000000"
                            
                 
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1s:2000;e:Power4.easeInOut;" 
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                            data-start="750" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on" 

                            style="z-index: 6; white-space: nowrap; font-family: Playfair Display; color">DEVOLUCIONES DE IRPF</div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption Photography-Display tp-resizeme" id="slide-3-layer-3" 
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['120','120','120','20']"
                            data-fontsize="['60','60','60','30']"
                            data-lineheight="['60','60','60','40']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                 
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                            data-start="1000" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on" 

                            style="z-index: 7; white-space: nowrap; color: #000000; font-family: Playfair Display;">DEVOLUCIONES DE BPS
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption rev-btn rev-bordered" id="slide-3-layer-4" 
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                            data-y="['middle','middle','bottom','bottom']" data-voffset="['181','181','270','200']" 
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeOut;"
                            data-style_hover="c:rgba(000, 000, 000, 000);bc:rgba(000, 000, 000, 000);"
                 
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                            data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                            data-mask_out="x:inherit;y:inherit;" 
                            data-start="1250" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]'
                            data-responsive_offset="on" 
                            data-responsive="off"
                            
                            style="z-index: 8; white-space: nowrap; font-size: 14px; line-height: 15px; color: rgba(255, 255, 255, 1.00);font-family:Open Sans;background-color:rgba(0, 0, 0, 0);padding:13px 35px 13px 35px;border-color:rgba(255, 255, 255, 0.25);border-style:solid;border-width:2px;letter-spacing:1px;text-transform: uppercase;">Asesoria
                        </div>
                        
</div>
                    </li>
                </ul>
            </div>
        </div> 


        <!-- footer start -->
        <div class="footer bg-color-2 pad80 text-center">
            <div class="container">
                <div class="row mb30">
                    <div class="col-md-12">
                        <div class="footer-logo">
                            <img src="img/logo.png"width="300px" alt="" class="img-center img-responsive">
                        </div>
                    </div>
                </div>
                <div class="row mb30">
                    <div class="col-md-5 col-sm-5">
                        <div class="footer-contact text-right">
                            <p>Telefono: +598 092700454</p>
                            <p>E-mail:Empresagubtei@gmail.com <a href="http://sitetemplate.demo.ithemeslab.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="533a3d353c132a3c2621373c3e323a3d7d303c3e">Muchas Gracias por Preferirnos.</a></p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <div class="footer-icon">
                            <div class="rotate-45deg"><i class="flaticon-scissors-opened-tool"></i></div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5">
                        <div class="footer-contact text-left">
                            <p>Uruguya/Canelones</p>
                            <p>PASO CARRASCO</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-social">
                            <ul>
                                <li><a href="red social" target="_black"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="red social" target="_black"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="red social" target="_black"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="red social" target="_black"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="red social" target="_black"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer end -->

        <!-- back to to btn start -->
        <div id="back-to-top"><i class="fa fa-angle-up"></i></div>
        <!-- back to to btn end -->

        <!-- all js include start -->
        <!-- jquery latest version -->
        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor/jquery-3.1.1.min.js"></script>
        <!-- bootstrap latest version -->
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <!-- revolution slider js files start -->
        <script src="assets/js/vendor/rev_slider/jquery.themepunch.tools.min.js"></script>
        <script src="assets/js/vendor/rev_slider/jquery.themepunch.revolution.min.js"></script>
        
        <script src="assets/js/vendor/rev_slider/extensions/revolution.extension.actions.min.js"></script>
        <script src="assets/js/vendor/rev_slider/extensions/revolution.extension.carousel.min.js"></script>
        <script src="assets/js/vendor/rev_slider/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="assets/js/vendor/rev_slider/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="assets/js/vendor/rev_slider/extensions/revolution.extension.migration.min.js"></script>
        <script src="assets/js/vendor/rev_slider/extensions/revolution.extension.navigation.min.js"></script>
        <script src="assets/js/vendor/rev_slider/extensions/revolution.extension.parallax.min.js"></script>
        <script src="assets/js/vendor/rev_slider/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="assets/js/vendor/rev_slider/extensions/revolution.extension.video.min.js"></script>
        <!-- revolution slider js files end -->

		<!--Appear js file-->
        <script src="assets/js/vendor/jquery.appear.js"></script>
        <!--CountTo js file-->
        <script src="assets/js/vendor/jquery.countTo.js"></script>
		<!--Owl Carousel js file-->
        <script src="assets/js/vendor/owl.carousel.min.js"></script>
        <!--bootstrap date picker js file-->

        <!-- jquery form validator, date picker & booking js -->
        <script src="assets/js/vendor/bootstrap-datepicker.min.js"></script>
        <script src="assets/js/vendor/validator.min.js"></script>
        <script src="assets/js/booking.js"></script>

        <!-- template main js file -->
        <script src="assets/js/main.js"></script>
        <!-- all js include end -->
    </body>

<!-- Mirrored from sitetemplate.demo.ithemeslab.com/menzsaloon/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Mar 2019 17:07:52 GMT -->
</html>