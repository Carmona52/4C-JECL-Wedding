<?php

if (!isset($_SESSION["validarIngreso"])) {
    echo '<script>window.location = "index.php?pagina=ingreso";</script>';
    return;
} else {
    if ($_SESSION["validarIngreso"] != "ok") {
        echo '<script>window.location = "index.php?pagina=ingreso";</script>';
        return;
    }
}

$usuarios = ControladorFormularios::ctrSeleccionarRegistros(null, null);
//echo '<pre>'; print_r($usuarios); echo '</pre>'

?>

<section class="breadcumd__banner">
    <div class="container">
        <div class="breadcumd__wrapper center">
            <h1 class="left__content">
                Users
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
                    Users
                </li>
            </ul>
        </div>
    </div>
</section>
<div class="conatiner-fluid">
    <div class="container py-5">
        <table class="table table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>E-MAIL</th>
                    <th>DATE</th>
                    <th>TOOLS</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $key => $value): ?>
                    <tr>
                        <td>
                            <?php echo $key + 1; ?>
                        </td>
                        <td>
                            <?php echo $value["nombre"]; ?>
                        </td>
                        <td>
                            <?php echo $value["email"]; ?>
                        </td>
                        <td>
                            <?php echo $value["fecha"]; ?>
                        </td>
                        <td>
                            <div class="btn-group">
                                <div class="px-1">
                                    <a href="index.php?pagina=editar&id=<?php echo $value["id"]; ?>"
                                        class="btn btn-warning">
                                        <i class="fa-solid fa-pen-ruler"></i>
                                    </a>
                                </div>
                                <form method="post">
                                    <input type="hidden" value="<?php echo $value["id"]; ?>" name="deleteRegistro">
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                    <?php
                                    $eliminar = new ControladorFormularios();
                                    $eliminar->ctrEliminarRegistro();
                                    ?>
                                </form>
                            </div>
                        </td>

                    </tr>

                <?php endforeach ?>
            </tbody>
        </table>

    </div>
</div>

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
