<?php
$data = json_decode(file_get_contents("data/data.json"));

// echo"<pre>";
// var_dump(file_get_contents("data/data.json"));
// // var_dump($data);
// echo"</pre>";

foreach($data as $person)
    echo $personne->nom;
    echo " ";
    echo $personne->prenom;


$f = "saveJSON.php";
$dis = "obj";
