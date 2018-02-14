<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ejercicio 03</title>
</head>
<body>
<form  method="get">
    <div>
        <label for="dia">Introduce un dia: </label>
        <input type="number" min="1" max="7" name="dia" value="1">
    </div>
    <br>
    <input type="submit" value="Enviar"></input>
</form>
<?php

$dia = $_GET["dia"];

if (isset ($dia)) {
    echo "<h1>Día: $dia</h1>";

 swith ($dia) {
    case 1:
    echo "Lunes";
    break;
}
}
?>
</body>
</html>