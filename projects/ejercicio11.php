<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ejercicio 10</title>
</head>
<body>
<form method="get">
    <label for="numero_monedas">Número de monedas: </label>
    <select name="numero_monedas">
        <option value="1" selected>1</option> 
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    <label for="tipo_moneda">Tipo de moneda: </label>
    <select name="tipo_moneda">
        <option value="dolar" selected>Dólar Estadounidense</option>
        <option value="euro">Euro</option>
        <option value="yen">Yen japonés</option>
        <option value="libra">Libra esterlina</option>
        <option value="franco">Franco suizo</option>
    </select>
<br>
<input type="submit" value="Enviar">
</form>
<?php

$numero_monedas = $_GET["numero_monedas"];
$tipo_moneda = $_GET["tipo_moneda"];

echo $numero_monedas;
echo "<br>";
echo $tipo_moneda;
echo "<br>";
echo "<br>";
$monedas = array ();

for ($i = 0; $i < $numero_monedas; $i++) {
    $monedas[$i] = rand(0,1);
}

for ($i = 0; $i < $numero_monedas; $i++){
    if ($monedas[$i] == 0){
        print "<img src=\"images/cara.jpg\">";
    } else {
        print "<img src=\"images/cruz.jpg\">";
    }
}

?>
</body>
</html>