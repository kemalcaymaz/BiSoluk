
<?php
$username = null;
$password = null;

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = test_input($_POST["username"]);
        $password = test_input($_POST["password"]);

        if($username == 'user' && $password == 'password') {
            session_start();
            $_SESSION["authenticated"] = 'true';
            header('Location: ../president.php');
        }
        else {
            header('Location: login.php');
        }

    } else {
        header('Location: login.php');
    }
} else {
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <title>Bi'Soluk</title>
    <meta name="robots" content="noindex">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div id="login-form">
    <form method="post">
        <div>
            <label for="username">Kullanıcı adı:</label>
            <input type="text" id="username" name="username" required>
        </div>

        <div>
            <label for="pass">Şifre:</label>
            <input type="password" id="pass" name="password" required>
        </div>

        <input type="submit" value="Giriş Yap">
    </form>

</div>
</body>

</html><?php } ?>