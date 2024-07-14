<!DOCTYPE html>
<html>
<head>
    <title>Orden Inverso</title>
</head>
<body>
    <h1>Ingrese 6 datos</h1>
    <form method="post">
        <?php
        $datos = array();

        for ($i = 1; $i <= 6; $i++) {
            echo "<label>Dato $i:</label> <input type='text' name='dato$i'><br>";
        }
        ?>

        <input type="submit" value="Mostrar en orden inverso">
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            for ($i = 1; $i <= 6; $i++) {
                $dato = $_POST["dato$i"];
                array_push($datos, $dato);
            }

            echo "<h2>Datos en orden inverso:</h2>";
            for ($i = 5; $i >= 0; $i--) {
                echo "<p>{$datos[$i]}</p>";
            }
        }
        ?>
    </form>
</body>
</html>
