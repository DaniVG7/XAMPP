<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Letra DNI</title>
</head>
<body>
    <h1>Calculadora de Letra DNI</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="dni">Introduce el número de DNI:</label>
        <input type="text" id="dni" name="dni" required>
        <button type="submit">Calcular letra</button>
    </form>
</body>
</html>

<?php
// calculadoradni.php
require_once 'src/DNIClass.php';

use Application\DNIClass;

// Verificar si se ha enviado el formulario y se ha recibido un valor para 'dni'
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['dni'])) {
    // Obtener el número de DNI del formulario
    $miDNI = $_POST['dni'];

    // Verificar si el DNI es un número válido y tiene la longitud correcta
    if (is_numeric($miDNI) && strlen($miDNI) == 8 && $miDNI > 0) {
        // Crear una instancia de la clase DNIClass
        $dniClass = new DNIClass();
        
        // Calcular la letra del DNI y mostrar el resultado
        $letraCalculada = $dniClass->calcularLetra($miDNI);
        echo "<br><strong style= 'color:green';>La letra del DNI $miDNI es: $letraCalculada </strong>" . "<br>";
    } else {
        echo "<br><strong style= 'color:red';> Error: El DNI introducido no es válido.</strong>";
    }
}
?>

