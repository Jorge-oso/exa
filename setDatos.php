<?php
    include("conexion.php");

if(isset($_POST['NStock'])){
    $Codigo = $_POST['cod'];
    $Stock = $_POST['stock'];
    $Precio = $_POST['price'];
    $Query = "Insert into almacen(ALM_precio,ALM_stock,codigo) values ('$Precio','$Stock','$Codigo')";
    
    $Consulta = "select * from almacen where codigo = $Codigo";
    
    $exist = mysqli_query($enlace,$Consulta);
    if($Dato = mysqli_fetch_array($exist)){
        if(is_numeric($Stock) and is_numeric($Precio)){
            $StockN = $Stock + $Dato['ALM_stock'];
            $QueryM = "update almacen set ALM_precio = $Precio, ALM_stock = $StockN where codigo = $Codigo ";
            $result = mysqli_query($enlace,$QueryM);
            if($result){
                echo("
                <div id='Modal'>
                    <h1>Entrada registrada</h1>
                    <h2>Con exito</h2>
                    <a href='Almacen.php' id='Cancel'>Listo</a>
                </div>");
            }
            else{
                echo("
                <div id='Modal2'>
                    <h1>¡UPSS!</h1>
                    <h2>Error al insertar</h2>
                    <a href='Almacen.php' id='Cancel'>Volver a intentar</a>
                </div>");
            }
        }
        else{
            echo("
            <div id='Modal2'>
                <h1>¡UPSS!</h1>
                <h2>Error al insertar</h2>
                <a href='Almacen.php' id='Cancel'>Volver a intentar</a>
            </div>");
        }
    }
    else{
        if(is_numeric($Stock) and is_numeric($Precio)){
        
            $result = mysqli_query($enlace,$Query);
            if($result){
                echo("
                <div id='Modal'>
                    <h1>Entrada registrada</h1>
                    <h2>Con exito</h2>
                    <a href='Almacen.php' id='Cancel'>Listo</a>
                </div>");
            }
    
            else{
                echo("
                <div id='Modal2'>
                    <h1>¡UPSS!</h1>
                    <h2>Error al insertar</h2>
                    <a href='Almacen.php' id='Cancel'>Volver a intentar</a>
                </div>");
            }
       
        }//Termina de evaluar que son numericos
        else{
            echo("
            <div id='Modal2'>
                <h1>¡UPSS!</h1>
                <h2>Error al insertar</h2>
                <a href='Almacen.php' id='Cancel'>Volver a intentar</a>
            </div>");
        }
    }
}
?>