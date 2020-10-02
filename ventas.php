<html>
    <head>
        <meta charset="utf-8">
        <title>Ventas</title>
        <link rel="shortcut icon" href="BotonesFp/iconos/Pagos.ico">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="StyleVentas.css">
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
        
        <div class="contenedor2">
            <center><h1>Ventas FarmaJorge</h1></center>
            <form id="FCodigo" method="post">
                <label>Codigo de Producto:</label>
                <input type="text" name="Codigo">
                
                <label>Cantidad</label>
                <input type="number" name="Cant">
                
                <button type="submit" id="Agregar" name="Venta">Agregar al carrito</button>
            </form>
            
            <div class="Productos">
                <h1>Lista de productos</h1>
                <table id="Tabla">
                    <tr class="encabezado">
                        <td>Código</td>
                        <td>Nombre</td>
                        <td>Cantidad</td>
                        <td>Precio Unit.</td>
                        <td>Importe</td>
                    </tr>
                    <?php
                    include("ventasSQL.php");
                    ?>
                </table>
            </div>
        </div>
        
        <script>
            function oculta(){
                document.getElementById('Modal').style.display="none";
            }
        </script>
    </body>
</html>