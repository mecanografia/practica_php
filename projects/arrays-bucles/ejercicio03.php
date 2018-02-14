<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ejercicio 03</title>
</head>
<body>
<form  method="get">
    <div>
        <label for="numero_elementos"Introduce el numero de elementos: </label>
        <input type="number" min="1" max="100" name="numero_elementos" value="">
    </div>
    <br>
    <input type="submit" value="Enviar"></input>
</form>
<?php

$numero_elementos = $_GET ["numero_elementos"];

if (!isset($numero_elementos) || empty($numero_elementos)) die;

$tmeperaturas = array();

// Inicializo el array de temperaturas
for ($i = 0; $i < $numero_elementos; $i++){
    $temperaturas[$i] = rand(1,30);
}

$suma = 0;
// Calculo la media
for ($i = 0; $i < $numero_elementos; $i++){
    $suma = $suma + $temperaturas[$i];
}

$media = $suma / $numero_elementos;

echo "<h4>Media: $media</h4>";

echo "<pre>";
print_r($temperaturas);
echo "</pre>"

?>
</body>
</html>