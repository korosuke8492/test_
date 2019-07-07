<?php

require_once './dataa/func.php';

$Usern = htmlspecialchars($_POST['Usern']);
$name = hash(sha512, htmlspecialchars($_POST['passwd']));

