<?php

require_once 'dataa/func.php';
require_once 'dataa/ethereum.php';

/*
$name = ファイル名 = ユーザー名

$Usern = パスワードハッシュ

$Numb = gethの振り分け番号
*/

$yuzar = 'yamada';
$passwd = 'testt';

//$yuzar is ユーザー名
//$passwd is password
//register
$name = sha1($yuzar);
$Usern = sha1($passwd);
$Numn = count($ethereum->eth_accounts()) + '1';

register($Usern, $name, $Numn);
