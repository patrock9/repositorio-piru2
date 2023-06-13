<!DOCTYPE html>

<html    lang='es'>

    <head>
        <title>Menu ejercicio 5</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head> 

    <body>
        
        <?php
            echo "<h2>Variables tipo objeto en PHP. Objeto renglon pedido</h2>";

            $objRenglonPedido = new stdclass;
            $objRenglonPedido->codArt = "cp001";
            $objRenglonPedido->descrip = "Jaguel 800gr";
            $objRenglonPedido->precioUnitario = 2000;
            $objRenglonPedido->cant = "2";

            echo "<h2><span style='color: blue'>\$objRenglonPedido</span></h2>";
            echo "codArt: " . $objRenglonPedido->codArt;
            echo "</br>descrip: " . $objRenglonPedido->descrip;
            echo "</br>precioUnitario: " . $objRenglonPedido->precioUnitario;
            echo "</br>cant: " . $objRenglonPedido->cant;
            echo "<h2>Tipo de <span style='color: blue'>\$objRenglonPedido</span>: " . gettype($objRenglonPedido);
            echo "<hr>";

            echo "<h2>Definamos arreglo de pedidos:</h2>";
            echo "<h2><span style='color: blue'>\$renglonesPedido</span></h2>";

            $renglonesPedido = [];
            array_push($renglonesPedido, $objRenglonPedido);
            $objRenglonPedido = new stdclass;
            $objRenglonPedido->codArt = "cp002";
            $objRenglonPedido->descrip = "Cards yugioh";
            $objRenglonPedido->precioUnitario = 5000;
            $objRenglonPedido->cant = "3";
            array_push($renglonesPedido, $objRenglonPedido);
            //fin carga de los 2 renglones

            echo "<h2>Tabula <span style='color: blue'>\$renglonesPedido</span>. Recorrer el arreglo de renglones y tabularnos con HTML</h2>";

            foreach ($renglonesPedido as $objRenglonPedido) {
                echo $objRenglonPedido->codArt . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $objRenglonPedido->descrip . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $objRenglonPedido->precioUnitario . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $objRenglonPedido->cant . "</br></br>";
            }
            echo "<hr>";
            echo "<h2>Producción de un objeto <span style='color: blue'>\$objRenglonesPedido</span> con dos atributos array renglonesPedido y catidadDeRenglones</h2>";
            
            $objRenglonesPedido = new stdClass();
            $objRenglonesPedido->renglonesPedido = $renglonesPedido;
            $objRenglonesPedido->CantidadDeRenglones = count($renglonesPedido);

            echo "Cantidad de renglones :".$objRenglonesPedido->CantidadDeRenglones;
            echo "<hr>";

            echo "<h2>Producción de un JSON jsonRenglones:</h2>";
            $jsonRenglonesPedido = json_encode($objRenglonesPedido);
            echo $jsonRenglonesPedido;

        ?>

    </body>

</html>