

<?php
include("conexion.php");
$conec=conectar();
//echo "   se realizo exitosamente";

 ?>
      <!--<img src="E:\2017\INGENIERIA WEB\HOTEL\imagenes\fondo.jpg" width="120" height="120" align="center">-->


<?php
  if(($_POST)){
    $nombre=$_POST['nom'];
    $apellido=$_POST['ape'];
    $turno=$_POST['turno'];
    $contrasena=$_POST['pass'];
    $telefono=$_POST['fono'];
    $genero=$_POST['genero'];

  $insertar="INSERT into usuario (nombre,apellido,turno,contrasena,telefono,tipo_usu)values ('$nombre','$apellido','$turno','$contrasena','$telefono','$genero')" or die("error");
$resultado=mysqli_query($conec,$insertar);
echo"TU REGISTRO SE HIZO CORRECTAMENTE <br>";
echo "<a href='principal.html'> volver al menu</a>";
  }

 ?>
