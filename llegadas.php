<html>
    <head>
        <title>Llegadas</title>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="BotonesFp/iconos/nuevo.ico">
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
        <div class="contenedor2">
            <h1 class="box1">ENTRADAS DE PRODUCTOS</h1>
            <form method="post" name="multipart/form.data">
                <label>Codigo:</label>
                <input type="text" name="codigoc" placeholder="Codigo producto" required>
                
                <label>Nombre producto:</label>
                <input type="text" name="nombrec" placeholder="Escribe el producto" required>
                
                <label>Tipo:</label>
                <input type="text" name="tipoc" placeholder="Ej.Pastillas,jarabe,ect." required>
                
                <label>Contenido:</label>
                <input type="text" name="contenidoc" placeholder="Ej10 tabletas,500ml,etc" required>
                
                <label>Descripcion:</label>
                <textarea id="comen" name="desc" cols="30" rows="2"></textarea>
                
                <label>Cantidad:</label>
                <input type="text" name="cantidadc" placeholder="Ej.2,3,4" required>
                
                <input type="submit" name="entrada" value="Registrar producto" id="boton" required>
            </form>
        </div>
        <?php 
        include("con_db.php");
        ?>
    </body>
</html>