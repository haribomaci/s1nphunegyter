<?php

echo file_get_contents('templates/head.html');
$page =  file_get_contents('templates/calc.html');

if(!empty ($_GET['aside'])
    and !empty ($_GET['bside'])
    and !empty ($_GET['cside'])
    ){

$aside = $_GET['aside'];
$bside = $_GET['bside'];
$cside = $_GET['cside'];
$area = calcArea($aside, $bside, $cside);

}
else{
        $area = "Hiba";
    }

function calcArea($aside, $bside, $cside){
    $v = (3/4) * M_PI * $aside * $bside * $cside;
    echo $v;
}

//$area = calcArea($aside, $bside, $cside);

//$page = str_replace('{{result}}', $v, $page);


echo file_get_contents('templates/foot.html');