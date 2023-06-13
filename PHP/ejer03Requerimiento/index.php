<!DOCTYPE html>

<html    lang='es'>

    <head>
        <title>Menu ejercicio 3</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head> 

    <body>
        
        <h4>En este ejemplo se utiliza la función include() que ubica código php definido en el archivo ejemplo2.inc:</h4>
        <h4>Antes de insertar el include las variables declaradas en el mismo no existen.
        </br>Las variables son:</h4>

        <?php

            include("./malarchivo.inc");
            echo "<h4>La variable arreglo 1 es: " . $arreglo1;
            echo "<h4>La variable arreglo 2 es: " . $arreglo2;

            echo "</br></br></br><h4>Aquí ya se ejecutó la función include(). Cuando se usa include ocurre que si el archivo '.inc' no existe, se visualiza un warning y el script sigue ejecutándose hasta el final.</h4>";
            include("./archivo.php");
            
            echo "<h4>Las 2 variables de tipo array asociativo en el .inc son: </h4>";
            $j = 0;
            $i = 0;

            echo "<div style='width: 32%'><table style='border: solid 2px; border-collapse: collapse; background-color: green;'><thead><tr>";
            
            for ($i = 0; $i < 4; $i++)
            {
                echo "<td style='border: solid 1px; padding-left: 10px;'>" . $empleado1[$i] . "</th>";
            }
            echo "<tr>";
            for ($i = 0; $i < 4; $i++)
            {
                echo "<td style='border: solid 1px; padding-left: 10px;'>" . $empleado2[$i] . "</th>";
            }
            echo "</tbody></table></div>"; //fin tabla

            $i = count($empleado1);
            $j = count($empleado2);
            $longitud = ($i + $j);
            
            if($longitud == 8){
                echo "</br></br>La longitud de cada uno de los 2 arreglos es: 4";
            }

            echo "</br></br></br></br>";
            echo "<h4>Ahora requiero un archivo inexistente para observar el fatal error:</h4>";
            require("./inexistente.inc");
        ?>



    </body>

</html>