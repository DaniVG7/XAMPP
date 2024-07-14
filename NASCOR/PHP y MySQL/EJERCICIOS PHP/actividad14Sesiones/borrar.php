    <?php
    session_start();
    $indice = $_POST['posicion'];
    if(isset($_SESSION['nombre'][$indice])) {
             unset($_SESSION['nombre'][$indice]);
          }
    header("location:index.php");
    ?>