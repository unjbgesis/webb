<!Doctype html>

<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>frontera</title>
    <link rel="stylesheet" href="estilos.css">
  </head>

  <body >
      <!--<img src="E:\2017\INGENIERIA WEB\HOTEL\imagenes\fondo.jpg" width="120" height="120" align="center">-->
      <div align="center" class="cuadro-background">

      <form class="" action="ejemplo.php" method="POST">
          <p class="white-text">REGISTRO DE USUARIO</p>
        <label class="black-text">Nombres:  <input type="text" name="nom" placeholder="Ingrese sus nombres" required ></label><br>
        <label class="black-text">Apellidos:  <input type="text" name="ape" placeholder="Ingrese sus apellidos" required></label><br>
        <label class="black-text">Turno:</label>
        <select name="turno" required>
            <option value="Mañana">Manana</option>
            <option value="Tarde">Tarde</option>
        </select><br>
        <label class="black-text">contraseña:</label>
        <input type="password" name="pass" required><br>
        <label class="black-text" >Teléfono:  <input type="text" name="fono"</label><br>
        <label>Tipo de usuario:</label><br>
        <label class="black-text" >Administrador<input value="a" type="radio" name="genero" ></label><br>
        <label class="black-text">Recepcionista <input  value="r" type="radio" name="genero" checked ></label><br>
        <!--<label>id: <input type="text" name="id"</label><br>-->
        <button <input type="submit" name="enviar">Enviar Datos</button>
      </form>
      </div>
</body>
</html>
