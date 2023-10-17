 <!--=========== Relleno ========= -->
 <section class="banner__section">
      <div class="banner-overlay">
      <div class="form-register">
    <h2>Registro</h2>
    <form method="post">
        <div>
            <span class="icon"><i class="fa-solid fa-user"></i></span>
            <input name="registroNombre"type="text" placeholder=" Usuario" required>
        </div>
        <div>
            <span class="icon"><i class="fa-solid fa-envelope"></i></span>
            <input name="registroEmail" type="email" placeholder=" Correo" required>
        </div>
        <div>
            <span class="icon"><i class="fa-solid fa-lock"></i></span>
            <input name="registroPassword" type="password" placeholder=" Contraseña" required>
        </div>
        <?php
        $registro = ControladorFormularios::ctrRegistro();
        //echo $registro;
        if ($registro == "ok"){
            echo '<script>
            if (window.history.replaceState){
                window.history.replaceState(null,null, window.location.href);
            }
            </script>';
           
            echo '<div class="alert alert-success">El usuario ha sido registrado</div>';
         }
    
        ?>
        <button type="submit" class="btn">Registrarse</button>
    </form>
</div>
      </div>
   </section>

   <!--=========== No tocar ========= -->

   <div class="footer__section">
      <div class="container">
         <div class="border__area">
            <div class="container">
               <div class="footer__logo center">
                  <a href="">
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
