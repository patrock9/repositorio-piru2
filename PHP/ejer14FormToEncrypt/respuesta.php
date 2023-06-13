<!DOCTYPE html>

<html    lang='es'>

    <head>
        <title>RESPUESTA FORMULARIO</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head> 
    
    <body>
        <?php

            echo "<p>Clave: " . $_GET['contraseña'] . "</p>";
            $claveEncriptada = md5($_GET['contraseña']);
            echo "<p>Clave encriptada en md5 (128 bits o 16 pares de hexafrcimales): </p>";
            echo $claveEncriptada;
            echo "</br></br></br>";

            echo "<p>Clave: " . $_GET['contraseña'] . "</p>";
            $claveEncriptada = sha1($_GET['contraseña']);
            echo "<p>Clave encriptada en md5 (160 bits o 20 pares de hexafrcimales): </p>";
            echo $claveEncriptada;

        ?>
    </body>
</html>