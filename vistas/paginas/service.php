<?php
 
 if(!isset($_SESSION["validarIngreso"])){

    echo '<script>window.location="index.php?pagina=ingreso";</script>';
    return;
 } else{

    if($_SESSION["validarIngreso"] !="ok"){
        echo '<script>window.location="index.php?pagina=ingreso";</script>';
        return;
    }

 }

 $usuarios = ControladorFormularios::ctrSeleccionarRegistros(null,null); 
 //echo '<prev>'; print_r($usuarios); echo'</pre>';
 ?>

<!--=========== Breadcumd Section Here ========= -->
<section class="breadcumd__banner">
   <div class="container">
      <div class="breadcumd__wrapper center">
         <h1 class="left__content">
           our Service
         </h1>
         <ul class="right__content">
            <li>
               <a href="index.php?pagina=home">
                  Home
               </a>
            </li>
            <li>
               <i class="fa-solid fa-chevron-right"></i>
            </li>
            <li>
               Service
            </li>
         </ul>
      </div>
   </div>
</section>
<!--=========== Breadcumd Section Here ========= -->

<!--=========== Service Section Here ========= -->
<section class="service__section pt-120 pb-120">
   <div class="left__shape">
      <img src="assets/img/testi/shape-left.png" alt="left__shape">
   </div>
   <div class="container">
      <div class="section__header section__center wow fadeInDown" data-wow-duration="4s">
         <h2 class="section__title">
           service
         </h2>
         <img src="assets/img/tittle/flower.png" alt="flower__tittle">
      </div>
      <div class="row g-4">
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="service__items">
               <div class="service__thumb">
                  <a href="service-single.html">
                     <img src="assets/img/service/service1.jpg" alt="service__image">
                  </a>
               </div>
               <div class="service__content">
                  <h4>
                     <a href="service-single.html">
                        Photography
                     </a>
                  </h4>
                  <p>
                     It means so much to witness the joy of your wedding day. Congratulations to you both on finding the perfect person.
                  </p>
                  <a href="service-single.html" class="party__btn">
                     read more
                  </a>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="service__items">
               <div class="service__thumb">
                  <a href="service-single.html">
                     <img src="assets/img/service/service2.jpg" alt="service__image">
                  </a>
               </div>
               <div class="service__content">
                  <h4>
                     <a href="service-single.html">
                        reception
                     </a>
                  </h4>
                  <p>
                     It means so much to witness the joy of your wedding day. Congratulations to you both on finding the perfect person.
                  </p>
                  <a href="service-single.html" class="party__btn">
                     read more
                  </a>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="service__items">
               <div class="service__thumb">
                  <a href="service-single.html">
                     <img src="assets/img/party/wedding3.jpg" alt="service__image">
                  </a>
               </div>
               <div class="service__content">
                  <h4>
                     <a href="service-single.html">
                       wedding cake
                     </a>
                  </h4>
                  <p>
                     It means so much to witness the joy of your wedding day. Congratulations to you both on finding the perfect person.
                  </p>
                  <a href="service-single.html" class="party__btn">
                     read more
                  </a>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="service__items">
               <div class="service__thumb">
                  <a href="service-single.html">
                     <img src="assets/img/service/service3.jpg" alt="service__image">
                  </a>
               </div>
               <div class="service__content">
                  <h4>
                     <a href="service-single.html">
                        wedding post
                     </a>
                  </h4>
                  <p>
                     It means so much to witness the joy of your wedding day. Congratulations to you both on finding the perfect person.
                  </p>
                  <a href="service-single.html" class="party__btn">
                     read more
                  </a>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="service__items style__service">
               <div class="service__thumb">
                  <a href="service-single.html">
                     <img src="assets/img/service/service4.jpg" alt="service__image">
                  </a>
               </div>
               <div class="service__content">
                  <h4>
                     <a href="service-single.html">
                        wedding ring
                     </a>
                  </h4>
                  <p>
                     It means so much to witness the joy of your wedding day. Congratulations to you both on finding the perfect person.
                  </p>
                  <a href="service-single.html" class="party__btn">
                     read more
                  </a>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="service__items style__two">
               <div class="service__thumb">
                  <a href="service-single.html">
                     <img src="assets/img/service/service5.jpg" alt="service__image">
                  </a>
               </div>
               <div class="service__content">
                  <h4>
                     <a href="service-single.html">
                       wedding dress
                     </a>
                  </h4>
                  <p>
                     It means so much to witness the joy of your wedding day. Congratulations to you both on finding the perfect person.
                  </p>
                  <a href="service-single.html" class="party__btn">
                     read more
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--=========== Service Section End ========= -->

<!--=========== Footer Section Here ========= -->
<div class="footer__section">
   <div class="container">
      <div class="border__area">
         <div class="container">
            <div class="footer__logo center">
               <a href="index.php?pagina=home">
                  <img src="assets/img/logo/logo.png" alt="footer__logo">
               </a>
            </div>
            <div class="footer__bottom center">
               <p>© 2023 All Rights Reserved. Designed by <a href="#0" class="text-base-2">NextGenerationDev</a></p>
               <ul class="footer__icon">
                  <li>
                     <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                  </li>
                  <li>
                     <a href="#0"><i class="fa-brands fa-twitter"></i></a>
                  </li>
                  <li class="active">
                     <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                  </li>
                  <li>
                     <a href="#0"><i class="fa-brands fa-whatsapp"></i></a>
                  </li>
                  <li class="mr-none">
                     <a href="#0"><i class="fa-brands fa-instagram"></i></a>
                  </li>
               </ul>
               <ul class="footer__menu">
                  <li><a href="index.html">home</a></li>
                  <li><a href="about.html">about</a></li>
                  <li><a href="service.html">service</a></li>
                  <li><a href="story.html">Story</a></li>
                  <li><a href="gallery.html">gallery</a></li>
                  <li><a href="blog.html">blog</a></li>
                  <li class="mr-none"><a href="contact.html">contact</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<!--=========== Footer Section End ========= -->
