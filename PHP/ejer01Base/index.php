<!DOCTYPE html>

<html    lang='es'>

<head>
    <title>Menu ejercicio 1</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head> 

<body>
    <p><h4>Todo lo escrito fuera de las marcas de php es entregado en la respuesta http sin pasar por el procesador php.</h4></p>
    <hr>

    <?php
        echo "<h4>Todo texto y/o html <span style='color: blue'>entregado por el procesador php</span> usando la sentencia echo.</h4>";
        echo "<hr>";

        $miVariable = 1;

        echo "<h4>Sin usar concatenador <span style='color: blue'>\$miVariable</span>: valor$miVariable</h4>";
        echo "<h4>Usando concatenador <span style='color: blue'>\$miVariable</span>: valor" . $miVariable;
        echo "<hr>";

        $miVariable = true;

        if($miVariable == true){
            echo "<h4>Variable tipo booleana o lógica (verdadero) <span style='color: blue'>\$miVariable</span>: $miVariable</h4>";
        }
        if($miVariable == true){
            echo "<h4>Variable tipo booleana o lógica (falsa) <span style='color: blue'>\$miVariable</span>: </h4>";
        }
        echo "<hr>";

        define("MICONSTANTE","valorConstante");
        echo "<h4><span style='color: blue'>MICONSTANTE</span>: " . MICONSTANTE;
        echo "<h4>valor de <span style='color: blue'>MICONSTANTE</span>: " . gettype(MICONSTANTE);
        echo "<hr>";

        echo "<h4>Arreglos</h4>";

        $aMiArreglo = ["Hola","Hello"];

        echo "<h4><span style='color: blue'>\$aMiArreglo</span>: " . $aMiArreglo[0];
        echo "<h4><span style='color: blue'>\$aMiArreglo</span>: " . $aMiArreglo[1];
        echo "<h4>tipo de <span style='color: blue'>\$aMiArreglo</span>: " . gettype($aMiArreglo);

        echo "<h4>Se agregan por programa tres elementos nuevos</h4>";
        array_push($aMiArreglo,"Ciao");
        array_push($aMiArreglo,"Salut");
        array_push($aMiArreglo,"Hallo");
        $i = 0;
        echo "<ul>";
        for($i=0; $i < 5; $i++){
            echo "<li><h4><span style='color: blue'>\$aMiArreglo</span>: $aMiArreglo[$i]</h4></li>" ;
        }
        echo "</ul>";
        echo "<h4>Arreglo de dos dimensiones (diccionario)</h4>";

        $aIdiomas = ["Español", "Ingles", "Italiano", "Francés"];
        $aIdiomas2 =[];
        $aEspañol = ["Hola","Por favor", "Gracias", "De nada", "Adiós"];
        $aIngles = ["Hello","Please", "Thanks", "You're welcome", "Goodbye"];
        $aItaliano = ["Ciao","Per favore", "Grazie", "Prego", "Addio"];
        $aFrancés = ["Salut","S'il vous plaît", "Merci", "De rien", "Adieu"];

        array_push ($aIdiomas2,$aEspañol);
        array_push ($aIdiomas2,$aIngles);
        array_push ($aIdiomas2,$aItaliano);
        array_push ($aIdiomas2,$aFrancés);

        echo "<div style='width: 32%'><table style='border: solid 2px; border-collapse: collapse; background-color: green;'><thead><tr>";

        for($i = 0; $i < 4; $i++ )
        {
            echo "<th scope='colgroup' style='width: 200px; height: 35px; border: solid 1px;'>" . $aIdiomas[$i] . "</th>";
        }
        echo "</tr></thead><tbody>";
        
        for($j = 0; $j < 4; $j++ )
        {
            echo "<tr>";
            for ($i = 0; $i < 4; $i++)
            {
                echo "<td style='border: solid 1px; padding-left: 10px;'>" . $aIdiomas2[$i][$j] . "</th>";
            }
            
        }
        echo "</tbody></table></div>"; //fin tabla

        echo "<p>También así se puede expresar el valor de <span style='color: blue'>\$aIdiomas2[2][3]: " . $aIdiomas2[2][3] . "</p>";
        echo "<p>Cantidad de elementos de diccionario: " . count($aIdiomas) . "</p>";

        echo "<h1>Variables de tipo arreglo asociativo</h1>";

        $renglonDeLiquidacion = ["legEmpleados"=>"c001", "Apellido"=>"Smith","SalarioBasico"=>20000,"fechaIngr"=>"02/04/2019"];

        echo "<p>";
        echo "Legajo de empleado: " . $renglonDeLiquidacion['legEmpleados'] . "</br>";
        echo "Apellido: " . $renglonDeLiquidacion['Apellido'] . "</br>";
        echo "Salario básico: " . $renglonDeLiquidacion['SalarioBasico'] . "</br>";
        echo "Fecha de ingreso: " . $renglonDeLiquidacion['fechaIngr'];
        echo "</p>";
        echo "<p>";
        echo "Cantidad de elementos: " . count($renglonDeLiquidacion) . "</br>";
        echo "Tipo de dato: " . gettype($renglonDeLiquidacion);
        echo "</p>";
        echo "<hr>";

        echo "<h4>Expresiones aritméticas</h4>";
        $x = 10;
        $y = 5;

        echo "<p>La variable <span style='color: blue'>\$x</span> tiene el siguiente valor: " . $x . "</p>";
        echo "<p>La variable <span style='color: blue'>\$y</span> tiene el siguiente valor: " . $y . "</p>";
        echo "<p>La variable <span style='color: blue'>\$x</span> tiene el siguiente tipo: " . gettype($x) . "</p>";
        echo "<p>La variable <span style='color: blue'>\$y</span> tiene el siguiente tipo: " . gettype($y) . "</p>";

        echo "<p>Así se imprime una expresión aritmética, por ejemplo de <span style='font-weight: bold'>suma</span>: <span style='color: blue'>(\$x + \$y)</span> = " . $x + $y;
        echo "<p>Así se imprime una expresión aritmética, por ejemplo de <span style='font-weight: bold'>multiplicación</span>: <span style='color: blue'>(\$x * \$y)</span> = " . $x * $y;
        echo "<p>Así se imprime una expresión aritmética, por ejemplo de <span style='font-weight: bold'>división</span>: <span style='color: blue'>(\$x / \$y)</span> = " . $x / $y;

    ?>


</body>

</html>