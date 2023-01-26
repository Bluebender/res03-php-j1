<?php

echo "<h2>Exercice 1</h2>";

$nb=42;
echo $nb;
echo "<br>";

$str='42'; 
echo $str;
echo "<br>";

$nbstr=$nb;
echo $nbstr;
echo "<br>";

echo "<h2>Exercice 2</h2>";

$nb_tab=[12, 2.2, 34.7, 32];
print_r($nb_tab);
echo "<br>";

$str_tab=["Vincent", "Killyan", "Louis", "Valmont"];
print_r($str_tab);
echo "<br>";

echo "<h2>Exercice 3</h2>";

$animal=["species"=>"chien", "name"=>"Mulane", "age"=>"8"];
print_r($animal);

echo "<h2>Exercice 4</h2>";

$data= 42;
$float= (float) $data;
$str= (string) $float;

echo $data."<br>";
echo $float."<br>";
echo $str."<br>";

echo "<h2>Exercice 5</h2>";

$animals = ["Chat", "Chien", "Lapin", "Souris"];
for ($i=0; $i<count($animals); $i++){
    echo "$animals[$i]<br>";
};



?>