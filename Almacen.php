<html>

<head>
    <title>Almacen</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="BotonesFp/iconos/subir.ico">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="StyleAlmacen.css">
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
    
    <div class="contenedor3">
        <h1 class="box1">AGREGAR PRODUCTO</h1>
        <form method="post" id="FCodigo">
            <label>Codigo:</label>
        <input type="text" name="codigo" class="codigoa" placeholder="Codigo producto" required>

        <center>
            <button type="submit" name="BuscProd" style="display:block;">Buscar</button>
        </center>
        
        </form>
        <?php 
                include("getDatos.php");
                include("setDatos.php");
        ?>
    </div>
    
</body>

</html>
