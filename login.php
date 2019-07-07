<?php

require_once '/login_func.php';
require_unlogined_session();
//入力したやつのハッシュ化
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($username)){
        $user_id = sha1($username);
    }else(empty($username)){
        http_response_code(404);
    }else{
        http_response_code(403);
    }

    if(isset($password)){
        $password_id = sha1($password);
    }else(empty($password)){
        http_response_code(404);
    }else{
        http_response_code(403);
    }

    login_se($user_id, $password_id);

    //認証する
    if($true_user == false){
        http_response_code(403);
    }else{
        session_regenerate_id(true);
        $_SESSION['username'] = $username;
        header('Location: /');
    }
}
?>
<!DOCTYPE html>
<title>ログインページ</title>
<h1>ログインしてください</h1>
<form method="post" action="">
    ユーザ名: <input type="text" name="username" value="">
    パスワード: <input type="password" name="password" value="">
    <input type="hidden" name="token" value="<?=h(generate_token())?>">
    <input type="submit" value="ログイン">
</form>
<?php if (http_response_code() === 403): ?>
<p style="color: red;">ユーザ名またはパスワードが違います</p>
<?php endif; ?>
<?php if (http_response_code() === 404): ?>
<p style="color: red;">ユーザー名またはパスワードを入力してください</p>
<?php endif; ?>