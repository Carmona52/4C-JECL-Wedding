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
                blog single
            </h1>
            <ul class="right__content">
                <li>
                    <a href="index.html">
                        Home
                    </a>
                </li>
                <li>
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                    blog
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=========== Breadcumd Section Here ========= -->
<?php

if (isset($_GET["id"])) {
    $item = "id";
    $valor = $_GET["id"];

    $usuario = ControladorFormularios::ctrSeleccionarRegistros($item, $valor);
}
?>

<div class="d-flex justify-content-center text-center">
    <form class="p-5 bg-light" method="post">
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                </div>
                <input type="text" class="form-control" value="<?php echo $usuario["nombre"]; ?>" placeholder="name" 
                id="name" name="updateName">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" value="<?php echo $usuario["email"]; ?>"
                    placeholder="Enter email" id="email" name="updateEmail">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="updatePassword">

                <input type="hidden" name="passwordActual" value="<?php echo $usuario["password"]; ?>">

                <input type="hidden" name="id" value="<?php echo $usuario["id"]; ?>">
            </div>
        </div>

        <?php


        $actualizar = ControladorFormularios::ctrActualizarRegistro();
        if ($actualizar == "ok") {
            echo '<script>
                if (window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                }
                </script>';

            echo '<div class="alert-success"> El usuario ha sido actualizado</div>
                <script>
                    setTimeout(function(){
                        window.location = "index.php?pagina=home";
                    }, 1600);
                </script>';
        }

        ?>

        <div class="d-flex justify-content-center text-center">
            <form class="p-5 bg-light" method="post">
                <!-- Tus campos de formulario aquí, puedes usar $usuario["name"], $usuario["email"], etc. -->
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>

    </form>
</div>



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