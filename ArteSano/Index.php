<?php 
session_start();
if(isset($_SESSION['login'])){
if($_SESSION['login']==TRUE && ($_SESSION['rol']==2))
{ 
  header('location:vistas/tejedor/inicio.php'); 
  
} 
if($_SESSION['login']==TRUE && ($_SESSION['rol']==1))
{ 
  header('location:vistas/consumidor/inicio.php'); 
  
} 
if($_SESSION['login']==TRUE && ($_SESSION['rol']==3))
{ 
  header('location:vistas/admin/inicio.php'); 
  
} 
}
?> 
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Arte Sano</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Stalled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/Estilos.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
    <!-- //Fonts -->

</head>

<body>
    <!-- mian-content -->
    <section class="main-content" id="home">
        <div class="layer">
            <!--/Top-Header-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: transparent !important;">
                <a class="navbar-brand" href="#" style="color: rgb(255, 255, 255); ">Arte Sano</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
              
              </nav>
            
            <!--//Top-Header-->
  
            <!-- banner -->
            <div class="banner-info-wthree">
                <h2>Un espacio dedicado al arte
                </h2>
                
              


           
          
          
            
                <div class="row justify-content-center">
                  <div class="col-md-6 text-center">
                      <h4>Si quieres apoyar la artesania nacional, entra a mirar todos los produtos que tenemos para ti.</h2>
                    <a name="" id="" class="btn btn-primary" href="vistas/consumidor/inicio.php" role="button">Ver productos</a>
                  </div>
                  <div class="col-md-6  text-center">
                    <h4>Si eres un artesano y quieres publicar tus trabajos para tener una mayor exposicion.</h2>

                    <a name="" id="" class="btn btn-primary" href="vistas/tejedor/Index_tejedor.php" role="button">Entrar aquí</a>
                  </div>
                  
                </div>
              
        </div>

        </div>
    </section>

</body>

</html>
