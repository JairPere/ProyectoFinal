<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Marcelo Silva V.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="CSS/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="CSS/css/animate.css">
    
    <link rel="stylesheet" href="CSS/css/owl.carousel.min.css">
    <link rel="stylesheet" href="CSS/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="CSS/css/magnific-popup.css">

    <link rel="stylesheet" href="CSS/css/aos.css">

    <link rel="stylesheet" href="CSS/css/ionicons.min.css">
    
    <link rel="stylesheet" href="CSS/css/flaticon.css">
    <link rel="stylesheet" href="CSS/css/icomoon.css">
    <link rel="stylesheet" href="CSS/css/style.css">
	  <link rel="stylesheet" href="CSS/circulo.css">
  	</head>
  	<body>
      <nav class="navbar navbar-dark">
        <a class="navbar-brand" href="#898">
          <img class="circular--square" src="IMG/pri.jpeg" />
          <h1 class="display-5">   
          </a>COLEGIO MARCELO SILVA V.</h1>

          <style>
            .nav-link {
              color: black;
            }
          </style>

          <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="msilva.php">Marcelo Silva</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ofertaEduc.php">Oferta Educativa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="contacto.php">Contacto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="comunidad.php">Comunidad</a>
            </li>
          </ul>

          


      </nav>
      <br>
      <br>
	  
    

    <!-- END nav -->
    

    <section class="hero-wrap hero-wrap-2" style="background-image: url(IMG/DONDE.png);">
      <div class="overlay"></div>
      <div class="container-fluid">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">"Otras formas de ponerte en contacto con nosotros"</h1>
          </div>
        </div>
      </div>
	  
    </section>
    <section class="ftco-section contact-section">
      <div class="container-fluid">
        <div class="row d-flex contact-info">
          <div class="col-md-6 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
              <h3 class="mb-10">Localizanos</h3>
              <p><a href="https://maps.app.goo.gl/SZRwhzoF5swyfjoZ8">CALLE UXMAL 419, COL. LOMAS DE JESUS MARIA. CP 20900, JESÚS MARÍA, AGUASCALIENTES</a></p>
	          </div>
          </div>
          <div class="col-md-6 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
              <h3 class="mb-10">Numero de Contacto</h3>
	            <p><a href="tel://4494632355"> 449-463-2355</a></p>
	          </div>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section contact-section">
      <div class="container-fluid">
        <div class="row d-flex contact-info">
          <div class="col-md-6 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
              <h3 class="mb-10">Email</h3>
	            <p><a href="mailto:MarceloSilva@gmail.com">MarceloSilva@gmail.com</a></p>
	          </div>
          </div>
          <div class="col-md-6 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
              <h3 class="mb-10">Website</h3>
              <p><a href="https://www.facebook.com/search/top?q=colegio%20%22marcelo%20silva%22">Colegio "Marcelo Silva" - Faceboock</a></p>
	          </div>
          </div>
        
        </div>
      </div>
    </section>
    
		
		
                            
    <?php

$result = ""; // variable para verificar si el correo se envió correctamente

function filtrar($dato)
{
    $dato = trim($dato);
    $dato = stripslashes($dato);
    return $dato;
}

