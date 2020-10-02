<?php
include("conexion.php");

if(isset($_POST['BuscProd'])){
    $codigo = $_POST['codigo'];
    $consulta = mysqli_query($enlace,"select * from alta where codigo =('".$codigo."')");
    if($dato=mysqli_fetch_array($consulta)){
        $Nombre = "Nombre: ".$dato['ALT_nombre'];
        $Tipo = "Tipo: ".$dato['ALT_tipo'];
        $Cont = "Cont.: ".$dato['ALT_contenido'];
        $Desc = "Descripción: ".$dato['ALT_descripcion'];
        
        echo("
            <div class='Elementos'>
                <input type='text' class='Elemento' value='$Nombre'>
                
                <input type='text' class='Elemento' value='$Tipo'>
                
                <input type='text'class='Elemento' value='$Cont'>
                
                <input type='text' class='Elemento' value='$Desc'>
                
            </div>
            ");
        
            echo("<form method='post' id='FormStock'>
            <label>Codigo a afectar:</label>
            
            <input type='text' name='cod' class='contenidoa' value='$codigo' required readonly='readonly'>

            <label>Stock:</label>
            <input type='text' name='stock' class='contenidoa' placeholder='Ej.10pz,30pz,etc' required>

            <label>Precio:</label>
            <input type='text' name='price' class='cantidada' placeholder='Ej.$50,$60' required>

            <input type='submit' name='NStock' value='Agregar producto' id='boton'>
            
            <a href='almacen.php' type='button' id='Cancel'>Cancelar</a>
        </form>")
        ?>
        <script> document.getElementById('FCodigo').style.display="none";
        document.getElementById('FormStock').style.display="block";
        </script>
        <?php
    }
    else{
        ?>
<script>
    alert("No mijo ese no jala");
    document.getElementById('FormStock').style.display="none";
    document.getElementById('FCodigo').style.display="block";
</script>
<?php
    }
}

if(isset($_POST['Login'])){
    $Usuario = $_POST['User'];
    $Contra = $_POST['Contra'];
    
    $Query = "Select * from registro where usuario = '$Usuario' and contra = '$Contra'";
    
    $result = mysqli_query($enlace,$Query);
    if(mysqli_fetch_array($result) >= 1){
        header("Location:Inicio.php");
    }
    else{
        echo("No mijo no pasas");
    }
}
?>
