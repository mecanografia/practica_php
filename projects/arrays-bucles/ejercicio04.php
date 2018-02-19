<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Temperaturas</title>
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
$temperaturas = array();
for ($i = 0; $i < $numero_elementos; $i++){
    $temperaturas[$i] = rand(1,30);
}
echo "<pre>";
print_r($temperaturas);
echo "</pre>";

$tempe = 0;
foreach ($temperaturas as &$valor) {
    $tempe = $tempe + $valor;
}

$temp = array();
$contador = 0;
foreach ($temperaturas as &$valor) {
    $temp[$contador] = $valor;
    $contador++;
}
$media = $tempe / $numero_elementos;
$minima = min($temp);
$maxima = max($temp);

echo "<h4>Media: $media</h4>";
echo "<h4>Maximo: $maxima</h4>";
echo "<h4>Minimo: $minima</h4>";
?>
</body>
</html>