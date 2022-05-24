<?php

echo file_get_contents('templates/head.html');
$page =  file_get_contents('templates/calc.html');//ezt át kell írni
$aside = $_GET['aside'];
$bside = $_GET['bside'];
$cside = $_GET['cside'];
$dside = $_GET['dside'];

function calcArea($aside, $bside, $cside, $dside){
    $s = ($aside+$bside+$cside+$dside)/2;
    $area = sqrt(($s-$aside)*($s-$bside)*($s-$cside)*($s-$dside));
    return $area;
}
$area = calcArea($aside, $bside, $cside, $dside);

$page = str_replace('{{result}}', $area, $page);
echo $page;

echo file_get_contents('templates/foot.html');