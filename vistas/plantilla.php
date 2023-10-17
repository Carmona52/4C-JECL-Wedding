<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="author" content="NextGenerationDev">
   <title>Wedding, Wedding Planer & Event HTML Template</title>
   <!--Favicon img-->
   <link rel="shortcut icon" href="assets/img/favicon/favicon.png">
   <!--Bootstarp min css-->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <!--Bootstarp map css-->
   <link rel="stylesheet" href="assets/css/bootstrap.css.map">
   <!--Owl Carousel css-->
   <link rel="stylesheet" href="assets/css/owl.min.css">
   <!--Owl Carousel Theme css-->
   <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
   <!--All min css-->
   <link rel="stylesheet" href="assets/css/all.min.css">
   <!--Animate css-->
   <link rel="stylesheet" href="assets/css/animate.css">
   <!--Magnific popup css-->
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <!--Swiper min css-->
   <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
   <!--main css-->
   <link rel="stylesheet" href="assets/css/main.css">

   <link rel="stylesheet" href="assets/css/formulario.ingreso.css">

   <link rel="stylesheet" href="assets/css/formulario.registro.css">
</head>

<body>

   <!--==== Header Section Here ======= -->
   <header class="header-section">
      <div class="container">
         <div class="header-wrapper">
            <div class="logo-menu">
               <a href="index.php" class="logo">
                  <img src="assets/img/logo/logo1.png" alt="img">
               </a>
            </div>
            <div class="header-bar d-lg-none">
               <span></span>
               <span></span>
               <span></span>
            </div>
            <div>
               <?php
               $pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : "home";
               ?>

               <ul class="main-menu">
                  <li>
                     <a href="#0">Login/Register <i class="fas fa-chevron-down"></i></a>
                     <?php echo $pagina == 'Ingreso/Registro' ? 'class="active"' : '' ?>
                     <a href="index.php?pagina=#"></a>
                     <ul class="sub-menu">
                        <li class="subtwohober">
                           <?php echo $pagina == 'ingreso' ? 'class="active"' : '' ?>
                           <a href="index.php?pagina=ingreso"><span>Login</span></a>
                        </li>
                        <li class="subtwohober">
                           <?php echo $pagina == 'registro' ? 'class="active"' : '' ?>
                           <a href="index.php?pagina=registro"><span>Register</span></a>
                        </li>
                     </ul>
                  </li>

                  <li <?php echo $pagina == 'home' ? 'class="active"' : '' ?>>
                     <a href="index.php?pagina=home">Home</a>
                  </li>

                  <li <?php echo $pagina == 'about' ? 'class="active"' : '' ?>>
                     <a href="index.php?pagina=about">About</a>
                  </li>

                  <li>
                     <a href="#0">Service <i class="fas fa-chevron-down"></i></a>
                     <?php echo $pagina == 'Service' ? 'class="active"' : '' ?>
                     <a href="index.php?pagina=#"></a>
                     <ul class="sub-menu">
                        <li class="subtwohober">
                           <?php echo $pagina == 'service' ? 'class="active"' : '' ?>
                           <a href="index.php?pagina=service"><span>Service</span></a>
                        </li>
                        <li class="subtwohober">
                           <?php echo $pagina == 'service-single' ? 'class="active"' : '' ?>
                           <a href="index.php?pagina=service-single"><span>Service Single</span></a>
                        </li>
                     </ul>
                  </li>

                  <li>
                     <?php echo $pagina == 'our story' ? 'class="active"' : '' ?>
                     <a href="index.php?pagina=story">Our story</a>
                  </li>

                  <li>
                     <a href="#0">Pages <i class="fas fa-chevron-down"></i></a>
                     <?php echo $pagina == 'Pages' ? 'class="active"' : '' ?>
                     <a href="index.php?pagina=#"></a>
                     <ul class="sub-menu">
                        <li class="subtwohober">
                           <?php echo $pagina == 'event' ? 'class="active"' : '' ?>
                           <a href="index.php?pagina=event"><span>Our event</span></a>
                        </li>
                        <li class="subtwohober">
                           <?php echo $pagina == 'gallery' ? 'class="active"' : '' ?>
                           <a href="index.php?pagina=gallery"><span>Gallery</span></a>
                        </li>
                        <li class="subtwohober">
                           <?php echo $pagina == 'error404' ? 'class="active"' : '' ?>
                           <a href="index.php?pagina=error404"><span>Error404</span></a>
                        </li>
                     </ul>
                  </li>

                  <li>
                     <a href="#0">Blog <i class="fas fa-chevron-down"></i></a>
                     <?php echo $pagina == 'Blog' ? 'class="active"' : '' ?>
                     <a href="index.php?pagina=#"></a>
                     <ul class="sub-menu">
                        <li class="subtwohober">
                           <?php echo $pagina == 'blog' ? 'class="active"' : '' ?>
                           <a href="index.php?pagina=blog"><span>Blog</span></a>
                        </li>
                        <li class="subtwohober">
                           <?php echo $pagina == 'blog-single' ? 'class="active"' : '' ?>
                           <a href="index.php?pagina=blog-single"><span>Blog Single</span></a>
                        </li>
                     </ul>
                  </li>

                  <li <?php echo $pagina == 'contact' ? 'class="active"' : '' ?>>
                     <a href="index.php?pagina=contact">Contact</a>
                  </li>

                  <li>
                     <a href="#0">User/Exit <i class="fas fa-chevron-down"></i></a>
                     <?php echo $pagina == 'Usarios/Salir' ? 'class="active"' : '' ?>
                     <a href="index.php?pagina=#"></a>
                     <ul class="sub-menu">
                        <li class="subtwohober">
                           <?php echo $pagina == 'usuarios' ? 'class="active"' : '' ?>
                           <a href="index.php?pagina=usuarios"><span>User</span></a>
                        </li>
                        <li class="subtwohober">
                           <?php echo $pagina == 'salir' ? 'class="active"' : '' ?>
                           <a href="index.php?pagina=salir"><span>Exit</span></a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </header>

   <div class="scroll-up">
      <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>

   <?php
   if (isset($_GET["pagina"])) {
      if (
         $_GET["pagina"] == "registro" ||
         $_GET["pagina"] == "ingreso" ||
         $_GET["pagina"] == "salir" ||
         $_GET["pagina"] == "about" ||
         $_GET["pagina"] == "blog-single" ||
         $_GET["pagina"] == "blog" ||
         $_GET["pagina"] == "contact" ||
         $_GET["pagina"] == "event" ||
         $_GET["pagina"] == "gallery" ||
         $_GET["pagina"] == "home" ||
         $_GET["pagina"] == "ingreso" ||
         $_GET["pagina"] == "service-single" ||
         $_GET["pagina"] == "service" ||
         $_GET["pagina"] == "story" ||
         $_GET["pagina"] == "usuarios" ||
         $_GET["pagina"] == "editar"
      ) {
         include "paginas/" . $_GET["pagina"] . ".php";
      } else {
         include "paginas/error404.php";
      }
   } else {
      include "paginas/registro.php";
   }
   ?>



   <!--Jquery 3 6 0 Min Js-->
   <script src="assets/js/jquery-3.6.0.min.js"></script>
   <!--Bootstrap bundle Js-->
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <!--Viewport Jquery Js-->
   <script src="assets/js/viewport.jquery.js"></script>
   <!--Wow min Js-->
   <script src="assets/js/wow.min.js"></script>
   <!--Owl Carousel min Js-->
   <script src="assets/js/owl.min.js"></script>
   <!--Swiper min Js-->
   <script src="assets/js/swiper-bundle.min.js"></script>
   <!--Magnific popup min Js-->
   <script src="assets/js/jquery.magnific-popup.min.js"></script>
   <!--main Js-->
   <script src="assets/js/main.js"></script>
</body>

</html>