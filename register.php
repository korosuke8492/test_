<?php
require_once 'dataa/func.php';
require_once 'dataa/ethereum.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($username)){
        $name = sha1($username);
    }else(empty($password)){
        echo("ユーザー名が空です。");
    }else{
        http_response_code(403);
    }

    if(isset($password)){
        $Usern = sha1($password);
    }else(empty($password)){
        echo("パスワードが空です。");
    }else{
        http_response_code(403);
    }

    $Numn = count($ethereum->eth_accounts()) + '1';
    register($name, $Usern, $Numn);

    header('index.html');
}
?>

<!DOCTYPE html>
<title>登録</title>
<h1>登録ページです。</h1>
<form method="post" action="">
    ユーザ名: <input type="text" name="username" value="">
    パスワード: <input type="password" name="password" value="">
    <input type="submit" value="Register">
</form>

<?php if (http_response_code() === 403): ?>
<p style="color: red;">ユーザ名またはパスワードが違います</p>
<?php endif; ?>