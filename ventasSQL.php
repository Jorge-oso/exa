<?php
    include("conexion.php");
    
if(isset($_POST['Venta'])){
    $Cod = $_POST['Codigo'];
    $Cantidad = $_POST['Cant'];
    $Importe = 0;
    $CantAc = 0;
    $Nombre = "";
    $Precio = 0;
    
    $Query = "select almacen.*, alta.ALT_nombre from almacen,alta where almacen.codigo = $Cod and alta.codigo = almacen.codigo";
    
    $Consulta = mysqli_query($enlace,$Query);
    if($dato= mysqli_fetch_array($Consulta)){//Verificamos que el codigo ingresado corresponda a un producto
        if($dato['ALM_stock'] >= $Cantidad){//Verificamos que el stock sea suficiente para surtir la venta
            $Precio = $dato['ALM_precio'];
            
            $CantAc = $dato['ALM_stock']-$Cantidad;
            
            $Importe = $Precio*$Cantidad;
            
            $Nombre = $dato['ALT_nombre'];
            
            $QueryV = "insert into venta(fecha,VEN_ticket,VEN_cantidad,importe,codigo) value (now(),1,$Cantidad,$Importe,$Cod)";
            
            $QueryM = "update almacen set ALM_stock = $CantAc where codigo = $Cod";
            mysqli_query($enlace,$QueryM);
            
            $Insercion = mysqli_query($enlace,$QueryV);
            if($Insercion){
                
                 $Consulta = mysqli_query($enlace,"select venta.*, alta.ALT_nombre, almacen.ALM_precio from venta, alta, almacen where venta.VEN_ticket = 1 and venta.codigo = almacen.codigo and venta.codigo = alta.codigo");
                
                while($dato = mysqli_fetch_array($Consulta)){
                    $Codi = $dato['codigo'];
                    $Nombre = $dato['ALT_nombre'];
                    $Cantidad = $dato['VEN_cantidad'];
                    $Precio = $dato['ALM_precio'];
                    $Importe = $dato['importe'];
                    echo("
                    <tr>
                        <td>$Codi </td>
                        <td>$Nombre  </td>
                        <td>$Cantidad pz.</td>
                        <td>$$Precio</td>
                        <td>$$Importe</td>
                    </tr>");
                }
            }
            else{
                echo("Valio Madres!");
            }
        }
        else{
            echo("
                <div id='Modal'>
                    <h1>¡UPPS!</h1>
                    <h2>No cuentas con el Stock NECESARIO</h2>
                    <a onClick='oculta()' id='Cancel'>Listo</a>
                </div>");
        }
    }
}
?>