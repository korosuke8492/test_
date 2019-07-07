<?php
$file = 'test.json';
$mae = file_get_contents($file);
$ary = json_decode($mae);

$Usern = 'yamadc';
$Numn = 0;
$name = 'test';

$ary = array($Usern=>$Numn) + (String)$ary;
$json = json_encode($ary);
file_put_contents("$name.json", $json);