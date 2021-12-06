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
	  <title>KarintDent-Contacto</title>
	  
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Caompatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/8e014f6cde.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href= "img/ICONO.png">
    <link rel="stylesheet" type="text/css" href="style/style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="style/ubicaciones.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="style/contacto.css" media="screen" />

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
 

<!--CODIGO DEl TRATAMIENTO-->

          <div class="container3">
            <h3 class="titulo"> Contáctanos de servicio al cliente </h3>
          <div class="container2">
      
           <div class ="item">
            <center><img src="img/nacional.png"  alt="" class="item-img"></center>
            <div class= "item-text">
            <h3>Ubicación</h3>
            <p>Consulta las ubicaciones de nuestros tres consultorios en CDMX<p/>
           </div> 
           </div>
          
           <div class ="item">
            <center><img src="img/tratamiento.png"  alt="" class="item-img"></center>
            <div class= "item-text">
            <h3>LLamanos</h3>
            <p><center>+52 55 67 68 16 64</center><p/>
            </div> 
           </div>

           <div class ="item">
           <center><img src="img/utilidad.png"  alt="" class="item-img"></center>
            <div class= "item-text">
            <h3>  Correo electronico</h3>
            <p><center>contacto@karindent.com</center><p/>
            </div> 
           </div>

            <ul>
          </div>
        </div>

           <div class="container3">
            <h3 class="titulo"> Estamos para atenderte </h3>
            <ul>
              <div class="ubi">
                     
              </div>
               
            </div>

 <div class="container2 new">
          <form action="" method="POST" id="form">

              <div class="form" >
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
                  <label>Telefono</label><br><br>
                  <input type="number" name="telefono" id="telefono" required><span class="barra"></span>
                </div>
                <div class="grupo">
                 <label for="">Mensaje</label><br>
                  <input type="text-area" name="mensaje" id="mensaje" required><span class="barra"></span>
                </div>          
                <button id="cita" type="submit" value="registrarme" name="registrarme"> Contactanos </button>
              </div>
          </form>  


           <div class ="item">
            <div class= "item-text">
            <h3>¿Quines somos?</h3>
            <p>Consultoria de dentista bien establecido y calificado que ofrece una excelente odontología para toda la familia. Nuestra prioridad es hacer que se sienta cómodo y a gusto en un entorno seguro y acogedor.</p>
            <h3>Visión</h3>
            <p>Promover la salud bucal e integral a nivel familiar y de la comunidad. Implementar medidas de prevención y protección de la salud bucal a nivel familiar y de la comunidad. Realizar investigación sobre temas relacionados a la disciplina contextualizada a su práctica odontológica, haciendo uso del método científico.</p><h3>Misión</h3>
            <p>Realizar investigación sobre temas relacionados a la disciplina contextualizada a su práctica odontológica, haciendo uso del método científico.</p>
            </div>
           </div>             
</div>
<div class="container3" >
    <div>
    <h3 style="float: left;font-size: 25px; width: 300px;" class="titulo">Soluciones para <br>mejorar tu sonrisa</h3>
            <p> Ofrecemos tratamientos dentales que mejoran la estética y la salud de tu sonrisa. Ofrecemos una variedad de opciones económicas incluso puentes, coronas, implantes y chapas para reparar dientes rotos, astillados o perdidos. Nuestros pacientes se benefician de ambas, dentaduras completas y parciales, para reemplazar los dientes naturales y recuperar la habilidad de comer, hablar, masticar y sonreír. Todas nuestras reconstrucciones dentales están hechas a la medida para que puedan restaurar poco a poco la apariencia de tus dientes, dándote así una sonrisa natural.</p>
     </div> 
    <div> 
            <h3 style="float: left;font-size: 25px; width: 300px;" class="titulo">Odontología pediátrica:<br></h3>
            <p>Especializado en cuidado para niños ¿Sabías que los niños deben visitar a su dentista antes de su primer año? Nuestros dentistas brindan atención especializada a pacientes desde los 6 meses de edad, así como a sus padres. Contamos con salas de tratamiento divertidas para niños y diseñadas específicamente para que nuestros pacientes más jóvenes se sientan cómodos.</p>   
    </div> 

     <div style="position: relative;right: 300px;"> 
          <h3 style="float: left;font-size: 25px; width:300px;" class="titulo">Extracciones dentales+ <br>extracción de muelas del juicio</h3>
          <p style="width:125%">Una extracción de los dientes es necesaria por un número de razones incluyendo una erosión severa, un mal alineamiento, abscesos o una infección periodontal fuerte. Realizamos extracciones de dientes de emergencia que se hacen el mismo día para ayudar a aliviar el dolor de dientes. Haz clic aquí para más información sobre extracciones dentales.</p>
     </div> 

 </div> 


<!--Coodigo del pie de pagina-->
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
    $telefono=$_POST["telefono"];
    $mensaje=$_POST["mensaje"];



    $insertarDatos="INSERT INTO dentista VALUES ('$nombre','$apellido','$gmail','$telefono','$mensaje')";
    $ejecutarInsertar=mysqli_query($enlace,$insertarDatos) or die ("Estan insertados incorretamente");
  }
if(isset($_POST['registrarme'])){
  echo "<script>";
  echo "alert('Gracias por tu comentario $nombre')";
  echo "</script>";
}

?>