<?php

$listaCidades = [
  1 => "Itapevi",
  2 => "Jandira",
  3 => "Barueri",
  4 => "Osasco",
  5 => "Santana de Parnaíba",
  6 => "Carapicuiba",
  7 => "São Paulo",
  8 => "Cotia",
];

$cidadeSelecionada = $_POST["cidade"];

echo $cidadeSelecionada;


echo "Você é de " . $listaCidades[$cidadeSelecionada];
