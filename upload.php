<?php

$arquivo = $_FILES['arquivo'];

echo $arquivo['name'];
echo"<br>";
echo $arquivo['type'];
echo"<br>";


$extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
$extensao = strtolower($extensao);

echo $extensao;