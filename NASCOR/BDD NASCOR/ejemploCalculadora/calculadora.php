<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Dos Números</title>
</head>
<body>
    <h1>Calculadora de Dos Números</h1>
    	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			<label for="num1">Introduce el primer número:</label>
			<input type="text" id="num1" name="num1" required>

			<label for="num2">Introduce el segundo número:</label>
			<input type="text" id="num2" name="num2" required>

			<button type="submit">Calcular Suma</button>
    	</form>
</body>
</html>
 <?php
    require_once 'src/CalculadoraClass.php';

    use Application\CalculadoraClass;

    // Verificar si se ha enviado el formulario y se han recibido valores para 'num1' y 'num2'
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['num1']) && isset($_POST['num2'])) {
        // Obtener los números del formulario
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        // Verificar si los números son válidos
        if (is_numeric($num1) && is_numeric($num2)) {
            // Crear una instancia de la clase CalculadoraClass
            $calculadora = new CalculadoraClass();

            // Calcular la suma y mostrar el resultado
            $resultado = $calculadora->sumar($num1, $num2);
            echo "<br><strong style='color:green;'>La suma de $num1 y $num2 es: $resultado </strong>" . "<br>";
        } else {
            echo "<br><strong style='color:red;'> Error: Introduce dos números válidos.</strong>";
        }
    }
    ?>
