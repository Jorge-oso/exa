<html>
    <head>
        <title>Bienvenido</title>
        <link rel="shortcut icon" href="BotonesFp/iconos/Lumega.ico">
        <link rel="stylesheet" href="stylebienvenido.css">
    </head>
    <body>
        <h1 class="box2">Bienvenido al sistema Farmacias<br>.:LUMEGA-MX:.</h1>
        <?php
            include("getDatos.php");
        ?>
        <div class="lume"><br>
            <form method="post">
                <img src="BotonesFp/Lumega.png" id="imagen"><br>
                <label>Usuario:</label>                
                <input type="text" id="Us" name="User">
                <label>Contraseña:</label>
                    
                <input type="password" id="contra" name="Contra"><br>
                <button type="submit" class="Boton" id="inicio" name="Login">Ingresar</button>
            </form>
        </div>
    </body>
</html>