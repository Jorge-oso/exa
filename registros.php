<html>
    <head>
        <meta charset="utf-8">
        <title>Registros</title>
        <link rel="shortcut icon" href="BotonesFp/iconos/NTit.ico">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="contenedor">
            <ul class="menu">
                
                <li>
                    <img src="BotonesFp/casa.png">
                    <a href="Inicio.php">Inicio</a>
                </li>
                
                <li><img src="BotonesFp/nuevo.png">
                    <a href="llegadas.php">Llegadas</a>
                </li>
                
                <li><img src="BotonesFp/subir.png">
                    <a href="Almacen.php">Almacen</a>
                </li>
                
                <li><img src="BotonesFp/Titular.png">
                    <a href="proveedores.php">Proveedores</a>
                </li>
                
                <li><img src="BotonesFp/Pagos.png">
                    <a href="ventas.php">Ventas</a>
                </li>
                
                <li><img src="BotonesFp/NTit.png">
                    <a href="registros.php">Registro</a>
                </li>
                
                <li><img src="BotonesFp/salida.png">
                    <a href="Bienvenido.php">Salir</a>
                </li>
            </ul>
        </div>
        <br>
        <div class="contenedor6">
            <h1 class="box1">REGISTRAR PERSONA</h1>
            <form method="post" name="multipart/form.data">
                
                <label>Nombre Usuario</label>
                <input type="text" name="nombre" placeholder="Escribe el nombre" required>
                
                <label>Apellido:</label>
                <input type="text" name="apellido" placeholder="Apellidos" required>
                
                <label>Teléfono:</label>
                <input type="text" name="tele" placeholder="Ej.5525458545" required>
                
                <label>Fecha de registro:</label>
                <input type="date" name="fecha"  required>
                
                <label>Usuario:</label>
                <input type="text" name="usuario" required>
                
                <label>Contraseña:</label>
                <input type="text" name="contra"  required>
                
                <input type="submit" name="register" value="Agregar usuario" id="boton" required>
            </form>
        </div>
        <?php 
        include("con_db.php");
        ?>
    </body>
</html>