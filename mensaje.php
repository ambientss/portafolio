<?php
   //Reset.
   $nombre = $email = $mensaje = $para = $asunto = $msjCorreo = NULL;

   if (isset($_POST['submit'])) {
      //Valores.
      $nombre = $_POST['Nombre'];
      $email = $_POST['email'];  
      $mensaje = $_POST['Mensaje'];
      $para = 'sesergio.gtz@gmail.com';

      //Asunto.
      $asunto = 'Mensaje de' . " " . $nombre . "\r\n";
      $asunto .= '/' . " " . $email . "\r\n";

      //Mensaje.
      $msjCorreo = "Nombre: " . $nombre;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Email: " . $email;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Mensaje: " . $mensaje;
      $msjCorreo .= "\r\n";

    if (mail($para, $asunto, $msjCorreo)) {

    } else {
         echo "<script language='javascript'>
            alert('Datos incorrectos, por favor intenta de nuevo');
         </script>";
    }
  }
?>

<html lang="es-MX">
<head>
<meta charset="utf-8">
<title>Daniel S. Gtz – Mensaje Enviado</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
<link rel="stylesheet" type="text/css" media="(orientation:landscape) and (min-width:1025px)" href="css/msj.css"/>
<link rel="stylesheet" type="text/css" media="(orientation:landscape) and (min-width:641px) and (max-width:1024px)" href="css/msj1024.css"/>
<link rel="stylesheet" type="text/css" media="(orientation:landscape) and (max-width:640px)" href="css/msj640.css"/>
<link rel="stylesheet" type="text/css" media="(orientation:portrait) and (min-width:376px)" href="css/msjP.css"/>
<link rel="stylesheet" type="text/css" media="(orientation:portrait) and (max-width:375px)" href="css/msjP375.css"/>
</head>
<body>
<header>
<nav>
<h1><a id="m_gtz" href="index.html" target="_self">DANIEL S. GUTIÉRREZ</a></h1>
<ul>
<li><a id="m_bio" href="bio.html" target="_self">BIOGRAFÍA</a></li>
</ul>
</nav>
</header>
<section id="s1">
<p id="msj1">Gracias, tu mensaje ha sido enviado.</p>
<p id="msj2">Pronto estaré contestándote.</p>
</section>
<footer>
<div class="RedesSociales">
<div>
<a href="https://www.instagram.com/sesergio.gtz/" target="_blank" rel="noopener" class="IG"><img src="img/ic_ig.png" alt="Instagram"></a>
<a href="https://www.behance.net/sesergio" target="_blank" rel="noopener" class="Be"><img src="img/ic_be.png" alt="Behance"></a>
<a href="https://www.youtube.com/channel/UCTiuzj0CPfVnRuSdkBvwy8w" target="_blank" rel="noopener" class="YouTube"><img src="img/ic_yt.png" alt="YouTube"></a>
</div>
</div>
<div class="fDatos">
<em id="firma">Diseño: Daniel Gtz</em>
<em id="firma">Programación: Daniel Gtz</em>
<em id="firma">Portafolio | 2018</em>
</div>
</footer>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins|Roboto+Slab">
</body>
</html>

<?php
?>