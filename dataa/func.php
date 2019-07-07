<?php
//　い　つ　も　の　
require_once 'dataa/ethereum.php';
$ethereum = new Ethereum('localhost', '1641');
$url = "./json/db.json";

//register function
function register($Usern, $name, $Numn) {
    //ユーザー名の登録
    $ary = array($Usern=>$Numn);
    $json = json_encode($ary);
    file_put_contents("dataa/json/$name.json", $json);
}

//function test
function Hello() {
    echo "Hello World!\n";
}

