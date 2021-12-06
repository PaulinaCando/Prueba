<?php
$servidor="localhost";
$usuario="root";
$clave="";
$basededatos="dentista";

$enlace=mysqli_connect($servidor, $usuario,$clave,$basededatos);
if(!$enlace){
echo "Error en la conexion con el servidor";

}


?>
<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/icono.png">
    <title>Agenda tu cita KarinDent</title>
    <link rel="stylesheet" href="style/citas.css">
</head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Caompatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/8e014f6cde.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/icono.png">
    <link rel="stylesheet" type="text/css" href="style/style.css" media="screen" />

</head>

    <body>
        <nav><div class="logo"><a href="index.php"><img src="img/Logo.svg"></a></div>

            <input type="checkbox" id="check">
            <label for="checkbox" class="Botonch">
            <i class="fas fa-bars"></i>
            </label>
            
          <ul class="ocult">
              <li > <a href="index.php">Inicio</a></li>
                    
              <li> <a href="#">Tratamientos</a>
                    <ul>
                    <li><a href="limpiezasdentales.php">Limpiezas dentales</a></li>
                    <li><a href="resinasdentales.php">Resinas dentales</a></li>
                    <li><a href="endodoncias.php">Endodoncias</a></li>
                    <li><a href="coronasdentales.php">Coronas dentales</a></li>
                    <li><a href="periodoncia.php">Periodoncia</a></li>
                    <li><a href="ortodoncia.php">Ortodoncia</a></li>
                    <li><a href="carillasdentales.php">Carillas dentales</a></li>
                    <li><a href="blancamiento.php">Blanqueamiento</a></li>
                    </ul>
              </li>

              <li> <a href="contacto.php">Contacto</a></li>
              <li> <a href="citas.php">Citas</a></li>
              <li> <a href="ubicacion.php">Ubicación</a></li>
              <li> <a href="covid.php">Protocolo Covid-19</a></li>
          </ul>
            <section></section>
        </nav>

<body>
      <form  method="POST" id="form">

        <div class="form">

        <h1>Agenda tu cita en KarinDent</h1><br><br>

        <div class="grupo">

            <input type="text" name="nombre" id="nombre"  required><span class="barra"></span>
            <label for="">Nombre</label>
        </div>

        <div class="grupo">

            <input type="text" name="apellido" id="apellido" required><span class="barra"></span>
            <label for="">Apellido</label>

        </div>

        <div class="grupo">

            <input type="email" name="gmail" id="gmail" required><span class="barra"></span>
            <label for="">Correo Electronico</label>

        </div>

          <div class="grupo">

            <label>Tratamientos</label><br><br>
            <select  name="tratamiento" id="tratamiento">
              <option >Limpieza Dental</option>
              <option >Resina Dental</option>
              <option >Endodoncia</option>
              <option >Corona Dental</option>
              <option >Resina Dental</option>
              <option >Periodoncia</option>
              <option >Ortodoncia</option>
              <option >Carillas Dentales</option>
              <option >Blanqueamiento</option>
              <option >Consulta General</option>
            </select>

          </div>

          <div class="grupo">

            <label for="">Fecha</label><br>
            <input type="date" name="fecha" id="fecha" required><span class="barra"></span>

          </div>

          <div class="grupo"><br>

            <input type="time" name="hora" id="hora" required><span class="barra"></span>
            <label for="">Hora</label>

          </div>

          <button id="registrarme" name="registrarme"type="submit"> Agendar Cita</button>

        </div>
       
      </form>


    <footer class="pie">

    <div class="grupo1">
        <div class="caja">
        <figure>

          <a href="#">
            <img src="img/Logo.svg" alt="Logo divina"/>
          </a>

        </figure>
        </div>

      <div class="caja">
        <h2>SOBRE NOSOTROS</h2>
        <p>En KarinDent tu salud bucal es lo mas importante para nosotros, estamos comprometidos a darte el mejor servicio personalizado para que vivas una nueva experiencia en tu visita al dentista.</p>
        <p>¡Que nada te detenga! Queremos devolverte la confianza en tu sonrisa.</p>
      </div>

      <div class="caja">
        <h2>¡ SIGUENOS !</h2>
        <div class="redes-sociales">
          <a href="https://www.facebook.com/KarinDent-101959242266962" class="fa fa-facebook"></a>
          <a href="https://www.instagram.com/karin__dent/?hl=es" class="fa fa-instagram"></a>
          <a href="https://twitter.com/Karin__Dent" class="fa fa-twitter"></a>
          <h2> Horario de atención </h2>
          <p>Lunes a Sabado de 9:00 a.m a 7:00 p.m</p>
          <h2>Teléfono (s):</h2>
          <p>+55 67 68 16 64</p>
      </div>
      </div>
    </div>
    

    <div class="grupo2">
      <small>&copy: 2021 <b>KarinDent</b> -Todos los derechos reservados</small>
    </div>
    
  </footer>
</body>

</html>

<?php
  if(isset($_POST['registrarme'])){
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $gmail=$_POST["gmail"];
    $tratamiento=$_POST["tratamiento"];
    $fecha=$_POST["fecha"];
    $hora=$_POST["hora"];



    $insertarDatos="INSERT INTO citas VALUES ('$nombre','$apellido','$gmail','$tratamiento','$fecha','$hora')";
    $ejecutarInsertar=mysqli_query($enlace,$insertarDatos) or die ("Estan insertados incorretamente");
  }
if(isset($_POST['registrarme'])){
  echo "<script>";
  echo "alert('Tu cita se registro exitosamente $nombre $apellido')";
  echo "</script>";
}

?>