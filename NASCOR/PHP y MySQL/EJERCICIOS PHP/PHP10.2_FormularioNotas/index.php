<?php
require_once '../0comun/libreria.php';
cabecera("");
?>
    
    <form method="post" action="FormularioNotas.php">

    <label>Nombre del Alumno:</label> <input type="text" name="alumno[nombre]"/><br>
    <h2>Notas de las actividades</h2>
    <div id="notas">
        <div id="actividad">
            Actividad <br>
            <input type="text" required name="alumno[actividad][0]" value="">
            <input type="text" required name="alumno[actividad][1]" value="">
            <input type="text" required name="alumno[actividad][2]" value="">
        </div>
        
        <div id="dia">
            Dia <br>
            <input type="date" required name="alumno[dia][0]">
            <input type="date" required name="alumno[dia][1]">
            <input type="date" required name="alumno[dia][2]">

        </div>
        <div id="nota">
            Nota 
            <input type="number" required name="alumno[nota][0]">
            <input type="number" required name="alumno[nota][1]">
            <input type="number" required name="alumno[nota][2]">

        </div>
    </div>
    <br>
    <input type="button" value="+" onclick="añadirActividad()">


    <h2>Nota de actitud</h2> 
    <select name="alumno[notaActitud]" id="">
        <option value="#" selected disabled>Selecciona una nota</option>
        <option value="1" >1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select> 

    <h2>Lenguajes que domina</h2>

    JavaScript<input type="checkbox" value="JavaScript" name="alumno[lenguaje][0]">
    Java<input type="checkbox" value="Java" name="alumno[lenguaje][1]">
    C++<input type="checkbox" value="C++" name="alumno[lenguaje][2]">
    Python<input type="checkbox" value="Python" name="alumno[lenguaje][3]">

    <br><br><br>
    
    <input type="submit" value="Guardar">

    </form>

<?php 
pie("");
?>