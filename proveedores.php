<html>
    <head>
        <title>Proveedores</title>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="BotonesFp/iconos/Titular.ico">
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
        <div class="contenedor4">
            <h1 class="box1">AGREGAR PROVEEDOR</h1>
            <form method="post" name="multipart/form.data">
                
                <label>Nombre Proveedor</label>
                <input type="text" name="nombrep" placeholder="Escribe el nombre" required>
                
                <label>Teléfono:</label>
                <input type="text" name="tipop" placeholder="Ej.5525458574" required>
                
                <label>Dirección:</label>
                <input type="text" name="direp" placeholder="Ej.Delegacion X" required>
                
                <label>Correo:</label>
                <input type="text" name="correop" placeholder="Ej.bebe@gmail" required>
                
                <input type="submit" name="agregaprove" value="Agregar proveedor" id="boton" required>
            </form>
        </div>
        <?php 
        include("con_db.php");
        ?>
    </body>
</html>