require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Verificar que se presionó el botón submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreCliente = filtrar($_POST["campoNombre"]);
    $correoCliente = filtrar($_POST["campoEmail"]);
    $telefonoCliente = filtrar($_POST["campoTelefono"]);
    $mensajeCliente = filtrar($_POST["campoMensaje"]);

    // Verificar que los campos requeridos no estén vacíos
    if (empty($nombreCliente) || empty($correoCliente) || empty($mensajeCliente)) {
        $result = "Por favor, complete todos los campos requeridos.";
    } else {
        $mail = new PHPMailer;

        $mail->isSMTP();
        $mail->Host = 'smtp.office365.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Username = '200396@utags.edu.mx'; // Cambia esto a tu dirección de correo
        $mail->Password = '2773adbe'; // Cambia esto a tu contraseña

        $mail->setFrom('200396@utags.edu.mx', $nombreCliente);
        $mail->addAddress('elmundodejair666@gmail.com'); // Cambia esto al correo del destinatario

        $mail->isHTML();
        $mail->Subject = 'Enviado por: ' . $nombreCliente;
        $mail->Body = 'Nombre: ' . $nombreCliente . '<br>Correo: ' . $correoCliente . '<br>Teléfono:' . $telefonoCliente . '<br>Mensaje: ' . $mensajeCliente . '<br>';

        if (!$mail->send()) {
            $result = "Error al enviar el correo.";
        } else {
            $result = $nombreCliente . " ¡Tu mensaje fue enviado correctamente!";
        }
    }
}
?>

      <div class="container-fluid">
          <div class="row">
              <h1>Contactanos</h1>
              <div class="alert alert-info"><?= $result; ?> </div>
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                  <!-- Añadir el atributo "name" al botón de enviar -->
                  <div class="mb-3">
                      <label for="campoNombre" class="form-label">Nombre: </label>
                      <input type="text" name="campoNombre" class="form-control">
                  </div>
                  <div class="mb-3">
                      <label for="campoEmail" class="form-label">Email: </label>
                      <input type="email" name="campoEmail" class="form-control">
                  </div>
                  <div class="mb-3">
                      <label for="campoTelefono" class="form-label">Telefono: </label>
                      <input type="text" name="campoTelefono" class="form-control">
                  </div>
                  <div class="mb-3">
                      <label for="campoMensaje" class="form-label">Mensaje: </label>
                      <textarea name="campoMensaje" class="form-control" cols="30" rows="5"></textarea>
                  </div>
                  <!-- Importante: añadir el atributo "name" al botón de enviar -->
                  <button type="submit" name="submit" class="btn btn-dark">Enviar</button>
                  <button type="reset" class="btn btn-danger">Reiniciar</button>
              </form>
          </div>
      </div>
      <br>
					
      <center>
        <div class="row">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7400.168617062406!2d-102.34298944642944!3d21.96972711294148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429e5fae201c17b%3A0x9239cb117a973354!2sColegio%20%22Marcelo%20Silva%22!5e0!3m2!1ses-419!2smx!4v1698615860643!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
      </center>
				
    <br>
    <br>


		<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container-fluid">
      <div class="row mb-5">
        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-5">
            <h2 class="ftco-heading-2">Contacto</h2>
            <div class="block-23 mb-3">
	            <ul>
	              <li><span class="icon icon-map-marker"></span><span class="text"> Julio Cadena #2012 y 2023, Los arroyitos, Jesus Maria, Aguascalientes.</span></li>
	              <li><span class="icon icon-phone"></span><span class="text">449-463-2355 // 449-156-7927</span></a></li>
	              <li><span class="icon icon-envelope"></span><span class="text"> MarceloSilva@gmail.com</span></a></li>
	            </ul>
	          </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-5">
            <h2 class="ftco-heading-2"></h2>
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style=""></a>
              <div class="text">
                <h3 class="heading"><a href="#"></a></h3>
                <div class="meta">
                  <div><a href="#"><span class=""></span> </a></div>
                  <div><a href="#"><span class=""></span> </a></div>
                  <div><a href="#"><span class=""></span> </a></div>
                </div>
              </div>
            </div>
            <div class="block-21 mb-5 d-flex">
              <a class="blog-img mr-4" style=""></a>
              <div class="text">
                <h3 class="heading"><a href="#"></a></h3>
                <div class="meta">
                  <div><a href="#"><span class=""></span> </a></div>
                  <div><a href="#"><span class=""></span> </a></div>
                  <div><a href="#"><span class=""></span> </a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-5 ml-md-6">
            <h2 class="ftco-heading-2">Links</h2>
            <ul class="list-unstyled">
              <li><a href="index.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Inicio</a></li>
              <li><a href="msilva.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Marcelo Silva V.</a></li>
              <li><a href="ofertaEduc.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Oferta Educativa</a></li>
              <li><a href="contacto.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Contacto</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
        <div class="ftco-footer-widget mb-5 ml-md-6">
          <h2 class="ftco-heading-2">REDES</h2>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
            <li class="ftco-animate"><a href="https://www.facebook.com/profile.php?id=100078035165539"><span class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="https://www.instagram.com/colegio.marcelo.silva/"><span class="icon-instagram"></span></a></li>
          </ul>
        </div>
      </div>
      </div>
    </footer>
  <!-- loader -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>