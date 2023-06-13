<!DOCTYPE html>

<html    lang='es'>

    <head>
        <title>Menu ejercicio 4</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head> 

    <body>
        
        <?php
            echo "<h2>Variables del servidor</h2>";
            echo "SERVER_ADDR: " . $_SERVER["SERVER_ADDR"];
            echo"</br>";
            echo "SERVER_PORT: " . $_SERVER["SERVER_PORT"];
            echo"</br>";
            echo "SERVER_NAME: " . $_SERVER["SERVER_NAME"];
            echo"</br>";
            echo "DOCUMENT_ROOT:  " . $_SERVER["DOCUMENT_ROOT"];

            echo "<h2>Variables del cliente</h2>";
            echo "REMOTE_ADDR: " . $_SERVER["REMOTE_ADDR"];
            echo"</br>";
            echo "REMOTE_PORT: " . $_SERVER["REMOTE_PORT"];

            echo "<h2>Variables del requerimiento</h2>";
            echo "SCRIPT_NAME: " . $_SERVER["SCRIPT_NAME"];
            echo"</br>";
            echo "REQUEST_METHOD: " . $_SERVER["REQUEST_METHOD"];

            echo "<h2>TODAS</h2>";

            foreach($_SERVER as $key_name => $key_value ){
                echo $key_name . $key_value . "</br>";
            }

        ?>

    </body>

</html>