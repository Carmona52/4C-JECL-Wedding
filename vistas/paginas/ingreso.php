 <!--=========== Relleno ========= -->
 <section class="banner__section">
      <div class="banner-overlay">
         <div class="form-login">
            <h2>Ingreso</h2>
            <form method="post">
                <div>
                    <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                    <input name="ingresoEmail" type="email" placeholder=" Correo" required>
                </div>
                <div>
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input name="ingresoPassword" type="password" placeholder=" Contraseña" required>
                </div>
                <?php
        
                $ingreso = new ControladorFormularios();
                $ingreso -> ctrIngreso();
            
                ?>
                <button type="submit" class="btn">Ingresar</button>
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
