<?php 
include("conexion.php");
/*registros de usuarios*/
if (isset($_POST['register'])) {
	    $nombreU=$_POST['nombre'];
	    $apellidoU=$_POST['apellido'];
	    $telefU=$_POST['tele'];
		$fechaU=$_POST['fecha'];
		$usuario=$_POST['usuario'];
		$contra=$_POST['contra'];
	    $con1 = "INSERT INTO registro(RE_nombre,RE_apellido,RE_telefono,
		RE_fecha,usuario,contra) VALUES ('$nombreU', '$apellidoU', 
        '$telefU', '$fechaU', '$usuario', '$contra')";
    $resu1 = mysqli_query($enlace,$con1);
	    if ($resu1) {
	    	?> 
	    	<center><h3 class="ok">"Te has registrado correctamente"</h3></center>
           <?php
	    } else {
	    	?> 
	    	<center><h3 class="bad">¡Ups ha ocurrido un error!</h3></center>
           <?php
	    }
	}

/*Entradas de los productos*/
if (isset($_POST['entrada'])) {
	    $codigo=$_POST['codigoc'];
	    $nombrec=$_POST['nombrec'];
	    $tipoc=$_POST['tipoc'];
		$contenidoc=$_POST['contenidoc'];
		$desc=$_POST['desc'];
		$cantidadc=$_POST['cantidadc'];
	    $con2 = "INSERT INTO alta(codigo,ALT_nombre,ALT_tipo,
		ALT_contenido,ALT_descripcion,ALT_cantidad) VALUES ('$codigo', '$nombrec', 
        '$tipoc', '$contenidoc', '$desc', '$cantidadc')";
    $resu2 = mysqli_query($enlace,$con2);
	    if ($resu2) {
	    	?> 
	    	<center><h3 class="ok">"Producto nuevo agregado"</h3></center>
           <?php
	    } else {
	    	?> 
	    	<center><h3 class="bad">¡Error al agregar producto!</h3></center>
           <?php
	    }
	}
/*Registro de los proveedores*/
if (isset($_POST['agregaprove'])) {
	    $nombrep=$_POST['nombrep'];
	    $tipop=$_POST['tipop'];
		$contenidop=$_POST['direp'];
		$cantidadp=$_POST['correop'];
	    $con3 = "INSERT INTO proveedor(PRO_nombre,PRO_telefono,PRO_direccion,PRO_correo) VALUES ('$nombrep', '$tipop','$contenidop','$cantidadp')";
    $resu3 = mysqli_query($enlace,$con3);
	    if ($resu3) {
	    	?> 
	    	<center><h3 class="ok">"Proveedor registrado"</h3></center>
           <?php
	    } else {
	    	?> 
	    	<center><h3 class="bad">¡Error al agregar proveedor!</h3></center>
           <?php
	    }
	}


?>